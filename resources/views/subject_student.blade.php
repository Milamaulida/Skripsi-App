@extends('layouts.student')

@section('content')
<div class="container mx-auto p-4">
    <a href="/class-student" class="text-gray-600 flex items-center mb-4">
        &larr; Kembali
    </a>

    {{-- Tab navigation untuk Kelas 7, 8, 9 --}}
    <div class="mb-6">
        <ul class="flex border-b">
            @foreach([7, 8, 9] as $grade)
                <li class="-mb-px mr-4">
                    <a href="#grade-{{ $grade }}"
                       class="px-4 py-2 font-semibold {{ request('grade', 7) == $grade ? 'border-b-2 border-blue-500 text-blue-600' : 'text-gray-600' }}"
                       data-grade="{{ $grade }}">
                        Kelas {{ $grade }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Konten Materi per Kelas --}}
    @foreach([7, 8, 9] as $grade)
        <div id="grade-{{ $grade }}" class="{{ request('grade', 7) == $grade ? '' : 'hidden' }} mb-8">
            <div class="grid grid-cols-1 gap-4">
                @foreach($materials->where('grade', $grade) as $material)
                    <div class="bg-white shadow-lg rounded-lg p-4 flex items-center">
                        <img src="{{ asset('images/bab.png') }}" alt="" class="w-36 h-36 rounded-lg mr-4">
                        <div class="flex-1">
                            <div class="text-2xl text-blue-400 font-poppins font-medium">
                                Kelas {{ $grade }}
                            </div>
                            <div class="text-4xl text-yellow-400 font-poppins font-semibold">
                                {{ $material->title }}
                            </div>
                            <div class="text-base text-gray-700 font-poppins font-medium">
                                {{ $material->subtitle }}
                            </div>
                        </div>
                        <a href="{{ route('subject.show', ['grade' => $grade, 'id' => $material->id]) }}"
                           class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                            Pelajari
                        </a>
                    </div>
                @endforeach
                @if($materials->where('grade', $grade)->isEmpty())
                    <div class="text-center text-gray-500 py-4">
                        Belum ada materi untuk Kelas {{ $grade }}.
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>

@endsection

@push('scripts')
<script>
    document.querySelectorAll('[data-grade]').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const grade = link.dataset.grade;

            document.querySelectorAll('[id^="grade-"]').forEach(el => el.classList.add('hidden'));
            document.getElementById(`grade-${grade}`).classList.remove('hidden');

            history.replaceState(null, '', `?grade=${grade}`);

            document.querySelectorAll('[data-grade]').forEach(a => {
                a.classList.remove('border-b-2','border-blue-500','text-blue-600');
                a.classList.add('text-gray-600');
            });
            link.classList.add('border-b-2','border-blue-500','text-blue-600');
        });
    });
</script>
@endpush
