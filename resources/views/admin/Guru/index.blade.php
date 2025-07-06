@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Guru</h1>
    <br>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>NUPTK</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($data as $guru)
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    @if($guru->image_path)
                    <img src="{{ asset('storage/' . $guru->image_path) }}" alt="" width="60">
                    @else
                    <span>Tidak ada foto</span>
                    @endif
                </td>
                <td>{{ $guru->name }}</td>
                <td>{{ $guru->identification_number }}</td>
                <td>{{ \Carbon\Carbon::parse($guru->birth_date)->format('d-m-Y') }}</td>
                <td>{{ $guru->address }}</td>
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
