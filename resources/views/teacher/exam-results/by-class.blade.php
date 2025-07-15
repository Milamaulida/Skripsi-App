@extends('layouts.teacher')

@section('content')
<div class="flex-1 bg-gray-50 px-8 py-6">

    {{-- Header User --}}
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
                    <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan
                        Akun</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Judul Halaman --}}
    <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center mb-8">
        <div>
            <div class="text-3xl text-[#00A5FF] font-bold leading-tight font-poppins">
                Lihat Nilai Siswa
            </div>
        </div>
        <img src="{{ asset('images/pic2.png') }}" alt="Ilustrasi" class="w-40">
    </div>

    {{-- Header Kelas --}}
    <div class="rounded-t-lg bg-[#00A5FF] py-3 text-center text-white text-xl font-semibold font-poppins">
        Pilih Kelas
    </div>

    {{-- Daftar Kelas --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
        @forelse($classes as $class)
        <div class="p-6 bg-white border rounded-lg text-center shadow hover:shadow-md transition">
            <h4 class="font-bold text-lg text-gray-800 mb-2">Kelas {{ $class->name }}</h4>
            <a href="{{ route('teacher.exam.select', $class->id) }}">
                <img src="https://www.svgrepo.com/show/123364/grade.svg" alt="Kelas {{ $class->name }}"
                    class="w-12 h-12 mx-auto">
            </a>
        </div>
        @empty
        <div class="col-span-full text-center text-gray-500">
            Tidak ada data kelas.
        </div>
        @endforelse
    </div>
</div>

{{-- Script dropdown profile --}}
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
@endsection
