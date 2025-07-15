@extends('layouts.student')

@section('content')
<div class="flex-1 bg-gray-50">
    <div class="flex justify-end mb-6">
        <div class="flex items-center space-x-4">
            <div class="text-right">
                <div class="font-semibold text-gray-800 text-md">{{ Auth::user()->name }}</div>
                <div class="text-sm text-gray-500">{{ Auth::user()->username ?? Auth::user()->email }}</div>
            </div>
            <div class="relative">
                <button id="profileButton" class="focus:outline-none">
                    <img src="{{ asset('images/profile.jpeg') }}" alt="Profile"
                        class="w-12 h-12 rounded-full border-2 border-blue-400">
                </button>
                <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat Profil</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-4 space-y-6">
        @php
        $lockNext = false;
        @endphp

        @foreach($data as $exam)
        <div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
            <div class="w-24 h-24 rounded-md overflow-hidden">
                <img src="{{ asset('images/pic1.png') }}" alt="Gambar Penilaian" class="object-cover w-full h-full">
            </div>

            <div class="ml-4 flex-1">
                <div class="text-[#00A5FF] text-[30px] font-medium font-poppins">
                    {{ $exam->nrclass->name }}
                </div>
                <div class="text-[#FED600] text-[30px] font-bold font-poppins">
                    {{ strtoupper($exam->title) }}
                </div>
            </div>

            <div class="ml-4">
                @if(!$lockNext)
                @php
                $route = $exam->is_done
                ? route('exam.complete', ['exam_id' => $exam->id])
                : route('exam.question', ['exam_id' => $exam->id, 'number' => 1]);
                $label = $exam->is_done ? 'Lihat Hasil' : 'Mulai';
                $btnColor = $exam->is_done ? 'bg-green-500 hover:bg-green-600' : 'bg-sky-500 hover:bg-sky-600';
                @endphp

                <a href="{{ $route }}">
                    <button class="{{ $btnColor }} text-white text-sm px-4 py-2 rounded-full shadow">
                        {{ $label }}
                    </button>
                </a>
                @else
                <button disabled class="bg-gray-500 text-white px-4 py-2 rounded-full flex items-center gap-2">
                    <img src="{{ asset('images/logo kunci.png') }}" alt="Terkunci" width="20">
                </button>
                @endif
            </div>
        </div>

        @php
        if (!$exam->is_done) {
        $lockNext = true;
        }
        @endphp
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
