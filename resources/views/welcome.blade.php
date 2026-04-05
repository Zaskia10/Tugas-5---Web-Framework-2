<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .subtitle {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
        .actions {
            display: flex;
            gap: 15px;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff;
        }
    </style>
</head>
<body>
@auth
    <h1 class="title">Selamat datang, {{ auth()->user()->name }}</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>            </form>
    @else
        <h1 class="title">Selamat datang!</h1>
        <p class="subtitle">Silakan login atau daftar terlebih dahulu untuk melanjutkan ke aplikasi.</p>
        <div class="actions">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                @endif
        </div>
            <p class="note">Gunakan email dan password yang sudah terdaftar untuk masuk. Jika belum punya akun, daftar terlebih dahulu.</p>
        @endauth
</body>
</html>
