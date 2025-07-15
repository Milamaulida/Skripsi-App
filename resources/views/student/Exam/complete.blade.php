@extends('layouts.student')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded shadow-md text-center">
        <h2 class="text-2xl font-bold text-green-600">🎉 Ujian Selesai!</h2>
        <p class="mt-4 text-lg">Skor Anda: <span class="font-bold text-blue-500">{{ $score }}%</span></p>
        <p class="text-gray-600">Benar: {{ $correctCount }} / {{ $total }}</p>
        <a href="{{route('evaluasi_student')}}"
            class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded">Kembali
            ke Daftar Ujian</a>
    </div>
</div>
@endsection
