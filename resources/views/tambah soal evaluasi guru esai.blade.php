@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4 class="text-center fw-bold mb-4 pb-2 ">
        📝 Edit Soal Evaluasi Kelas 7
    </h4>

    <div class="mb-3 d-flex justify-content-between">
        <div class="btn-group" role="group">
            <a href="/tambah soal evaluasi guru" class="btn btn-outline-primary">Pilihan Ganda</a>
            <a href="#" class="btn btn-primary">Essay</a>
        </div>
        <a href="/evaluasi teacher"><button class="btn btn-success">Selesai & Simpan</button>
        </div></a>


    <form>
        {{-- Soal 1 --}}
        <div class="mb-3">
            <label class="form-label">Soal No. 1</label>
            <input type="text" class="form-control" placeholder="Masukkan pertanyaan essay">
        </div>
        <div class="mb-4">
            <label class="form-label">Jawaban</label>
            <textarea class="form-control" rows="2" placeholder="Contoh jawaban..."></textarea>
        </div>

        {{-- Soal 2 --}}
        <hr>
        <div class="mb-3">
            <label class="form-label">Soal No. 2</label>
            <input type="text" class="form-control" placeholder="Masukkan pertanyaan essay">
        </div>
        <div class="mb-4">
            <label class="form-label">Jawaban</label>
            <textarea class="form-control" rows="2" placeholder="Contoh jawaban..."></textarea>
        </div>

        <button type="button" class="btn btn-outline-secondary">+ Tambah Soal</button>
    </form>
</div>
@endsection
