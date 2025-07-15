@extends('layouts.student')
@section('content')
<div class="flex-1 bg-white min-h-screen">
    <div class="flex justify-end px-8 py-4 items-center">
        <div class="text-right">
            <div class="font-semibold text-gray-800 text-md">Mila Maulida</div>
            <div class="text-sm text-gray-500">1234567890</div>
        </div>
        <div class="ml-4">
            <img src="{{ asset('images/profile.jpeg') }}" class="w-10 h-10 rounded-full border-2 border-blue-400">
        </div>
    </div>

    <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded-lg mt-4">
        {{-- Navigasi Soal --}}
        <div class="flex space-x-4 justify-center mb-6">
            @for ($i = 1; $i <= $total; $i++) <a href="{{ route('exam.question', [$exam->id, $i]) }}">
                <div class="w-10 h-10 flex items-center justify-center rounded-full
                        {{ $i == $number ? 'bg-yellow-400 text-white' : 'bg-gray-200 text-gray-700' }} font-semibold">
                    {{ $i }}
                </div>
                </a>
                @endfor
        </div>

        {{-- Soal --}}
        <form method="POST" action="">
            @csrf
            <div class="text-gray-800 text-lg mb-4 leading-relaxed">
                {{ $question->question }}
            </div>

            {{-- Pilihan --}}
            <div class="space-y-4">
                @foreach ($question->answers as $index => $answer)
                @php
                $alphabet = chr(65 + $index); // A, B, C, ...
                @endphp
                <label class="flex items-center space-x-3 cursor-pointer">
                    <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->answer_id }}"
                        class="peer hidden">
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-gray-300 peer-checked:bg-blue-500 peer-checked:text-white text-gray-700 font-bold shadow">
                        {{ $alphabet }}
                    </div>
                    <span class="text-gray-800 text-md">{{ $answer->answer_text ?? '' }}</span>
                </label>
                @endforeach
            </div>

            {{-- Tombol Navigasi --}}
            <div class="flex justify-between mt-8">
                {{-- Tombol Prev --}}
                @if ($number > 1)
                <a href="{{ route('exam.question', [$exam->id, $number - 1]) }}">
                    <button type="button"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded font-semibold">
                        Prev
                    </button>
                </a>
                @else
                <div></div> {{-- Spacer jika tidak ada tombol prev --}}
                @endif

                {{-- Tombol Next / Selesai --}}
                @if ($number < $total) <a href="{{ route('exam.question', [$exam->id, $number + 1]) }}">
                    <button type="button"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded font-semibold">
                        Next
                    </button>
                    </a>
                    @elseif ($number == $total)
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded font-semibold">
                        Selesaikan Quiz
                    </button>
                    @endif
            </div>
        </form>
    </div>
</div>
@endsection
