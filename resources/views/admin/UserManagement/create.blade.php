@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Tambah User (Siswa / Guru)</h4>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select" required>
                <option value="">-- Pilih Status --</option>
                <option value="Active">Active</option>
                <option value="Non Active">Non Active</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="birth_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="address" class="form-control" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="image_path" class="form-control">
        </div>

        <div class="mb-3">
            <label>Peran</label>
            <select name="role_id" class="form-select" required>
                <option value="">-- Pilih Peran --</option>
                <option value="2">Siswa</option>
                <option value="3">Guru</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Kelas (Khusus Siswa)</label>
            <select name="class_id" class="form-select">
                <option value="">-- Tidak Ada / Guru --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">💾 Simpan User</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">↩️ Kembali</a>
    </form>
</div>
@endsection
