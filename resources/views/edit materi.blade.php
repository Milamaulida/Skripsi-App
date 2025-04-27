@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Edit Data Materi</h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="materi_ke" class="form-label">Materi Ke</label>
                    <input type="number" name="materi_ke" id="materi_ke" class="form-control" value="" required>
                </div>

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="" required>
                </div>

                <div class="mb-3">
                    <label for="video" class="form-label">Video Materi</label><br>
                    <video width="200" controls class="mb-2">
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <input type="file" name="video" id="video" class="form-control mt-2">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti video.</small>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Materi</label>
                    <textarea name="isi" id="isi" rows="5" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="/data materi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
