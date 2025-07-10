@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h1 class="text-center fw-bold mb-4 pb-2">Halaman Soal {{$exam->title}}</h1>


    @if (isset($exam))
    {{-- Tombol Aksi --}}
    <div class="mb-3 d-flex gap-2">
        <a href="{{ route('questions.create', ['exam_id' => $exam->id]) }}" class="btn btn-success">
            + Tambah Soal
        </a>
    </div>

    {{-- Tabel Soal --}}
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Soal</th>
                <th>Jawaban</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($questions as $index => $question)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $question->question }}</td>
                <td>
                    A. {{ $question->option_a }}<br>
                    B. {{ $question->option_b }}<br>
                    C. {{ $question->option_c }}<br>
                    D. {{ $question->option_d }}<br>
                    <strong class="text-success">Jawaban Benar: {{ $question->correct_answer }}</strong>
                </td>
                <td>
                    <a href="{{ route('questions.edit', [$exam->id, $question->id]) }}"
                        class="btn btn-warning btn-sm">✎</a>

                    <form action="{{ route('questions.destroy', [$exam->id, $question->id]) }}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus soal ini?')">🗑</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada soal untuk kelas ini.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @else
    <div class="alert alert-info">Silakan pilih kelas terlebih dahulu untuk melihat soal.</div>
    @endif
</div>
@endsection
