@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">Tambah Soal Evaluasi</h4>

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

        <div class="mb-3">
            <label for="class_id" class="form-label">Pilih Kelas</label>
            <select name="class_id" class="form-select" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label class="form-label">Pertanyaan</label>
            <input type="text" name="question" class="form-control" placeholder="Masukkan pertanyaan di sini" required>
        </div>


        <div class="mb-3 row">
            <label class="form-label">Jawaban:</label>
            <div class="col-md-6">
                <input type="text" name="option_a" class="form-control mb-2" placeholder="Pilihan A" required>
                <input type="text" name="option_b" class="form-control" placeholder="Pilihan B" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="option_c" class="form-control mb-2" placeholder="Pilihan C" required>
                <input type="text" name="option_d" class="form-control" placeholder="Pilihan D" required>
            </div>
        </div>

        {{-- Pilihan Jawaban Benar --}}
        <div class="mb-3">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select name="correct_answer" class="form-select" required>
                <option value="">-- Pilih Jawaban Benar --</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Soal</button>
    </form>
</div>
@endsection
