@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <a href="/bab semester 2 kelas 9 guru" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>

    <div class="max-w-4xl mx-auto bg-white p-6 shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold mb-6">Tambah Materi</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="judul">Judul</label>
            <input type="text" name="judul" class="w-full border p-2 mb-4">

            <label for="konten">Konten</label>
            <textarea name="konten" id="editor" rows="10" class="w-full"></textarea>

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
</div>
@endsection
