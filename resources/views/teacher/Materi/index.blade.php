@extends('layouts.teacher')

@section('content')
<div class="container mt-4">

    <a href="/class-teacher" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>

    <h1 class="h3 mb-4 text-center">
        Input Materi Siswa Kelas {{ $class->name }}
    </h1>
    <a href="{{ route('subject.create') }}" class="btn btn-success">+ Tambah Materi</a>

    <br><br>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Materi Ke-</th>
                <th>Judul</th>
                <th>Isi Materi</th>
                <th>Video Materi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp

            @foreach($data as $value)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $value->sequence ?? '-' }}</td> <!-- optional: materi ke- -->
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->video_material }}</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('subject.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('subject.destroy', $value->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
