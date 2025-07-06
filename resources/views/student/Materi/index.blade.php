@extends('layouts.student')
@section('content')
<div class="container mx-auto p-4">
    <a href="/class-student" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>

    <h2 class="text-2xl font-bold text-[#00A5FF] mb-4">
        Materi Kelas {{ $kelas->name }}
    </h2>

    <div class="flex flex-col gap-4">
        @forelse($materi as $item)
        <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
            <img src="{{ asset('images/bab.png') }}" alt="Materi" class="w-36 h-36 rounded-lg mr-4">
            <div class="flex-1">
                <div class="text-[#FED600] text-[24px] font-semibold font-[Poppins]">{{ $item->title ?? 'Judul Materi'
                    }}</div>
                <div class="text-[#3C3C3C] text-[16px] font-medium font-[Poppins]">{{ Str::limit($item->description,
                    100) ?? 'Deskripsi materi' }}</div>
            </div>
            <a href="{{ route('student.materials.detail', $item->id) }}"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                Pelajari </a>
        </div>
        @empty
        <div class="text-gray-500">Belum ada materi untuk kelas ini.</div>
        @endforelse
    </div>
</div>
@endsection
