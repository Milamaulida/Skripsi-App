@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Manajemen Akun</h1>
    <div class="mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-success">+ Tambah Akun</a>
    </div>
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;  ?>
            @foreach($data as $value)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->role->name }}</td>
                <td>
                    <button
                        style="background-color: #28a745; color: white; border: none; padding: 5px 10px; border-radius: 4px;">
                        {{ $value->status }}
                    </button>
                </td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('users.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('users.destroy', $value->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus akun ini?');">
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
