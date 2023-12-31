{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-card {
            background-color: #fff;
            border: 1px solid #e9e9e9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            padding: 20px;
        }
        .register-card-header {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .register-card-body {
            padding: 0;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-group input {
            padding: 10px 45px 10px 15px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .bi {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            font-size: 20px;
        }
        .form-group input:focus {
            border-color: #007bff;
        }
        .register-button {
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 18px;
            width: 100%;
        }
        .register-button:hover {
            background-color: #1e7e34;
        }
        .login-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 18px;
            width: 100%;
        }
        .login-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container register-container">
        <div class="card register-card">
            <div class="card-header register-card-header">Register</div>
            <div class="card-body register-card-body">

                <form method="POST" action="{{ route('register') }}">
                    @include('superadmin.partials.alerts')
                    @csrf
                    <div class="form-group">
                        <i class="bi bi-person"></i>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <i class="bi bi-envelope"></i>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <i class="bi bi-lock"></i>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <i class="bi bi-lock"></i>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <button type="submit" class="btn register-button">Register</button>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn login-button" onclick="window.location.href='{{ route('login') }}'">Login</button>
            </div>
        </div>
    </div>
</body>
</html> --}}
