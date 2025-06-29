@extends('layouts.teacher')
@section('content')
<div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="Search">
            <a href="#">Search</a>
        </div>
        <div class="container mx-auto p-4">
        <a href="/value-teacher" class="text-gray-600 flex items-center mb-4">
        &larr; kembali
    </a>
        <br>
        <div class="flex justify-between items-center mb-4">
        <div class="space-x-2">
            <a href="/update-value"><button class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded">
                + Edit Nilai
            </button></a>
            <button class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded">
                Hapus data terpilih
            </button>
        </div>

        <div class="flex space-x-2">
            <select class="border px-3 py-2 rounded shadow text-sm">
                <option>Semua</option>
            
            </select>
            <input type="text" placeholder="Cari" class="border px-3 py-2 rounded shadow text-sm">
        </div>
    </div>

   
    <div class="overflow-auto bg-white border rounded-lg shadow">
        <table class="w-full text-sm text-left border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2 text-center"><input type="checkbox"></th>
                    <th class="border p-2 text-center">No</th>
                    <th class="border p-2 text-center">NISN/NIS</th>
                    <th class="border p-2">Nama Siswa</th>
                    <th colspan="4" class="border p-2 text-center">Penilaian Harian</th>
                    <th colspan="2" class="border p-2 text-center">UTS</th>
                    <th colspan="2" class="border p-2 text-center">UAS</th>
                    <th class="border p-2 text-center">Rerata</th>
                </tr>
                <tr class="bg-gray-50">
                    <th colspan="4"></th>
                    <th class="border p-1 text-center">1</th>
                    <th class="border p-1 text-center">2</th>
                    <th class="border p-1 text-center">3</th>
                    <th class="border p-1 text-center">4</th>
                    <th class="border p-1 text-center">1</th>
                    <th class="border p-1 text-center">2</th>
                    <th class="border p-1 text-center">1</th>
                    <th class="border p-1 text-center">2</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $siswa = [
                        'Mila Maulida',
                        'Fulan bin Fulan',
                        'Asep Bedag',
                        'Tia Az-Zahra',
                        'Tia Az-Zahra',
                        'Anggielogy',
                        'Samual Konglomerat',
                        'Muhammad Lukman',
                        'Fulan bin Fulan',
                        'Meti Meilawati'
                    ];
                @endphp
                @foreach ($siswa as $i => $nama)
                    <tr class="hover:bg-gray-50">
                        <td class="border p-2 text-center"><input type="checkbox"></td>
                        <td class="border p-2 text-center">{{ $i + 1 }}</td>
                        <td class="border p-2 text-center">12345678910</td>
                        <td class="border p-2">{{ $nama }}</td>
                        @for($j = 0; $j < 8; $j++)
                            <td class="border p-2 text-center"></td>
                        @endfor
                        <td class="border p-2 text-center"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

  
    <div class="flex justify-between items-center mt-4 text-sm text-gray-600">
        <div>
            Tampilkan 
            <select class="border px-2 py-1 rounded">
                <option>10</option>
                <option>25</option>
                <option>50</option>
            </select> 
            Dari 25 total data
        </div>

        <div>
            01 Januari 2024 12:30:12
        </div>

        <div class="space-x-1">
            <button class="px-2 py-1 border rounded bg-white hover:bg-gray-100">Awal</button>
            <button class="px-2 py-1 border rounded bg-blue-500 text-white">1</button>
            <button class="px-2 py-1 border rounded bg-white hover:bg-gray-100">2</button>
            <button class="px-2 py-1 border rounded bg-white hover:bg-gray-100">3</button>
            <button class="px-2 py-1 border rounded bg-white hover:bg-gray-100">Akhir</button>
        </div>
    </div>
</div>

</div>
        
@endsection

