@extends('layouts.student')

@section('content')
<div class="max-w-5xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-bold text-blue-700 mb-8 border-b pb-2">📊 Hasil Ujian Saya</h2>

    @forelse ($results as $result)
    <div class="bg-white shadow-md rounded-lg p-6 mb-6 border-l-4 border-blue-500">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
            <div>
                <h3 class="text-xl font-semibold text-blue-600">{{ $result->exam->title }}</h3>
                <div class="text-gray-600 mt-1 space-y-1 text-sm">
                    <p><strong>Kelas:</strong> {{ $result->exam->nrclass->name ?? '-' }}</p>
                    <p><strong>Jumlah Soal:</strong> {{ $result->exam->questions->count() }}</p>
                    <p>
                        <strong>Selesai pada:</strong>
                        {{ $result->finished_at ? \Carbon\Carbon::parse($result->finished_at)->translatedFormat('d M Y
                        H:i') : '-' }}
                    </p>
                </div>
            </div>
            <div class="text-center md:text-right">
                <div class="text-4xl font-bold text-green-600">
                    {{ number_format($result->score, 2) }}
                </div>
                <div class="text-sm text-gray-500 mt-1">Nilai Akhir</div>
            </div>
        </div>
    </div>
    @empty
    <div class="text-center text-gray-500 mt-10 text-lg">
        🕐 Belum ada hasil ujian yang tersedia.
    </div>
    @endforelse
</div>
@endsection
