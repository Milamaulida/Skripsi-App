@extends('layouts.admin')

@section('content')
<div class="container">
<h1 class="h3 mb-4 text-center">Tambah Data Siswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
    
        <label for="foto" class="form-label">Uploud Foto</label>
            <input type="file" name="foto" class="form-control">
              </div>

        <div class="mb-4">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" value="" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" value="" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="no_telepon" class="form-label">No Telepon</label>
            <input type="text" name="no_telepon" value="" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="/data-siswa" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
