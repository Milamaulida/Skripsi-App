@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">
        Edit Soal Evaluasi - {{ $exam->title }}
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

    <form action="{{ route('questions.update', [$exam->id, $question->id]) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Pertanyaan --}}
        <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <textarea name="question" id="question" class="form-control" rows="3"
                required>{{ old('question', $question->question) }}</textarea>
        </div>

        {{-- Pilihan Jawaban --}}
        <div class="mb-3">
            <label class="form-label">Pilihan Jawaban</label>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_a" class="form-control"
                        value="{{ old('option_a', $question->option_a) }}" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_b" class="form-control"
                        value="{{ old('option_b', $question->option_b) }}" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_c" class="form-control"
                        value="{{ old('option_c', $question->option_c) }}" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" name="option_d" class="form-control"
                        value="{{ old('option_d', $question->option_d) }}" required>
                </div>
            </div>
        </div>

        {{-- Jawaban Benar --}}
        <div class="mb-4">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select name="correct_answer" class="form-select" required>
                <option value="">-- Pilih Jawaban Benar --</option>
                <option value="A" {{ old('correct_answer', $question->correct_answer) == 'A' ? 'selected' : '' }}>A
                </option>
                <option value="B" {{ old('correct_answer', $question->correct_answer) == 'B' ? 'selected' : '' }}>B
                </option>
                <option value="C" {{ old('correct_answer', $question->correct_answer) == 'C' ? 'selected' : '' }}>C
                </option>
                <option value="D" {{ old('correct_answer', $question->correct_answer) == 'D' ? 'selected' : '' }}>D
                </option>
            </select>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">💾 Update Soal</button>
            <a href="{{ route('questions.index', $exam->id) }}" class="btn btn-secondary">↩️ Kembali</a>
        </div>
    </form>
</div>
@endsection
