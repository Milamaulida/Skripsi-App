@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Siswa</h1>

    <form method="GET" action="" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <select name="kelas" class="form-select" onchange="this.form.submit()">
                    <option value="">-- Semua Kelas --</option>
                    <option value="7" {{ request('kelas')=='7' ? 'selected' : '' }}>Kelas 7</option>
                    <option value="8" {{ request('kelas')=='8' ? 'selected' : '' }}>Kelas 8</option>
                    <option value="9" {{ request('kelas')=='9' ? 'selected' : '' }}>Kelas 9</option>
                </select>
            </div>
        </div>
    </form>

    @if ($data->isEmpty())
    <div class="alert alert-info">Tidak ada data siswa.</div>
    @else
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>Tanggal Lahir</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($data as $siswa)
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    @if ($siswa->image_path)
                    <img src="{{ asset('storage/' . $siswa->image_path) }}" alt="" width="60">
                    @else
                    <span class="text-muted">Tidak ada foto</span>
                    @endif
                </td>
                <td>{{ $siswa->name ?? '-' }}</td>
                <td>{{ $siswa->nrclass->name ?? '-' }}</td>
                <td>{{ $siswa->identification_number ?? '-' }}</td>
                <td>{{ $siswa->birth_date ? \Carbon\Carbon::parse($siswa->birth_date)->format('d-m-Y') : '-' }}
                </td>
                <td>{{ $siswa->phone ?? '-' }}</td>
                <td>{{ $siswa->address ?? '-' }}</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('users.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('users.destroy', $siswa->id) }}" method="POST"
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
    @endif
</div>
@endsection
