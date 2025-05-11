@extends('layouts.student')
@section('content')
<div class="flex-1 bg-gray-50">
<div class="flex justify-between items-center mb-8">
    <div class="relative w-70">
        <input type="text" placeholder="Search" class="border rounded p-2 pl-10 w-full">
        <div class="absolute inset-y-0 left-40 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>
    </div>

    <div class="flex items-center space-x-4">
        <div class="text-right">
            <div class="font-bold">Mila Maulida</div>
            <div class="text-sm text-gray-500">1234567890</div>
        </div>
        <img src="{{ asset('images/profile.jpeg') }}" alt="Profile" class="w-12 h-12 rounded-full">
    </div>
</div>

    <div class="mt-5 bg-white text-white p-5 rounded-lg flex items-center justify-between">
        <div>
        <div style="color: #00A5FF; font-size: 40px; font-family: Poppins; font-weight: 700; word-wrap: break-word">KONTAK PENGEMBANG &<br/>TENTANG KAMI</div>
        </div>
        <img src="{{ asset('images/pic2.png') }}" alt="Ilustrasi">
    </div>

    <div class="max-w-6xl mx-auto py-8 px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
     
        <div class="bg-white rounded-lg shadow p-4 text-center">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Profile" class="w-24 h-24 mx-auto rounded-full mb-4">
            <h2 class="text-lg font-bold text-blue-800">Mila Maulida</h2>
            <p class="text-sm text-gray-600">DEVELOPER</p>
            <div class="mt-4 flex justify-center space-x-3 text-gray-600 text-sm">
                <p><i class="fas fa-phone-alt"></i> 0123-4567-8910</p>
            </div>
            <div class="mt-2 text-sm text-gray-600">
                <p><i class="fas fa-envelope"></i> maulidamila07@gmail.com</p>
            </div>
            <div class="mt-2 flex justify-center space-x-3 text-blue-500">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="md:col-span-2 bg-white rounded-lg shadow p-6 text-justify text-gray-700">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus magna, iaculis vitae lorem sed, efficitur mattis mi. Cras maximus ipsum dui, et auctor mauris vestibulum eu. Morbi ipsum ipsum, congue a aliquam sit amet, faucibus vel tortor. Maecenas non porta enim. Nullam bibendum sapien est, ferment accumsan tortor bibendum vitae.
            </p>
            <br>
            <p>
                Morbi sed ante eget nunc rutrum vehicula quis suscipit orci. Donec ex ipsum, laoreet vel lobortis vel, condimentum sed odio. Sed blandit consequat libero, eget cursus quam ultricies eu. Nullam bibendum sapien est, ferment accumsan tortor bibendum vitae. Donec convallis mi nunc.
            </p>
        </div>
    </div>

    <div class="mt-10 bg-blue-500 text-white rounded-lg p-6 relative">
        <h3 class="text-lg font-bold mb-4">PROJECT LAIN DARI DEVELOPER</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @for($i = 0; $i < 2; $i++)
                <div class="bg-white text-gray-800 rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/Kelas 7 pic.png') }}" alt="Project" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-blue-700 mb-2">Lorem ipsum sit amet</h4>
                        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus magna, iaculis.</p>
                    </div>
                </div>
            @endfor
        </div>

      
        <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-12 h-24 bg-white rounded-l-full"></div>
    </div>
</div>

    
    
</div>
@endsection
