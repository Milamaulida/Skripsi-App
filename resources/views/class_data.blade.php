@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Kelas</h1>

    <div class="mb-3">
        <a href="/tambah-akun" class="btn btn-success">+ Tambah Kelas</a>
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
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
        </tr>
        @endforeach
        </tbody>

    </table>
    
</div>
@endsection
