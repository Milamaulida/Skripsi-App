@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h1 class="text-center fw-bold mb-4 pb-2">Halaman Evaluasi</h1>

    {{-- Filter Kelas --}}
    <form method="GET" action="{{ route('questions.index') }}">
        <div class="mb-3">
            <label for="kelasFilter" class="form-label">Pilih Kelas:</label>
            <select name="class_id" id="kelasFilter" class="form-select" style="width: 200px;"
                onchange="this.form.submit()">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}" {{ $selectedClassId==$class->id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
                @endforeach
            </select>
        </div>
    </form>

    @if ($selectedClassId)
    {{-- Tombol Aksi --}}
    <div class="mb-3 d-flex gap-2">
        <a href="{{ route('questions.create', ['class_id' => $selectedClassId]) }}" class="btn btn-success">
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
            @forelse ($data as $index => $question)
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
                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm">✎</a>
                    <form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="d-inline">
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
