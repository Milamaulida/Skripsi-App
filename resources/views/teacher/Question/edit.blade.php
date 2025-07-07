@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">
        Edit Soal Evaluasi
        @php
        $selectedClass = $classes->firstWhere('id', $question->class_id);
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

    <form action="{{ route('questions.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Hidden --}}
        <input type="hidden" name="class_id" value="{{ $question->class_id }}">

        <div class="mb-3">
            <label for="class_id" class="form-label">Pilih Kelas</label>
            <select name="class_id" id="class_id" class="form-select" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}" {{ $class->id == $question->class_id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <textarea name="question" id="question" class="form-control" rows="3"
                required>{{ $question->question }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Pilihan Jawaban</label>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_a" class="form-control" value="{{ $question->option_a }}" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_b" class="form-control" value="{{ $question->option_b }}" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_c" class="form-control" value="{{ $question->option_c }}" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_d" class="form-control" value="{{ $question->option_d }}" required>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select name="correct_answer" class="form-select" required>
                <option value="">-- Pilih Jawaban Benar --</option>
                @foreach(['A','B','C','D'] as $letter)
                <option value="{{ $letter }}" {{ $question->correct_answer == $letter ? 'selected' : '' }}>{{ $letter }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">💾 Update Soal</button>
            <a href="{{ route('questions.index', ['class_id' => $question->class_id]) }}" class="btn btn-secondary">↩️
                Kembali</a>
        </div>
    </form>
</div>
@endsection
