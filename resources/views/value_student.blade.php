@extends('layouts.student')
@section('content')
<div class="flex-1 bg-gray-50 min-h-screen p-6">

    <!-- Kop Rapor dan Tabel dalam Satu Container -->
    <div class="bg-white rounded-lg shadow-md p-8">

        <!-- Kop Rapor -->
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-16 mr-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Madrasah Tsanawiyah Nur Rohmah</h1>
                    <p class="text-sm text-gray-600">Alamat: Jl. Mengger Girang 1 No.39 Kec.Regol Kel.Pasirluyu Kota Bandung</p>
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-xl font-bold">Laporan Hasil Belajar</h2>
                <p class="text-md text-gray-600">Tahun Ajaran 2025/2026</p>
            </div>
        </div>

    
        <!-- Informasi Nilai -->
        <div class="mb-6">
            <div class="flex">
                <div class="w-1/3 text-md font-semibold text-gray-700">Nama Siswa</div>
                <div class="w-2/3 text-md font-normal text-gray-700">: Mila Maulida</div>
            </div>
            <div class="flex mt-2">
                <div class="w-1/3 text-md font-semibold text-gray-700">NISN</div>
                <div class="w-2/3 text-md font-normal text-gray-700">: 20277077</div>
            </div>
        </div>

        <!-- Tombol Download PDF -->
        <div class="flex justify-start mb-6">
            <a href="#"
               class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow inline-flex items-center">
               <img src="{{ asset('images/download.png') }}" alt="Download" class="w-5 h-5 mr-2">
               Download PDF
            </a>
        </div>

        <!-- Tabel Nilai -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 text-sm text-center">
                <thead class="bg-gray-200 text-gray-700 font-semibold">
                    <tr>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 align-middle">Semester</th>
                        <th colspan="4" class="border border-gray-300 px-4 py-2">Evaluasi Penilaian Harian</th>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 align-middle">PTS</th>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 align-middle">PAS</th>
                        <th rowspan="2" class="border border-gray-300 px-4 py-2 align-middle">Rerata</th>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">PH1</th>
                        <th class="border border-gray-300 px-4 py-2">PH2</th>
                        <th class="border border-gray-300 px-4 py-2">PH3</th>
                        <th class="border border-gray-300 px-4 py-2">PH4</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 2; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">{{ $i }}</td>
                        <td class="border border-gray-300 px-4 py-2">85</td>
                        <td class="border border-gray-300 px-4 py-2">85</td>
                        <td class="border border-gray-300 px-4 py-2">85</td>
                        <td class="border border-gray-300 px-4 py-2">85</td>
                        <td class="border border-gray-300 px-4 py-2">85</td>
                        <td class="border border-gray-300 px-4 py-2">85</td>
                        <td class="border border-gray-300 px-4 py-2 font-bold bg-green-100">85</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection
