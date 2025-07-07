@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Edit User (Siswa / Guru)</h4>

    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select" required>
                <option value="Active" {{ $user->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Non Active" {{ $user->status == 'Non Active' ? 'selected' : '' }}>Non Active</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="birth_date" value="{{ old('birth_date', $user->birth_date) }}"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="address" class="form-control" rows="2">{{ old('address', $user->address) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Foto</label><br>
            @if($user->image_path)
            <img src="{{ asset('storage/' . $user->image_path) }}" width="100" class="mb-2"><br>
            @endif
            <input type="file" name="image_path" class="form-control">
        </div>

        <div class="mb-3">
            <label>Peran</label>
            <select name="role_id" class="form-select" required>
                <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>Siswa</option>
                <option value="3" {{ $user->role_id == 3 ? 'selected' : '' }}>Guru</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Kelas (Khusus Siswa)</label>
            <select name="class_id" class="form-select">
                <option value="">-- Tidak Ada / Guru --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}" {{ $user->class_id == $class->id ? 'selected' : '' }}>{{ $class->name
                    }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Password (Kosongkan jika tidak ingin mengganti)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">📝 Update User</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">↩️ Kembali</a>
    </form>
</div>
@endsection
