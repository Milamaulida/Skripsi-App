@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2">Tambah Exam</h4>

    <form action="{{ route('exams.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Judul Ujian</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <select name="class_id" class="form-select" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach($classes as $class)
                <option value="{{ $class->id }}" {{ $selectedClassId==$class->id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Urutan (Order)</label>
            <input type="number" name="order" class="form-control" value="{{ $nextOrder }}" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="is_active" class="form-select" required>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('exam.by-class', $selectedClassId) }}" class="btn btn-secondary">↩️ Kembali</a>
    </form>
</div>
@endsection
