@extends('layouts.teacher')
@section('content')
<div class="flex-1 bg-gray-50 px-8 py-6">

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
                Ayo Mulai Mengajar Bu Mila !!! <br/>
            </div>
        </div>
        <img src="{{ asset('images/pic2.png') }}" alt="Ilustrasi" class="w-40">
    </div>

    <div class="rounded-t-lg bg-[#00A5FF] py-3 text-center text-white text-xl font-semibold font-poppins">
        Kelas
    </div>
  
     <div class="grid grid-cols-3 gap-4">
    @foreach($data as $class)
      <div class="p-6 bg-gray-200 rounded-lg text-center">
        <h4 class="font-bold">Kelas {{ $class->name }}</h4>
        <a href="{{ route('teacher-materials', $class->id) }}">
          <img 
            src="{{ asset('images/Kelas '.$class->name.' pic.png') }}" 
            alt="Kelas {{ $class->name }}" 
            class="mx-auto"
          >
        </a>
      </div>
    @endforeach
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


