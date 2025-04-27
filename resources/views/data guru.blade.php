@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Guru</h1>
    <div class="mb-3">
        <a href="/tambah data guru"><button class="btn btn-success">+ Tambah Data Guru</button></a>
    </div>
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>NUPTK</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">
                    
                    <img src="https://via.placeholder.com/50" alt="Foto Guru" width="50" height="50">
                </td>
                <td>Ahmad Fauzi</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data guru" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Guru" width="50" height="50">
                </td>
                <td>Siti Rahmawati</td>
                <td class="text-center">2345678901234567</td>
                <td class="text-center">15-02-1990</td>
                <td class="text-center">Jl. Merdeka No. 45, Bandung</td>
                <td class="text-center">
                    <a href="/edit data guru" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Guru" width="50" height="50">
                </td>
                <td>Andi Saputra</td>
                <td class="text-center">3456789012345678</td>
                <td class="text-center">20-03-1988</td>
                <td class="text-center">Jl. Pahlawan No. 78, Surabaya</td>
                <td class="text-center">
                    <a href="/edit data guru" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
