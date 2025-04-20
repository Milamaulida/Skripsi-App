@extends('layouts.sidebar')

@section('content')
<div class="container mx-auto p-4">
    <a href="/bab semester 2 kelas 7" class="text-gray-600 flex items-center mb-4">
        &larr; Daftar Bab
    </a>
    <br>
    <center><div style="position: relative; color: black; font-size: 32px; font-family: Poppins; font-weight: 400; word-wrap: break-word">MATERI 1</div></center>
    <center><div style="position: relative; color: black; font-size: 32px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Pengembangan Artefak Komputasional</div></center>
    <div>
        <center><img src="{{asset('/images/pic1.png')}}" alt=""></center>
    </div>
    <br>

    <div style="width: 100%; position: relative; text-align: justify; color: black; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus magna, iaculis vitae lorem sed, efficitur mattis mi. Cras maximus ipsum dui, et auctor mauris vestibulum eu. Morbi ipsum ipsum, congue a aliquam sit amet, faucibus vel tortor. Maecenas non porta enim. Nullam bibendum sapien est, ferment accumsan tortor bibendumi vitae. Donec convallis mi nunc. Morbi sed ante eget nunc rutrum vehicula quis suscipit orci. Donec ex ipsum, laoreet vel lobortis vel, condimentum sed odioti. Sed blandit consequat libero, eget cursus quam ultricies eu. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore fugit magni harum eveniet odio perferendis itaque quam quaerat accusantium sequi. Est officia minus ad! Debitis ex perspiciatis rerum cumque commodi?</div>
    <br>
    <div class="mt-4 text-right">
    <a href="/materi 2 bab 8 kelas 7" 
       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
        Materi Selanjutnya →  
    </a>
</div>
</div>
@endsection
