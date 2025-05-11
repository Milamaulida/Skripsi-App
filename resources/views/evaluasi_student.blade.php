@extends('layouts.student')
@section('content')
<div class="flex-1 bg-gray-50">
<div class="flex justify-end items-center mb-8">

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
</div>

        <div class="container mx-auto p-4">
<div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
    <div class="w-24 h-24 rounded-md overflow-hidden">
        <img src="{{ asset('images/Kelas 8 pic.png') }}" alt="" class="object-cover w-full h-full">
    </div>
    <div class="ml-4 flex-1">
        <div style="position: relative; color: #00A5FF; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
        <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 35px; font-family: Poppins; font-weight: 600; word-wrap: break-word">PENILAIAN HARIAN KE 1</div>
    </div>

 
    <div class="ml-4">
        <a href="/penilaian harian 1 kelas 7"><button class="bg-sky-500 hover:bg-sky-600 text-white text-sm px-4 py-1.5 rounded-full shadow">
            Mulai
        </button></a>
    </div>
</div>

<br>

<div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
    
    <div class="w-24 h-24 rounded-md overflow-hidden">
        <img src="{{ asset('images/Kelas 8 pic.png') }}" alt="Gambar Penilaian" class="object-cover w-full h-full">
    </div>


    <div class="ml-4 flex-1">
    <div style="position: relative; color: #00A5FF; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
    <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 35px; font-family: Poppins; font-weight: 600; word-wrap: break-word">PENILAIAN HARIAN KE 2</div>

    </div>

  
    <div class="ml-4">
    <button disabled style="background-color: gray; color: white; padding: 6px 18px; border-radius: 15px; border: none; display: flex; align-items: center; gap: 8px;">
    <a href="/penilaian harian 2 kelas 7"><img src="{{ asset('images/logo kunci.png') }}" alt="Terkunci" width="20" height="20"></a>
</button>
    </div>
    
</div>
<br>

<div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
    
    <div class="w-24 h-24 rounded-md overflow-hidden">
        <img src="{{ asset('images/Kelas 8 pic.png') }}" alt="Gambar Penilaian" class="object-cover w-full h-full">
    </div>

    <div class="ml-4 flex-1">
    <div style="position: relative; color: #00A5FF; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
    <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 35px; font-family: Poppins; font-weight: 600; word-wrap: break-word">PENILAIAN TENGAH SEMESTER</div>

    </div>
<br>
  
    <div class="ml-4">
    <button disabled style="background-color: gray; color: white; padding: 6px 18px; border-radius: 15px; border: none; display: flex; align-items: center; gap: 8px;">
    <a href="/penilaian tengah semester kelas 7"><img src="{{ asset('images/logo kunci.png') }}" alt="Terkunci" width="20" height="20"></a>

</button>
    </div>
</div>
<br>
<div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
    
    <div class="w-24 h-24 rounded-md overflow-hidden">
        <img src="{{ asset('images/Kelas 8 pic.png') }}" alt="Gambar Penilaian" class="object-cover w-full h-full">
    </div>


    <div class="ml-4 flex-1">
    <div style="position: relative; color: #00A5FF; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
    <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 35px; font-family: Poppins; font-weight: 600; word-wrap: break-word">PENILAIAN HARIAN KE 3</div>

    
    </div>

  
    <div class="ml-4">
    <button disabled style="background-color: gray; color: white; padding: 6px 18px; border-radius: 15px; border: none; display: flex; align-items: center; gap: 8px;">
    <a href="/penilaian harian 3 kelas 7"><img src="{{ asset('images/logo kunci.png') }}" alt="Terkunci" width="20" height="20"></a>
</button>
    </div>
</div>

<br>
<div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
    
    <div class="w-24 h-24 rounded-md overflow-hidden">
        <img src="{{ asset('images/Kelas 8 pic.png') }}" alt="Gambar Penilaian" class="object-cover w-full h-full">
    </div>


    <div class="ml-4 flex-1">
    <div style="position: relative; color: #00A5FF; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
    <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 35px; font-family: Poppins; font-weight: 600; word-wrap: break-word">PENILAIAN HARIAN KE 4</div>

    
    </div>

  
    <div class="ml-4">
    <button disabled style="background-color: gray; color: white; padding: 6px 18px; border-radius: 15px; border: none; display: flex; align-items: center; gap: 8px;">
    <a href="/penilaian harian 4 kelas 7"><img src="{{ asset('images/logo kunci.png') }}" alt="Terkunci" width="20" height="20"></a>
    
</button>
    </div>
</div>
<br>
<div class="flex items-center bg-white rounded-xl shadow-md p-4 w-full max-w-6xl">
    
    <div class="w-24 h-24 rounded-md overflow-hidden">
        <img src="{{ asset('images/Kelas 8 pic.png') }}" alt="Gambar Penilaian" class="object-cover w-full h-full">
    </div>


    <div class="ml-4 flex-1">
    <div style="position: relative; color: #00A5FF; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
    <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 35px; font-family: Poppins; font-weight: 600; word-wrap: break-word">PENILAIAN AKHIR SEMESTER</div>

    
    </div>

  
    <div class="ml-4">
    <button disabled style="background-color: gray; color: white; padding: 6px 18px; border-radius: 15px; border: none; display: flex; align-items: center; gap: 8px;">
    <a href="/penilaian akhir semester kelas 7"><img src="{{ asset('images/logo kunci.png') }}" alt="Terkunci" width="20" height="20"></a>
    
</button>
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
