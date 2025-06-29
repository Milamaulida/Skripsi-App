@extends('layouts.teacher')

@section('content')
<div class="container py-5">
<a href="/value-teacher" class="text-gray-600 flex items-center mb-4">
        &larr; kembali
    </a>
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body px-5 py-4">
            <h2 class="mb-4 text-center text-primary fw-bold">
                <i class="bi bi-pencil-square me-2"></i> Edit Nilai Siswa
            </h2>

            <form action="" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="form-label fw-semibold text-muted">👤 Nama Siswa</label>
                    <div class="form-control-plaintext fs-5 fw-bold text-dark">
                       
                    </div>
                </div>

                <div class="bg-light p-3 rounded mb-4">
                    <h5 class="text-secondary fw-bold mb-3">📘 Penilaian Harian</h5>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="number" name="ph1" class="form-control" value="" placeholder="PH 1">
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="ph2" class="form-control" value="" placeholder="PH 2">
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="ph3" class="form-control" value="" placeholder="PH 3">
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="ph4" class="form-control" value="" placeholder="PH 4">
                        </div>
                    </div>
                </div>

                <div class="bg-light p-3 rounded mb-4">
                    <h5 class="text-secondary fw-bold mb-3">📝 UTS & UAS</h5>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="number" name="uts1" class="form-control" value="" placeholder="UTS 1">
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="uas1" class="form-control" value="" placeholder="UAS 1">
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="uts2" class="form-control" value="" placeholder="UTS 2">
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="uas2" class="form-control" value="" placeholder="UAS 2">
                        </div>
                    </div>
                </div>

                <div class="text-end">
                <div class="text-end">
    <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow-sm me-2">
        <i class="bi bi-check-circle me-1"></i> Simpan
    </button>
    <a href="/input nilai kelas 7 guru" class="btn btn-primary px-4 py-2 rounded-pill">
        <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
</div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
