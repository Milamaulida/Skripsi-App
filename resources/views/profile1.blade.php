@extends('layouts.student')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-xl px-8 pt-10 pb-8 mt-10 text-gray-800 font-poppins">

    <div class="flex flex-col items-center mb-8">
        <!-- Foto Profil -->
        <div class="relative">
            @if($user)
                <img src="" alt="Foto Profil" class="w-32 h-32 rounded-full border-4 border-blue-500 object-cover shadow-md">
            @else
                <img src="" alt="Default Foto" class="w-32 h-32 rounded-full border-4 border-gray-300 object-cover shadow-md">
            @endif
        </div>
        <h2 class="text-2xl font-semibold mt-4"></h2>
        <p class="text-sm text-gray-500"></p>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-6 w-full text-center">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-4">
            <div>
                <label class="block mb-1 font-medium">Nama</label>
                <input type="text" name="name" value="" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" value="" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-medium">Nomor HP</label>
                <input type="text" name="phone" value="" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-medium">NIS</label>
                <input type="text" name="nis" value="" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-medium">Tanggal Lahir</label>
                <input type="date" name="birth_date" value="" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-medium">Alamat</label>
                <input type="text" name="address" value="" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label class="block mb-1 font-medium">Ganti Foto Profil</label>
                <input type="file" name="photo" class="w-full border px-4 py-2 rounded-lg">
            </div>
        </div>
        <div class="mt-6 text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
