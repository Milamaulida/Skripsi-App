@extends('layouts.student')

@section('content')
<div class="container mx-auto p-4">
    <a href="{{ url('/learning-materials-data/' . $class_id) }}" class="text-gray-600 flex items-center mb-4">&larr; Daftar Materi</a>

    <center><h2 class="text-2xl font-semibold">{{ $data->title }}</h2></center>
    <center><h3 class="text-xl text-gray-700">{{ $data->subtitle }}</h3></center>

    @php
        $video = $data->video_material;
    @endphp

    @if(Str::contains($video, 'youtube.com') || Str::contains($video, 'youtu.be'))
        {{-- Jika Link YouTube --}}
        @php
            $embed = str_replace("watch?v=", "embed/", $video);
            if (Str::contains($video, 'youtu.be')) {
                $videoId = substr($video, strrpos($video, '/') + 1);
                $embed = "https://www.youtube.com/embed/" . $videoId;
            }
        @endphp

        <div class="flex justify-center my-6">
            <iframe width="640" height="360" src="{{ $embed }}" frameborder="0" allowfullscreen></iframe>
        </div>
    @else
        {{-- Jika file video dari server --}}
        <div class="flex flex-col items-center my-6">
            <video width="640" height="360" controls class="mb-2">
                <source src="{{ asset('videos/' . $video) }}" type="video/mp4">
                Browser Anda tidak mendukung video ini.
            </video>
            <a href="{{ asset('videos/' . $video) }}" download class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Download Video
            </a>
        </div>
    @endif

    <div class="bg-white rounded-lg p-5 shadow-sm">
        <p class="text-justify text-gray-800 leading-relaxed whitespace-pre-line">
            {!! nl2br(e($data->description)) !!}
        </p>
    </div>

    <div class="mt-4 flex justify-between items-center">
        @if($prevId)
            <a href="{{ route('subject.showContent', ['class_id' => $class_id, 'id' => $prevId]) }}" class="text-blue-500 hover:underline">
                ← Materi Sebelumnya
            </a>
        @else
            <span class="text-gray-400">Ini adalah materi pertama.</span>
        @endif

        @if($nextId)
            <a href="{{ route('subject.showContent', ['class_id' => $class_id, 'id' => $nextId]) }}" class="text-blue-500 hover:underline">
                Materi Selanjutnya →
            </a>
        @else
            <span class="text-gray-400">Ini adalah materi terakhir.</span>
        @endif
    </div>
</div>
@endsection
