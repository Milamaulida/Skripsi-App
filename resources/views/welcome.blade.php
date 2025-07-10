<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Learning</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        .background {
            position: relative;
            width: 100%;
            height: 100%;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            width: 400px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 30%;
            left: 35%;
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: bold;
            color: #333;
        }

        .login-as {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .buttons {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .guru {
            background-color: #FFD700;
        }

        .siswa {
            background-color: #00BFFF;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .no-account {
            font-size: 12px;
            color: grey;
            margin-bottom: 10px;
        }

        .daftar {
            background-color: #007BFF;
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body class="antialiased">

    <div class="background">
        <img src="https://img.freepik.com/free-photo/empty-card-coffee-top-view_23-2148475413.jpg" height="620px"
            width="1350px" alt="">
    </div>
    <div class="login-card">
        <img src="{{ asset('images/logo.png') }}" alt="Foto" height="140px" width="140px" alt="">
        <div style="color: #3C3C3C; font-size: 30px; font-family: Poppins; font-weight: 500; word-wrap: break-word">
            TECHNOOR</div>
        @auth
        @php
        $roleRedirect = match(auth()->user()->role_id) {
        1 => route('admin.dashboard'),
        2 => route('siswa.dashboard'),
        3 => route('guru.dashboard'),
        default => '#',
        };
        @endphp
        <div class="buttons">
            <a href="{{ $roleRedirect }}" class="btn siswa">Masuk ke Dashboard</a>
        </div>
        @else
        <div class="buttons">
            <a href="{{ route('login') }}" class="btn siswa">Login</a>
        </div>@endauth
    </div>
    </div>

    </div>
    </div>
</body>

</html>
