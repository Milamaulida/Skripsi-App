@extends('layouts.teacher')

@section('content')
<div class="container mx-auto p-4">
    <a href="/input nilai kelas 7 guru"><div class="flex flex-col gap-4">
        <div class="bg-white shadow-lg rounded-lg p-2 flex items-center">
            <img src="{{ asset('images/nilai.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Madrasah Tsanawiyah Nur Rohmah</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Input Nilai</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 7</div>            
            </div>
        </div>
        </a>
    <a href="/input nilai kelas 8 guru"><div class="flex flex-col gap-4">
            <div class="bg-white shadow-lg rounded-lg p-2 flex items-center">
            <img src="{{ asset('images/nilai.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Madrasah Tsanawiyah Nur Rohmah</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Input Nilai</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 8</div>            
            </div>
        </div>
        </a>
        <a href="/input nilai kelas 9 guru"><div class="flex flex-col gap-4">
            <div class="bg-white shadow-lg rounded-lg p-2 flex items-center">
            <img src="{{ asset('images/nilai.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div style="position: relative; color: #00A5FF; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Madrasah Tsanawiyah Nur Rohmah</div>
                <div style="width: 100%; height: 100%; position: relative; color: #FED600; font-size: 45px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Input Nilai</div>
                <div style="position: relative; color: #3C3C3C; font-size: 16px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Kelas 9</div>            
            </div>
        </div>
        </a>
   
</div>
@endsection
