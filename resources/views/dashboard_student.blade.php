@extends('layouts.student')

@section('content')
<div class="bg-gray-50 min-h-screen px-6 pt-6 pb-10 font-poppins">

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
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Banner -->
    <div class="bg-blue-500 rounded-xl text-white p-6 flex flex-col-reverse md:flex-row items-center justify-between shadow-md mb-10">
        <div class="space-y-2 md:text-left text-center">
            <h2 class="text-xl md:text-2xl font-semibold">SELAMAT DATANG, MILA</h2>
            <h1 class="text-3xl md:text-4xl font-bold">Ayo Mulai Belajar!!</h1>
        </div>
        <img src="{{ asset('images/pic1.png') }}" alt="Ilustrasi" class="w-32 md:w-40">
    </div>

    
    <!-- Visi Misi -->
    <div class="max-w-6xl mx-auto mb-10 bg-white rounded-xl shadow-lg flex flex-col md:flex-row overflow-hidden">
        <div class="md:w-1/2">
            <img src="{{ asset('images/foto10.jpg') }}" alt="Upacara" class="h-full w-full object-cover">
        </div>
        <div class="md:w-1/2 p-8 text-gray-800 text-justify flex flex-col justify-center">
    <h3 class="text-3xl font-bold mb-4 text-blue-600">Visi</h3>
    <p class="mb-6 text-base  leading-relaxed">
        Menjadi Lembaga Pendidikan Representatif dalam mencetak generasi bangsa yang ber-IPTEK dan ber-IMTAQ.
    </p>
    <h3 class="text-3xl font-bold mb-4 text-blue-600">Misi</h3>
    <p class="mb-6 text-base  leading-relaxed">
        Mengembangkan dan meningkatkan pondasi anak didik agar memiliki life skill, kreatif, berkualitas, serta akhlak mulia yang kokoh.
    </p>
   
</div>
    </div>

    <!-- Ekstrakurikuler -->
    <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Kegiatan Ekstrakurikuler</h2>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @for($i = 1; $i <= 10; $i++)
                <div class="swiper-slide">
                    <img src="{{ asset('images/foto' . $i . '.jpg') }}" alt="Ekskul {{ $i }}" class="rounded-lg shadow-md w-full h-52 object-cover">
                </div>
                @endfor
            </div>
            <div class="swiper-pagination mt-3"></div>
        </div>
    </div>

    <!-- Swiper Styles and Script -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });
        });
    </script>
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
<br>
<br><br>
<br>

</div>
@endsection
