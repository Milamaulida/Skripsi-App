@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="h3 mb-4 text-center">Data Siswa</h1>
    <div class="mb-3">
        <a href="/tambah data siswa"><button class="btn btn-success">+ Tambah Data Siswa</button></a>
    </div>
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Tanggal Lahir</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">
                    
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Ahmad Fauzi</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Siti Rahmawati</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Andi Saputra</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Meti Meilaa</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Linda</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>April Rizki</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">7</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Rahmalia Ahmadi</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">8</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Siti Anzhanny Mawra</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">9</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Aula</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="text-center">10</td>
                <td class="text-center">
                  
                    <img src="https://via.placeholder.com/50" alt="Foto Siswa" width="50" height="50">
                </td>
                <td>Andi Saputra</td>
                <td class="text-center">1234567890123456</td>
                <td class="text-center">01-01-1985</td>
                <td class="text-center">081316434732</td>
                <td class="text-center">Jl. Raya No. 123, Jakarta</td>
                <td class="text-center">
                    <a href="/edit data siswa" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
