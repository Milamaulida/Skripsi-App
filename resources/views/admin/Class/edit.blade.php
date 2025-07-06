@extends('layouts.admin')

@section('content')

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Edit Kelas</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('classes.update', $class->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kelas</label>
                <input type="text" name="name" id="name" class="form-control" required
                    value="{{ old('name', $class->name) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

@endsection
