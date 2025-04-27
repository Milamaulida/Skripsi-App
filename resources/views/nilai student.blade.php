@extends('layouts.sidebar')
@section('content')
<div class="flex-1 bg-gray-50">
<div class="flex justify-between items-center mb-8">
    <div class="relative w-80">
        <input type="text" placeholder="Search" class="border rounded p-2 pl-10 w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>
    </div>

    <div class="flex items-center space-x-4">
        <div class="text-right">
            <div class="font-bold">Mila Maulida</div>
            <div class="text-sm text-gray-500">1234567890</div>
        </div>
        <img src="{{ asset('images/profile.jpeg') }}" alt="Profile" class="w-12 h-12 rounded-full">
    </div>
</div>

<div class="container mx-auto p-4">
<html>
<head>
    <title>Nilai Siswa</title>

    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 40px auto;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #000;
            text-align: center;
            padding: 8px;
        }

        th[colspan] {
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<h1>Hasil Nilai Siswa</h1>
<h1>Madrasah Tsanawiyah Nur Rohmah</h1>

<br>
<h2>Nama Siswa : Mila Maulida</h2>
<h2>NISN : 20277077</h2>
<br>
<br>

<div class="flex justify-start px-4">
<a href=""
   class="bg-green-500 hover:bg-green-600 text-black font-semibold py-2 px-4 rounded shadow-md inline-flex items-center space-x-2">
   <img src="{{ asset('images/download.png') }}" alt="Download" class="w-5 h-5">
   <span>Download PDF</span>
</a>
</div>
<table border="1" style="width: 100%; text-align: center; border-collapse: collapse;">
  <thead>
    <tr>
      <th rowspan="2">Semester</th>
      <th colspan="4">Evaluasi Penilaian Harian</th>
      <th rowspan="2">PTS</th>
      <th rowspan="2">PAS</th>
      <th rowspan="2">Rerata</th>
    </tr>
    <tr>
      <th>PH1</th>
      <th>PH2</th>
      <th>PH3</th>
      <th>PH4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
    </tr>
    <tr>
      <td>2</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
      <td>85</td>
    </tr>
  </tbody>
</table>

</body>
</html>


</div>
        

@endsection
