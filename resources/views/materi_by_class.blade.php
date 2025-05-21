@extends('layouts.student')

@section('content')
<div class="container mx-auto p-4">
    <a href="/class-student" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>
    
    <div class="flex flex-col gap-4">
        @php
            $materiList = [
                ['id' => 1, 'judul' => 'Berfikir Komputasional'],
                ['id' => 2, 'judul' => 'Teknologi Informasi dan Komunikasi'],
                ['id' => 3, 'judul' => 'Sistem Komputer'],
                ['id' => 4, 'judul' => 'Jaringan Komputer dan Internet'],
                ['id' => 5, 'judul' => 'Analisis Data'],
                ['id' => 6, 'judul' => 'Algoritma dan Pemograman'],
                ['id' => 7, 'judul' => 'Dampak Sosial Informatika'],
                ['id' => 8, 'judul' => 'Praktik Lintas Bidang Informatika'],
            ];
        @endphp

        @foreach($materiList as $index => $materi)
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
            <img src="{{ asset('images/bab.png') }}" alt="Materi" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div class="text-[#00A5FF] text-[30px] font-medium font-[Poppins]">Kelas 7</div>
                <div class="text-[#FED600] text-[45px] font-semibold font-[Poppins]">MATERI {{ $materi['id'] }}</div>
                <div class="text-[#3C3C3C] text-[16px] font-medium font-[Poppins]">{{ $materi['judul'] }}</div>            
            </div>
            <a href="{{ route('subject.show.kelas7', ['id' => $materi['id']]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari 
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
