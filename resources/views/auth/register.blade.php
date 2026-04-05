<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f7fb; }
        .auth-card { max-width: 420px; margin: 80px auto; }
        .auth-title { font-weight: 700; font-size: 2rem; }
        .auth-link { color: #0d6efd; text-decoration: none; }
        .auth-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container auth-card">
        <div class="card shadow-sm rounded-4">
            <div class="card-body p-5">
                <h1 class="auth-title text-center mb-4">Register</h1>

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

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100 py-2">Register</button>
                </form>

                <div class="mt-4 text-center">
                    <span>Sudah punya akun? </span>
                    <a href="{{ route('login') }}" class="auth-link">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>