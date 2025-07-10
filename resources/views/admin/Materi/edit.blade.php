@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">Edit Materi Pembelajaran</h4>

    <form action="{{ route('learning-materials.update.admin', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Materi</label>
            <input type="text" name="title" class="form-control" value="{{ $subject->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $subject->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="class_id" class="form-label">Kelas</label>
            <select name="class_id" class="form-select" required>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}" {{ $subject->class_id == $class->id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="video_material" class="form-label">Video Materi (Link atau Nama File)</label>
            <input type="text" name="video_material" class="form-control" value="{{ $subject->video_material }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/teacher-materials" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
