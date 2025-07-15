@extends('layouts.teacher')

@section('content')
<div class="flex-1 bg-gray-50 px-8 py-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-blue-600">Daftar Ujian - Kelas {{ $class->name }}</h1>
    </div>

    <div class="grid grid-cols-2 gap-4">
        @forelse ($exams as $exam)
        <div class="bg-white p-4 rounded shadow flex justify-between items-center">
            <div>
                <h2 class="text-lg font-semibold">{{ strtoupper($exam->title) }}</h2>
                <p class="text-gray-600">Jumlah Soal: {{ $exam->questions->count() }}</p>
            </div>
            <a href="{{ route('teacher.exam.results', $exam->id) }}"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-semibold text-sm">
                Lihat Nilai
            </a>
        </div>
        @empty
        <p class="text-gray-500 col-span-2">Tidak ada ujian di kelas ini.</p>
        @endforelse
    </div>
</div>
@endsection
