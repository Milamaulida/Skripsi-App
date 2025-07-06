@extends('layouts.teacher')

@section('content')
<div class="container mt-4">
    <h1 class="text-center fw-bold mb-4 pb-2">Halaman Evaluasi</h1>

    {{-- Filter Kelas --}}
    <form method="GET" action="{{ route('questions.index') }}">
        <div class="mb-3">
            <label for="kelasFilter" class="form-label">Pilih Kelas:</label>
            <select name="class_id" id="kelasFilter" class="form-select" style="width: 200px;"
                onchange="this.form.submit()">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                <option value="{{ $class->id }}" {{ $selectedClassId==$class->id ? 'selected' : '' }}>
                    {{ $class->name }}
                </option>
                @endforeach
            </select>
        </div>
    </form>

    {{-- Tampilkan soal jika kelas dipilih --}}
    @if ($selectedClassId)
    <div class="mb-3">
        <a href="{{ route('questions.create') }}?class_id={{ $selectedClassId }}" class="btn btn-success">+ Tambah
            Soal</a>
        <form method="POST" action="/" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="hidden" name="class_id" value="{{ $selectedClassId }}">
            <button type="submit" class="btn btn-danger"
                onclick="return confirm('Hapus semua soal yang dipilih?')">Hapus Semua</button>
        </form>
    </div>

    <form method="POST" action="/">
        @csrf
        @method('DELETE')
        <input type="hidden" name="class_id" value="{{ $selectedClassId }}">

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                    <th>No</th>
                    <th>Soal</th>
                    <th>Jawaban</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $index => $question)
                <tr>
                    <td><input type="checkbox" name="selected_questions[]" value="{{ $question->id }}"></td>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $question->question }}</td>
                    <td>
                        A. {{ $question->option_a }}<br>
                        B. {{ $question->option_b }}<br>
                        C. {{ $question->option_c }}<br>
                        D. {{ $question->option_d }}<br>
                        <strong>Jawaban Benar: {{ $question->correct_answer }}</strong>
                    </td>
                    <td>
                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm">✎</a>
                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus soal ini?')">🗑</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada soal untuk kelas ini.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </form>
    @else
    <div class="alert alert-info">Silakan pilih kelas terlebih dahulu untuk melihat soal.</div>
    @endif
</div>

<script>
    document.getElementById('selectAll').addEventListener('change', function () {
        const checkboxes = document.querySelectorAll('input[name="selected_questions[]"]');
        checkboxes.forEach(cb => cb.checked = this.checked);
    });
</script>
@endsection
