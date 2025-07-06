@extends('layouts.student')
@section('content')
<div class="container mx-auto p-4">
    <a href="/class-student" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>

    <div class="flex flex-col gap-4">
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
            <img src="{{ asset('images/bab.png') }}" alt="Materi" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div class="text-[#00A5FF] text-[30px] font-medium font-[Poppins]"> KELAS 54
                </div>
                <div class="text-[#FED600] text-[45px] font-semibold font-[Poppins]">MATERI dsasd</div>
                <div class="text-[#3C3C3C] text-[16px] font-medium font-[Poppins]">asdaasdaasdasd</div>
            </div>
            <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari
            </a>
        </div>
    </div>
</div>
@endsection
