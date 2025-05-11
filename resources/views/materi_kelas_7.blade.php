@extends('layouts.student')

@section('content')
<div class="container mx-auto p-4">
    <a href="/class-student" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>
    <div class="flex flex-col gap-4">
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
            <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 1</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Berfikir Komputasional</div>            
            </div>
            <a href="{{  route('subject.show.kelas7', ['id' => 1]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
          
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 2</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Teknologi Informasi dan Komunikasi</div>            
            </div>
            <a href="{{ route('subject.show.kelas7', ['id' => 2]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 3</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Sistem Komputer</div>            
            </div>
            <a href="{{ route('subject.show.kelas7', ['id' => 3]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 4</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Jaringan Komputer dan Internet</div>            
            </div>
            <a href="{{ route('subject.show.kelas7', ['id' => 4]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
            <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 5</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Analisis Data</div>            
            </div>
            <a href="{{ route('subject.show.kelas7', ['id' => 5]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 6</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Algoritma dan Pemograman</div>            
            </div>
            <a href="{{ route('subject.show.kelas7', ['id' => 6]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 7</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Dampak Sosial Informatika</div>            
            </div>
            <a href="{{route('subject.show.kelas7', ['id' => 7])}}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 8</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Praktik Lintas Bidang Informatika</div>            
            </div>
            <a href="{{ route('subject.show.kelas7', ['id' => 8]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
            
        </div>
    </div>
</div>

@endsection
