@extends('layouts.sidebar')
@section('content')

<div class="container mt-5 d-flex justify-content-center">
        <div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="Search">
            <a href="#">Search</a>
        </div>
    </div>

    <div class="mt-5 bg-blue-500 text-white p-5 rounded-lg flex items-center justify-between">
    <img src="{{ asset('images/pic1.png') }}" alt="Ilustrasi">
        <div>
        <div style="width: 345px; height: 38px; color: white; font-size: 24px; font-family: Poppins; font-weight: 700; word-wrap: break-word">SELAMAT DATANG, MILA</div>
        <div style="width: 460.06px; height: 63.17px; color: white; font-size: 40px; font-family: Poppins; font-weight: 700; word-wrap: break-word">AYO MULAI BELAJAR!!</div>
        </div>
    </div>
    <div class="max-w-5xl mx-auto my-6 p-6 bg-white rounded-xl shadow-md flex flex-col md:flex-row gap-6">
    <div class="md:w-1/2">
        <img src="{{ asset('images/upacara.jpg') }}" alt="Upacara" class="w-full h-auto rounded-lg object-cover">
    </div>
    <div class="md:w-1/2 text-justify text-gray-700">
    <div style="width: 100%; height: 100%; color: #3C3C3C; font-size: 14px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id quam at orci cursus congue vitae sit amet enim. Fusce bibendum, nunc vel aliquam mollis, ex justo blandit lectus, ac tempor diam nisl vitae lacus. Phasellus in neque sagittis, pulvinar tortor a, placerat est. Sed fringilla orci arcu, eget sodales felis rhoncus nec. Sed efficitur, magna quis sodales bibendum, elit eros fringilla lectus, et laoreet magna leo at tellus. Vivamus volutpat non nibh semper rhoncus. Integer at felis sed lectus consequat sagittis et a risus. Aliquam pulvinar pulvinar nulla at fermentum. Curabitur malesuada convallis mauris vel ullamcorper. Aenean sed imperdiet tellus, non laoreet sem. Aenean id ipsum tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam animi expedita optio, consectetur dolor aliquam alias vero totam dicta vitae sint quia non quod ipsam, explicabo nesciunt ipsa similique nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestias quis sint reiciendis eaque pariatur excepturi qui sunt deleniti, nihil quisquam, consectetur harum dolore, asperiores nam officiis praesentium animi esse.</div>
    </div>
</div>

<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-4">
    <div class="mb-4">
        <h2 class="text-lg font-semibold text-gray-800">Kegiatan Ekstrakurikuler</h2>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/foto1.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto2.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 2">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto3.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto4.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto5.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto6.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto7.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto8.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto9.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/foto10.jpg') }}" class="w-full h-52 object-cover rounded-lg" alt="Ekskul 3">
            </div>
          
        </div>
        <div class="swiper-pagination mt-3"></div>
    </div>
</div>


<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
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
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    });
</script>

</div>
@endsection
