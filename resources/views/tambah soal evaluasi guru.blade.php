@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2 ">
         Edit Soal Evaluasi Kelas 7
    </h4>

    <div class="mb-3">
        <div class="btn-group" role="group">
            <button class="btn btn-primary">Pilihan Ganda</button>
            <a href="/tambah soal evaluasi guru esai"><button class="btn btn-outline-primary">Essay</button></a>
        </div>
        <a href="/evaluasi teacher"><button class="btn btn-success float-end">Selesai & Simpan</button></a>
    </div>

    {{-- Form Input Soal Pilihan Ganda --}}
    <form>
        {{-- Soal 1 --}}
        <div class="mb-3">
            <label class="form-label">Soal No. 1</label>
            <input type="text" class="form-control" placeholder="Masukkan pertanyaan di sini">
        </div>

        <div class="mb-3 row">
            <label class="form-label">Jawaban:</label>
            <div class="col-md-6">
                <input type="text" class="form-control mb-2" placeholder="A">
                <input type="text" class="form-control" placeholder="B">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control mb-2" placeholder="C">
                <input type="text" class="form-control" placeholder="D">
            </div>
        </div>

        {{-- Soal 2 --}}
        <hr>
        <div class="mb-3">
            <label class="form-label">Soal No. 2</label>
            <input type="text" class="form-control" placeholder="Masukkan pertanyaan di sini">
        </div>

        <div class="mb-3 row">
            <label class="form-label">Jawaban:</label>
            <div class="col-md-6">
                <input type="text" class="form-control mb-2" placeholder="A">
                <input type="text" class="form-control" placeholder="B">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control mb-2" placeholder="C">
                <input type="text" class="form-control" placeholder="D">
            </div>
        </div>

        <button type="button" class="btn btn-outline-secondary">+ Tambah Soal</button>
    </form>
</div>
@endsection
