@extends('layouts.student')

@section('content')
<div class="container mx-auto p-4">
    <a href="/class-student" class="text-gray-600 flex items-center mb-4">&larr;
        Daftar Materi</a>

    <center>
        <h2 class="text-2xl font-semibold">{{ $materi->title }}</h2>
    </center>
    <center>
        <h3 class="text-xl text-gray-700">{{ $materi->subtitle }}</h3>
    </center>

    @php
    $video = $materi->video_material;
    @endphp

    @if(Str::contains($video, 'youtube.com') || Str::contains($video, 'youtu.be'))
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
    <div class="flex flex-col items-center my-6">
        <video width="640" height="360" controls class="mb-2">
            <source src="{{ asset('videos/' . $video) }}" type="video/mp4">
            Browser Anda tidak mendukung video ini.
        </video>
        <a href="{{ asset('videos/' . $video) }}" download
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Download Video
        </a>
    </div>
    @endif

    <div class="bg-white rounded-lg p-5 shadow-sm">
        <p class="text-justify text-gray-800 leading-relaxed whitespace-pre-line">
            {!! nl2br(e($materi->description)) !!}
        </p>
    </div>

</div>
@endsection
