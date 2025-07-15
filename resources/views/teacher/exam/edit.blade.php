@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">
        Edit Exam - {{ $exam->title }}
    </h4>

    <form action="{{ route('exams.update', $exam->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Ujian</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $exam->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control"
                rows="3">{{ old('description', $exam->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="class_id" class="form-label">Kelas</label>
            <select name="class_id" class="form-select" required>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}" {{ $class->id == $exam->class_id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="order" class="form-label">Urutan</label>
            <input type="number" name="order" class="form-control" value="{{ old('order', $exam->order) }}" required>
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Status Aktif</label>
            <select name="is_active" class="form-select" required>
                <option value="1" {{ $exam->is_active ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$exam->is_active ? 'selected' : '' }}>Non Aktif</option>
            </select>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">💾 Update Exam</button>
            <a href="{{ route('exam.by-class', $exam->class_id) }}" class="btn btn-secondary">↩️ Kembali</a>
        </div>
    </form>
</div>
@endsection
