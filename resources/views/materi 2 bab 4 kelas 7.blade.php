@extends('layouts.sidebar')

@section('content')
<style>
    .navigasi-materi {
    display: flex;
    justify-content: space-between;
    margin-top: 2rem;
    padding: 0 20px;
}

.btn-materi {
    background-color: #2563eb; /* biru */
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: background-color 0.3s ease;
}

.btn-materi:hover {
    background-color: #1d4ed8;
}
</style>
<div class="container mx-auto p-4">
    <a href="/bab semester 1 kelas 7" class="text-gray-600 flex items-center mb-4">
        &larr; Daftar Bab
    </a>
    <br>
    <center><div style="position: relative; color: black; font-size: 32px; font-family: Poppins; font-weight: 400; word-wrap: break-word">MATERI 2</div></center>
    <center><div style="position: relative; color: black; font-size: 32px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Koneksi Internet</div></center>
    <div>
        <center><img src="{{asset('/images/pic2.png')}}" alt=""></center>
    </div>
    <br>
    
    <div style="width: 100%; position: relative; text-align: justify; color: black; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus magna, iaculis vitae lorem sed, efficitur mattis mi. Cras maximus ipsum dui, et auctor mauris vestibulum eu. Morbi ipsum ipsum, congue a aliquam sit amet, faucibus vel tortor. Maecenas non porta enim. Nullam bibendum sapien est, ferment accumsan tortor bibendumi vitae. Donec convallis mi nunc. Morbi sed ante eget nunc rutrum vehicula quis suscipit orci. Donec ex ipsum, laoreet vel lobortis vel, condimentum sed odioti. Sed blandit consequat libero, eget cursus quam ultricies eu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque natus, esse quam hic dolorem iusto id quo quod sequi aut facilis sapiente possimus eos alias maxime dolores. Ipsa, cumque.</div>
    <br>
    <br>
    <br>
    
    <div class="navigasi-materi">
    <a href="/materi 1 bab 4 kelas 7" class="btn-materi">
        ← Materi Sebelumnya
    </a>
    <a href="/materi 3 bab 4 kelas 7" class="btn-materi">
        Materi Selanjutnya →
    </a>
    </div>
    

</div>
@endsection
