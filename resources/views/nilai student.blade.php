@extends('layouts.sidebar')
@section('content')
<div class="search-container">
            <span>🔍</span>
            <input type="text" placeholder="Search">
            <a href="#">Search</a>
        </div>
        <div class="container mx-auto p-4">
        <br>
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
       class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow-md inline-flex items-center">
        📥 Download PDF
    </a>
</div>
<table>
    <thead>
        <tr>
            <th rowspan="2">Semester</th>
            <th colspan="2">Evaluasi Penilaian Harian</th>
            <th rowspan="2">PTS</th>
            <th rowspan="2">PAS</th>
            <th rowspan="2">Rerata</th>
        </tr>
        <tr>
            <th>Bab Ganjil</th>
            <th>Bab Genap</th>
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
        </tr>
        <tr>
            <td>2</td>
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
