@extends('layouts.student')
@section('content')
<div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="Search">
            <a href="#">Search</a>
        </div>
        <div class="container mx-auto p-4">
        <br>
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-md mt-10">

    <a href="/soal 3 ph1 kelas 7"><div class="flex gap-3 mb-4">
        @for ($i = 1; $i <= 6; $i++)
            <div class="w-8 h-8 flex items-center justify-center rounded-full text-sm font-semibold
                {{ $i == 3 ? 'bg-yellow-400 text-white' : 'bg-gray-200 text-gray-600' }}">
                {{ $i }}
            </div>
        @endfor
    </div></a>

    <hr class="mb-4">


    <p class="text-gray-800 mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus magna, iaculis vitae lorem sed, efficitur mattis mi.....
    </p>

    <div class="space-y-2">
        @php
            $options = [
                'A' => 'Lorem ipsum dolor sit amet.',
                'B' => 'Integer lacus magna.',
                'C' => 'Iaculis vitae lorem sed.',
                'D' => 'Effictur mattis mi.'
            ];
            $selected = 'D';
        @endphp

        @foreach ($options as $key => $value)
            <div class="flex items-start gap-2">
                <div class="w-6 h-6 rounded-full flex items-center justify-center text-sm font-bold
                    {{ $selected === $key ? 'bg-yellow-400 text-white' : 'bg-gray-200 text-gray-600' }}">
                    {{ $key }}
                </div>
                <p class="text-sm text-gray-700">{{ $value }}</p>
            </div>
        @endforeach
    </div>

    <div class="flex justify-end gap-2 mt-6">
    <a href="/soal 2 ph2 kelas 7"><button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md">
            PREV
        </button></a>     
    
        <a href="/soal 4 ph2 kelas 7"><button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md">
            NEXT
        </button></a>
    </div>
</div>

</div>
        

@endsection
