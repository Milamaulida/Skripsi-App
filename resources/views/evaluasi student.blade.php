@extends('layouts.sidebar')
@section('content')
<div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="Search">
            <a href="#">Search</a>
        </div>
        <div class="container mx-auto p-4">
        
        <br>

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


</div>
        

@endsection
