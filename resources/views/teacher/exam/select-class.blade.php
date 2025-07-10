@extends('layouts.teacher')
@section('content')
<div class="flex-1 bg-gray-50 px-8 py-6">

    <div class="flex justify-end mb-6">
        <div class="flex items-center space-x-4">
            <div class="text-right">
                <div class="font-semibold text-gray-800 text-md">Mila Maulida</div>
                <div class="text-sm text-gray-500">1234567890</div>
            </div>
            <div class="relative">
                <button id="profileButton" class="focus:outline-none">
                    <img src="{{ asset('images/profile.jpeg') }}" alt="Profile"
                        class="w-12 h-12 rounded-full border-2 border-blue-400">
                </button>
                <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lihat Profil</a>
                    <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan
                        Akun</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center mb-8">
        <div>
            <div class="text-3xl text-[#00A5FF] font-bold leading-tight font-poppins">
                Kelola Exam <br />
            </div>
        </div>
        <img src="{{ asset('images/pic2.png') }}" alt="Ilustrasi" class="w-40">
    </div>

    <div class="rounded-t-lg bg-[#00A5FF] py-3 text-center text-white text-xl font-semibold font-poppins">
        Kelas
    </div>

    <div class="grid grid-cols-3 gap-4">
        @foreach($classes as $class)
        <div class="p-6 bg-gray-200 rounded-lg text-center">
            <h4 class="font-bold">Kelas {{ $class->name }}</h4>
            <a href="{{ route('exam.by-class', $class->id) }}">
                <img style="max-width: 50px" src="https://www.svgrepo.com/show/79292/open-book.svg"
                    alt="Kelas {{ $class->name }}" class="mx-auto">
            </a>
        </div>
        @endforeach
    </div>



</div>
</div>
@endsection
