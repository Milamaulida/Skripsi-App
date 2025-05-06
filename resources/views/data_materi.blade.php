@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Materi</h1>
    <br>
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Materi</th>
                <th>Kelas</th>
                <th>Judul</th>
                <th>Video Materi</th>
                <th>Isi Materi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>

            @foreach($data as $value)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $value->material_number }}</td>
                <td>{{ optional($value->nrclass)->name ?? '-' }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->video_material}}</td>
                <td>{{ $value->description}}</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="/edit materi" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
