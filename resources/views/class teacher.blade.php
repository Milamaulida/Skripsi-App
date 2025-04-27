@extends('layouts.app')
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
        <div style="color: #00A5FF; font-size: 40px; font-family: Poppins; font-weight: 700; word-wrap: break-word">BUAT MATERI &<br/>TAMBAH MATERI</div>
        </div>
        <img src="{{ asset('images/pic2.png') }}" alt="Ilustrasi">

    </div>

    <div class="mt-6">
    <div style="width: 1030.70px; height: 59.14px; background: #00A5FF; border-top-left-radius: 10px; border-top-right-radius: 10px; display: flex; align-items: center; justify-content: center;">
  <div style="color: white; font-size: 24px; font-family: Poppins; font-weight: 600; word-wrap: break-word;">
    Kelas
  </div>
</div>

    <div class="grid grid-cols-3 gap-4">
            <div class="p-6 bg-gray-200 rounded-lg text-center">
            <h4 class="font-bold">Kelas 7</h4>
                <a href="/semester kelas 7 guru"><img src="{{asset('images/Kelas 7 pic.png')}}" alt=""></a>
            </div>
            <div class="p-4 bg-gray-200 rounded-lg text-center">
            <h4 class="font-bold">Kelas 8</h4>
                <a href="/semester kelas 8 guru"><img src="{{asset('images/Kelas 8 pic.png')}}" alt=""></a>
            </div>
            <div class="p-4 bg-gray-200 rounded-lg text-center">
                <h4 class="font-bold">Kelas 9</h4>
                <a href="/semester kelas 9 guru"><img src="{{asset('images/Kelas 9 pic.png')}}" alt=""></a>
            </div>
        </div>
    </div>

    
    <div class="mt-6 grid grid-cols-2 gap-4">
       
        <div class="bg-gray-100 p-4 rounded-lg">
        <div class="container mt-5 d-flex justify-content-center">
        <div class="content-container">
        <br>
            <div class="image-content">
            <img src="{{ asset('images/pic3.png') }}" alt="">
            </div>
        </div>
    </div>
        </div>

      
        <div class="bg-gray-100 p-4 rounded-lg">
        <center><div style="width: 117px; height: 22px; color: #3C3C3C; font-size: 14px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Riwayat Belajar</div></center>
        <br>
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/Riwayat Belajar.png') }}" alt="" class="w-30 h-40 rounded-lg shadow-lg">
            <div class="text-content">
            <div style="width: 100%; height: 100%; position: relative; color: #007DBA; font-size: 13px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI BAB 1 KELAS 7</div>
            <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 15px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 2</div>
            <div style="width: 100%; height: 100%; position: relative; text-align: justify; justify-content: center; display: flex; flex-direction: column; color: #3C3C3C; font-size: 15px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Morbi ipsum ipsum, congue a aliquam sit amet, faucibus vel tortor. Maecenas non porta enim. Nullam bibendum sapien est.</div>
            <a href=""><button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-2 rounded-lg right-10">
                Lanjut Pelajari
            </button></a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
