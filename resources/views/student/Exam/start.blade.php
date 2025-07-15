@extends('layouts.student')

@section('content')
<div class="flex-1 bg-white min-h-screen">
    <div class="flex justify-end px-8 py-4 items-center">
        <div class="text-right">
            <div class="font-semibold text-gray-800 text-md">{{ Auth::user()->name }}</div>
            <div class="text-sm text-gray-500">{{ Auth::user()->username ?? Auth::user()->email }}</div>
        </div>
        <div class="ml-4">
            <img src="{{ asset('images/profile.jpeg') }}" class="w-10 h-10 rounded-full border-2 border-blue-400">
        </div>
    </div>

    <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded-lg mt-4">

        {{-- Navigasi Soal --}}
        <div class="flex space-x-4 justify-center mb-6">
            @for ($i = 1; $i <= $exam->questions->count(); $i++)
                <a href="{{ route('exam.question', ['exam_id' => $exam->id, 'number' => $i]) }}">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full
                        {{ $i == $number ? 'bg-yellow-400 text-white' : 'bg-gray-200 text-gray-700' }} font-semibold">
                        {{ $i }}
                    </div>
                </a>
                @endfor
        </div>

        {{-- Soal --}}
        <form method="POST" action="{{ route('exam.answer', ['exam_id' => $exam->id, 'number' => $number]) }}">
            @csrf

            <input type="hidden" name="question_id" value="{{ $question->id }}">

            <div class="text-gray-800 text-lg mb-4 leading-relaxed">
                {{ $question->question }}
            </div>

            {{-- Pilihan --}}
            <div class="space-y-4">
                @foreach (['A', 'B', 'C', 'D'] as $option)
                @php
                $field = 'option_' . strtolower($option);
                @endphp
                <label class="flex items-center space-x-3 cursor-pointer">
                    <input type="radio" name="answer" value="{{ $option }}" class="w-5 h-5 text-blue-600" {{
                        (isset($selectedOption) && $selectedOption==$option) ? 'checked' : '' }} required>
                    <div class="text-gray-800 text-md">
                        <strong>{{ $option }}.</strong> {{ $question->$field }}
                    </div>
                </label>
                @endforeach
            </div>

            {{-- Tombol Navigasi --}}
            <div class="flex justify-between mt-8">
                {{-- Prev --}}
                @if ($number > 1)
                <a href="{{ route('exam.question', ['exam_id' => $exam->id, 'number' => $number - 1]) }}">
                    <button type="button"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded font-semibold">
                        Prev
                    </button>
                </a>
                @else
                <div></div>
                @endif

                {{-- Next / Selesai --}}
                @php
                $isLast = $number >= $exam->questions->count();
                @endphp
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded font-semibold">
                    {{ $isLast ? 'Selesai' : 'Next' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
