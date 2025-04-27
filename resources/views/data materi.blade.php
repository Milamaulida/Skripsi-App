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
                <th>Judul</th>
                <th>Video Materi</th>
                <th>Isi Materi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">1</td>
                <td>Pengenalan HTML</td>
                <td class="text-center">
                    <video width="150" controls>
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </td>
                <td>Belajar dasar-dasar struktur HTML dan cara membuat halaman web pertama Anda.</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="/edit materi" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-center">2</td>
                <td>Pengenalan CSS</td>
                <td class="text-center">
                    <video width="150" controls>
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </td>
                <td>Belajar bagaimana mempercantik tampilan website menggunakan CSS.</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="/edit materi" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td class="text-center">3</td>
                <td>Dasar-Dasar JavaScript</td>
                <td class="text-center">
                    <video width="150" controls>
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </td>
                <td>Memahami konsep dasar pemrograman menggunakan JavaScript.</td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="/edit materi" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
