@extends('layouts.teacher')

@section('content')
<div class="container mt-4">

    <a href="{{route('exam.select-class')}}" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>

    <h1 class="h3 mb-4 text-center">
        Input Exam Siswa Kelas {{ $class->name }}
    </h1>
    <a href="{{ route('exams.create', ['class_id' => $class->id]) }}" class="btn btn-success">+ Tambah Exam</a>
    <br><br>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Exam</th>
                <th>Exam Ke-</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp

            @foreach($exams as $value)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->order }}</td>
                <td>{{ $value->description }}</td>
                <td>
                    <span class="badge bg-{{ $value->is_active ? 'success' : 'secondary' }}">
                        {{ $value->is_active ? 'Aktif' : 'Tidak Aktif' }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('questions.index', ['exam_id' => $value->id]) }}"
                        class="btn btn-primary btn-sm">📝 Soal</a>
                    <a href="{{ route('exams.edit', $value->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                    <form action="{{ route('exams.destroy', $value->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">🗑️ Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
