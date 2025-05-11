@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
<h1 class="text-center fw-bold mb-4 pb-2">
    Halaman Evaluasi
</h1>

    <div class="mb-3">
        <select id="kelasFilter" class="form-select" style="width: 200px;">
            <option>Kelas 7</option>
            <option>Kelas 8</option>
            <option>Kelas 9</option>
        </select>
    </div>

    <div class="mb-3">
        <a href="/tambah soal evaluasi guru"><button class="btn btn-success">+ Tambah Soal</button></a>
        <button class="btn btn-danger">Hapus Semua</button>
    </div>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th><input type="checkbox" id="selectAll"></th>
                <th>No</th>
                <th>Soal</th>
                <th>Jenis Soal</th>
                <th>Jawaban</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 8; $i++)
            <tr>
                <td><input type="checkbox" name="soal[]" value="{{ $i }}"></td>
                <td>{{ $i }}</td>
                <td>
                    @if($i <= 5)
                        Jelaskan apa yang disebut dengan digital?
                    @else
                        Jelaskan apa itu komunikasi data?
                    @endif
                </td>
                <td>
                    @if($i <= 5)
                        PG
                    @else
                        Essay
                    @endif
                </td>
                <td>
                    @if($i <= 5)
                        A. Jawaban<br>B. Jawaban<br>C. Jawaban<br>D. Jawaban
                    @else
                        Digital Adalah...
                    @endif
                </td>
                <td>
                    <button class="btn btn-warning btn-sm">✎</button>
                    <button class="btn btn-danger btn-sm">🗑</button>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
    <br>
  
    <div class="d-flex justify-content-between align-items-center mt-3">
    <div class="d-flex align-items-center gap-2">
        <label for="perPage" class="form-label m-0">Tampilkan</label>
        <select id="perPage" class="form-select form-select-sm" style="width: 80px;">
            <option>10</option>
            <option>25</option>
            <option>50</option>
            <option>100</option>
        </select>
        <span class="ms-2">Dari 25 total data</span>
    </div>

    <nav>
        <ul class="pagination pagination-sm mb-0">
            <li class="page-item"><a class="page-link" href="#">Awal</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Akhir</a></li>
        </ul>
    </nav>
</div>


</div>

<script>
    document.getElementById('selectAll').addEventListener('change', function () {
        const checkboxes = document.querySelectorAll('input[name="soal[]"]');
        checkboxes.forEach(cb => cb.checked = this.checked);
    });
</script>
@endsection
