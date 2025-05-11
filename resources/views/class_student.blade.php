@extends('layouts.student')
@section('content')
<div class="flex-1 bg-gray-50 px-8 py-6">

 <!-- Profile Bar -->
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
                    <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan Akun</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center mb-8">
        <div>
            <div class="text-3xl text-[#00A5FF] font-bold leading-tight font-poppins">
                Ayo Belajar Mila <br/>
            </div>
        </div>
        <img src="{{ asset('images/pic2.png') }}" alt="Ilustrasi" class="w-40">
    </div>

    <div class="rounded-t-lg bg-[#00A5FF] py-3 text-center text-white text-xl font-semibold font-poppins">
        Kelas
    </div>

  
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 bg-white p-6 rounded-b-lg shadow-md mb-8">
        @php
            $kelas = [
                ['nama' => 'Kelas 7', 'url' => '/materi-kelas-7', 'gambar' => 'Kelas 7 pic.png'],
                ['nama' => 'Kelas 8', 'url' => '/materi-kelas-8', 'gambar' => 'Kelas 8 pic.png'],
                ['nama' => 'Kelas 9', 'url' => '/materi-kelas-9', 'gambar' => 'Kelas 9 pic.png'],
            ];
        @endphp

        @foreach($kelas as $k)
        <div class="p-4 bg-gray-100 rounded-lg text-center hover:shadow-lg transition duration-200">
            <h4 class="font-bold text-lg text-gray-800 mb-2">{{ $k['nama'] }}</h4>
            <a href="{{ $k['url'] }}">
                <img src="{{ asset('images/' . $k['gambar']) }}" alt="{{ $k['nama'] }}" class="mx-auto">
            </a>
        </div>
        @endforeach
    </div>

    <!-- Riwayat dan Ilustrasi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Ilustrasi -->
        <div class="bg-gray-100 p-6 rounded-lg flex justify-center items-center shadow">
            <img src="{{ asset('images/pic3.png') }}" alt="Ilustrasi" class="w-full max-w-sm">
        </div>

        <!-- Riwayat Belajar -->
        <div class="bg-gray-100 p-6 rounded-lg shadow">
            <div class="text-center text-sm text-gray-800 font-semibold font-poppins mb-4">
                Riwayat Belajar
            </div>
            <div class="flex gap-4">
                <img src="{{ asset('images/Riwayat Belajar.png') }}" alt="Riwayat Belajar" class="w-32 h-40 rounded-lg shadow">
                <div class="flex flex-col justify-between">
                    <div class="text-sm text-[#007DBA] font-semibold">MATERI BAB 1 KELAS 7</div>
                    <div class="text-md text-[#FED600] font-semibold">MATERI 2</div>
                    <div class="text-sm text-justify text-gray-700 font-medium">
                        Morbi ipsum ipsum, congue a aliquam sit amet, faucibus vel tortor. Maecenas non porta enim. Nullam bibendum sapien est.
                    </div>
                    <a href="#">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg mt-2">
                            Lanjut Pelajari
                        </button>
                    </a>
                </div>
            </div>
        </div>
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
