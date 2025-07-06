@extends('layouts.student')

@section('content')
<div class="flex-1 bg-gray-50 px-8 py-6">

    {{-- Header --}}
    <div class="flex justify-end mb-6">
        <div class="flex items-center space-x-4">
            <div class="text-right">
                <div class="font-semibold text-gray-800 text-md">Mila Maulida</div>
                <div class="text-sm text-gray-500">1234567890</div>
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

    {{-- Selamat Datang --}}
    <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center mb-8">
        <div>
            <div class="text-3xl text-[#00A5FF] font-bold leading-tight font-poppins">
                Ayo Belajar Mila
            </div>
        </div>
        <img src="{{ asset('images/pic2.png') }}" alt="Ilustrasi" class="w-40">
    </div>

    {{-- Judul Kelas --}}
    <div class="rounded-t-lg bg-[#00A5FF] py-3 text-center text-white text-xl font-semibold font-poppins">
        Daftar Kelas
    </div>

    {{-- List Kelas --}}
    @if($kelas)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
        <div class="p-6 bg-gray-200 rounded-lg text-center">
            <h4 class="font-bold">Kelas {{ $kelas->name }}</h4>
            <a href="{{ route('student.materials', $kelas->id) }}">
                <img src="{{ asset('images/Kelas '.$kelas->name.' pic.png') }}"
                    onerror="this.onerror=null;this.src='{{ asset('images/default-class.png') }}';"
                    alt="Kelas {{ $kelas->name }}" class="mx-auto">
            </a>
        </div>
    </div>
    @else
    <div class="alert alert-warning">Kamu belum terdaftar di kelas manapun.</div>
    @endif

    {{-- Riwayat Belajar --}}
    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-100 p-4 rounded-lg">
            <div class="flex justify-center">
                <img src="{{ asset('images/pic3.png') }}" alt="" class="w-48">
            </div>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg">
            <center>
                <div class="text-[#3C3C3C] text-sm font-semibold font-poppins">Riwayat Belajar</div>
            </center>
            <br>
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/Riwayat Belajar.png') }}" alt="" class="w-24 h-32 rounded-lg shadow-lg">
                <div class="text-content">
                    <div class="text-[#007DBA] text-sm font-semibold font-poppins">MATERI BAB 1 KELAS 7</div>
                    <div class="text-[#FED600] text-base font-semibold font-poppins">MATERI 2</div>
                    <div class="text-[#3C3C3C] text-sm font-poppins text-justify">Morbi ipsum ipsum, congue a aliquam
                        sit amet, faucibus vel tortor. Maecenas non porta enim. Nullam bibendum sapien est.</div>
                    <a href="#">
                        <button
                            class="mt-2 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-3 rounded-lg">
                            Lanjut Pelajari
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JS Dropdown Profile --}}
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
