@extends('layouts.admin')

@section('content')
<div class="container">
        <h1 class="h3 mb-4 text-center">Tambah Data Guru</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="foto" class="form-label">Foto Guru</label><br>
            <input type="file" name="foto" class="form-control">
        </div>

        <div class="mb-4">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" value="" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="nuptk" class="form-label">NUPTK</label>
            <input type="text" name="nuptk" value="" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="/data guru" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
