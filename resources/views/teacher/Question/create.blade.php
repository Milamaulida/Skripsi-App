@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">
        Tambah Soal Evaluasi
        @php
        $selectedClass = $classes->firstWhere('id', $classId);
        @endphp
        {{ $selectedClass ? 'Kelas ' . str_replace('Kelas ', '', $selectedClass->name) : '' }}
    </h4>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('questions.store') }}" method="POST">
        @csrf

        {{-- Hidden ID untuk redirect setelah simpan --}}
        <input type="hidden" name="class_id" value="{{ $classId }}">

        {{-- Pilih Kelas --}}
        <div class="mb-3">
            <label for="class_id" class="form-label">Pilih Kelas</label>
            <select name="class_id" id="class_id" class="form-select" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}" {{ $class->id == $classId ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Pertanyaan --}}
        <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <textarea name="question" id="question" class="form-control" rows="3"
                placeholder="Masukkan pertanyaan di sini" required></textarea>
        </div>

        {{-- Pilihan Jawaban --}}
        <div class="mb-3">
            <label class="form-label">Pilihan Jawaban</label>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_a" class="form-control" placeholder="Pilihan A" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_b" class="form-control" placeholder="Pilihan B" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_c" class="form-control" placeholder="Pilihan C" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_d" class="form-control" placeholder="Pilihan D" required>
                </div>
            </div>
        </div>

        {{-- Jawaban Benar --}}
        <div class="mb-4">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select name="correct_answer" class="form-select" required>
                <option value="">-- Pilih Jawaban Benar --</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>

        {{-- Tombol Simpan --}}
        <div class="text-end">
            <button type="submit" class="btn btn-primary">💾 Simpan Soal</button>
            <a href="{{ route('questions.index', ['class_id' => $classId]) }}" class="btn btn-secondary">↩️ Kembali</a>
        </div>
    </form>
</div>
@endsection
