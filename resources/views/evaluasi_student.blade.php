@extends('layouts.student')
@section('content')
<div class="flex-1 bg-gray-50">
    <div class="flex justify-end mb-6">
        <div class="flex items-center space-x-4">
            <div class="text-right">
                <div class="font-semibold text-gray-800 text-md">Mila Maulida</div>
                <div class="text-sm text-gray-500">1234567890</div>
            </div>
            <div class="relative">
                <button id="profileButton" class="focus:outline-none">
                    <img src="{{ asset('images/profile.jpeg') }}" alt="Profile" class="w-12 h-12 rounded-full border-2 border-blue-400">
                </button>
                <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat Profil</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-4 space-y-6">
        @foreach($data as $exam)
        <div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
            <div class="w-24 h-24 rounded-md overflow-hidden">
                <img src="{{ asset('images/pic1.png') }}" alt="Gambar Penilaian" class="object-cover w-full h-full">
            </div>

            <div class="ml-4 flex-1">
            <div class="text-[#00A5FF] text-[30px] font-medium font-poppins">Kelas {{ $exam->nrclass->name }}</div>
            <div class="text-[#FED600] text-[30px] font-bold font-poppins">{{ strtoupper($exam->type) }}</div>
            </div>

            <div class="ml-4">
                @php
                    $unlocked = $loop->first; // hanya exam pertama yang bisa diakses
                    $url = '/exam/' . $exam->id . '/start'; // ganti sesuai routing soal ujian
                @endphp
                @if($unlocked)
                    <a href="{{ route('exam.question', ['exam' => $exam->id, 'number' => 1]) }}">
                        <button class="bg-sky-500 hover:bg-sky-600 text-white text-sm px-4 py-2 rounded-full shadow">
                            Mulai
                        </button>
                    </a>
                @else
                    <button disabled class="bg-gray-500 text-white px-4 py-2 rounded-full flex items-center gap-2">
                        <img src="{{ asset('images/logo kunci.png') }}" alt="Terkunci" width="20">
                    </button>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const profileButton = document.getElementById('profileButton');
            const profileMenu = document.getElementById('profileMenu');

            profileButton.addEventListener('click', function () {
                profileMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function (e) {
                if (!profileButton.contains(e.target) && !profileMenu.contains(e.target)) {
                    profileMenu.classList.add('hidden');
                }
            });
        });
    </script>
</div>
@endsection
