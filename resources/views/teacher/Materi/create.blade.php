@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">Tambah Materi Pembelajaran</h4>

    <form action="{{ route('subject.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Judul Materi --}}
        <div class="mb-3">
            <label for="title" class="form-label">Judul Materi</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul materi"
                required>
        </div>

        {{-- Deskripsi Materi --}}
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="4"
                placeholder="Masukkan deskripsi materi" required></textarea>
        </div>

        {{-- Kelas --}}
        <div class="mb-3">
            <label for="class_id" class="form-label">Pilih Kelas</label>
            <select name="class_id" id="class_id" class="form-select" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Link atau Upload Video --}}
        <div class="mb-3">
            <label for="video_material" class="form-label">Video Materi (Link YouTube atau nama file)</label>
            <input type="text" name="video_material" id="video_material" class="form-control"
                placeholder="Contoh: https://youtube.com/..." required>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan Materi</button>
            <a href="{{ route('teacher.materials') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
