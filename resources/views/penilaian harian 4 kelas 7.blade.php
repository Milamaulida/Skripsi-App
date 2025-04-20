@extends('layouts.sidebar')
@section('content')
<div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="Search">
            <a href="#">Search</a>
        </div>
        <div class="container mx-auto p-4">
        <br>
        
        <a href="/evaluasi student" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
        </a>
        <div class="bg-white rounded-xl shadow-md p-4 w-full max-w-sm mx-auto text-center">

<div class="w-60 h-60 mx-auto border-4 border-blue-400 rounded-md overflow-hidden mb-4">
    <img src="{{ asset('images/Pic3.png') }}" alt="Evaluasi" class="object-cover w-full h-full">
</div>


<h1 class="text-sm font-semibold text-gray-700 border-t pt-2 border-b pb-2">Penilaian Harian 4</h1>


<a href="/soal 1 ph2 kelas 7" class="inline-block mt-4 bg-yellow-400 hover:bg-yellow-500 text-white text-sm px-4 py-1.5 rounded-full shadow">
    Mulai Ujian
</a>
</div>


</div>
        

@endsection
