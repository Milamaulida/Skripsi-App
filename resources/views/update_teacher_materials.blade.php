<!DOCTYPE html>
<html>
<head>
    <title>Form CKEditor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
</head>
<body>

    <h2>Buat Postingan</h2>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="content">Isi Konten:</label>
        <textarea name="content" id="editor" rows="10" cols="80"></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>
</html>
