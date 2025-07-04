@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Manajemen Akun</h1>
    <div class="mb-3">
        <a href="/add-account" class="btn btn-success">+ Tambah Akun</a>
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
                <button style="background-color: #28a745; color: white; border: none; padding: 5px 10px; border-radius: 4px;">
                    {{ $value->status }}
                </button>
                </td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="/edit-akun/1" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection
