@extends('layouts.teacher')

@section('content')
<div class="flex-1 bg-gray-50 px-8 py-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-blue-600">Nilai Siswa - {{ strtoupper($exam->type) }} | Kelas {{
            $exam->nrclass->name }}</h1>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold">No</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Nama Siswa</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Skor</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Mulai</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Selesai</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                @forelse ($results as $i => $result)
                <tr>
                    <td class="px-6 py-4">{{ $i + 1 }}</td>
                    <td class="px-6 py-4">{{ $result->user->name }}</td>
                    <td class="px-6 py-4">{{ round($result->score, 2) }}</td>

                    <td class="px-6 py-4">
                        {{ $result->finished_at ? \Carbon\Carbon::parse($result->started_at)->format('d M Y H:i') : '-'
                        }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $result->finished_at ? \Carbon\Carbon::parse($result->finished_at)->format('d M Y H:i') : '-'
                        }}
                    </td>
                    <td class="px-6 py-4">
                        @if ($result->is_done)
                        <span class="text-green-600 font-semibold">Selesai</span>
                        @else
                        <span class="text-yellow-600 font-semibold">Belum Selesai</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center px-6 py-4 text-gray-500">Belum ada siswa yang mengerjakan ujian
                        ini.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
