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
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 1</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Berpikir Komputasional</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 17]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 2</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Teknologi Informasi dan Komunikasi</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 18]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 3</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Sistem Komputer</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 19]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 4</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Jaringan Komputer dan Internet</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 20]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
    </div>
</div>
<div class="flex flex-col gap-4">
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
            <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 5</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">ANALISIS DATA</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 21]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 6</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">ALGORITMA DAN PEMROGRAMAN</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 22]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 7</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">DAMPAK SOSIAL INFORMATIKA</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 23]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
        <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">MATERI 8</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">PRAKTIK LINTAS BIDANG</div>            
            </div>
            <a href="{{ route('subject.show.kelas9', ['id' => 24]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
    </div>
@endsection
