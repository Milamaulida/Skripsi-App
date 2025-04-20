@extends('layouts.sidebar')
@section('content')
<div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="Search">
            <a href="#">Search</a>
        </div>
        <div class="container mx-auto p-4">
        <br>
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-md mt-10">

    <a href="/soal 6 ph1 kelas 7"><div class="flex gap-3 mb-4">
        @for ($i = 1; $i <= 6; $i++)
            <div class="w-8 h-8 flex items-center justify-center rounded-full text-sm font-semibold
                {{ $i == 6 ? 'bg-yellow-400 text-white' : 'bg-gray-200 text-gray-600' }}">
                {{ $i }}
            </div>
        @endfor
    </div></a>

<p class="text-gray-800 mb-4">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus magna, iaculis vitae lorem sed, efficitur mattis mi?
</p>

<textarea
    class="w-full h-32 p-3 bg-gray-100 border border-gray-200 rounded-lg text-sm text-gray-800 resize-none focus:outline-none focus:ring-2 focus:ring-blue-400"
    placeholder="Jawaban"
></textarea>


    <div class="flex justify-end gap-3 mt-6">
        <a href="/soal 5 ph1 kelas 7"><button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md">
            PREV
        </button></a> 
        <a href="/penilaian harian 1 kelas 7"><button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md">
            SELESAIKAN QUIZ
        </button></a>
        
    </div>
</div>
</div>
</div>
        

@endsection
