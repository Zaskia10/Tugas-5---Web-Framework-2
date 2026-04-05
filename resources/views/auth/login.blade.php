<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .auth-card { max-width: 420px; margin: 80px auto; }
        .auth-title { font-weight: 700; font-size: 2rem; }
        .auth-link { color: #0d6efd; text-decoration: none; }
        .auth-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container auth-card">
        <div class="card">
            <div class="card-body p-5">
                <h1 class="auth-title text-center mb-4">Login</h1>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-45 py-2">Login</button>
                    <span>Belum punya akun? </span>
                    <a href="{{ route('register') }}" class="auth-link">Register</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>