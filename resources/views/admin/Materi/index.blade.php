@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Materi</h1>
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
                        <a href="{{ route('learning-materials.edit.admin', $value->id) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('learning-materials.destroy', $value->id) }}" method="POST"
                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
