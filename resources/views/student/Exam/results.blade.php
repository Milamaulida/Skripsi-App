@extends('layouts.student')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Hasil Ujian Saya</h2>

    @forelse ($results as $result)
    <div class="bg-white p-4 rounded-lg shadow mb-4">
        <div class="flex justify-between">
            <div>
                <h3 class="text-lg font-semibold text-blue-600">{{ $result->exam->title }}</h3>
                <p class="text-sm text-gray-600">Kelas: {{ $result->exam->nrclass->name ?? '-' }}</p>
                <p class="text-sm text-gray-600">Jumlah Soal: {{ $result->exam->questions->count() }}</p>
                <p class="text-sm text-gray-600">
                    Selesai pada:
                    {{ $result->finished_at ? \Carbon\Carbon::parse($result->finished_at)->format('d M Y H:i') : '-' }}
                </p>
            </div>
            <div class="text-right">
                <div class="text-3xl font-bold text-green-600">
                    {{ number_format($result->score, 2) }}
                </div>
                <div class="text-sm text-gray-500">Nilai</div>
            </div>
        </div>
    </div>
    @empty
    <div class="text-center text-gray-500">
        Belum ada hasil ujian yang tersedia.
    </div>
    @endforelse
</div>
@endsection
