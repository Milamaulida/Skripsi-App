<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center/cover;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        .input-group {
            margin: 15px 0;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-login {
            background: #ffcc00;
            color: black;
            border: none;
            padding: 10px;
            width: 106%;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-login:hover {
            background: #e6b800;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
        <h2>LOGIN</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="nis" placeholder="NIS" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn-login">LOGIN</button>
            <p>Belum punya akun?<a href="">Register</a></p>
        </form>
    </div>
</body>
</html>
