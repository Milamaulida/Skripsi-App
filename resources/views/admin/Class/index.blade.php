@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Kelas</h1>

    <div class="mb-3">
        <a href="{{ route('classes.create') }}" class="btn btn-success">+ Tambah Kelas</a>
    </div>
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($data as $class)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $class->name }}</td>
                <td class="text-center">
                    <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('classes.destroy', $class->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus kelas ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection
