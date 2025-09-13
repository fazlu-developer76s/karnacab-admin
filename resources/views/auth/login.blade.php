@php
    $company = \App\Helpers\Global_helper::companyDetails();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8" />
<title>Karnacab</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/'.$company->favicon) }}">
<link href="assets/css/fontawesome.css" rel="stylesheet" />
<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/default/app.min.css" rel="stylesheet" />
<style>
    body.auth-page {
        /* background: #f5f8fa url('assets/img/login.png') no-repeat center center; */
        background-size: cover;
    }

    .auth-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .auth-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }

    .auth-header-box {
        background: linear-gradient(135deg, #206333, #F2B929);
        color: #fff;
        text-align: center;
        padding: 30px 20px;
    }

    .auth-header-box img {
        height: 70px;
        margin-bottom: 15px;
    }

    .form-floating > input:focus ~ label,
    .form-floating > input:not(:placeholder-shown) ~ label {
        color: #206333;
    }

    .btn-login {
        background: #206333;
        border: none;
        font-weight: 600;
        padding: 12px 20px;
        transition: background 0.3s ease;
    }
    .btn-login:hover {
        background: #F2B929;
        color: #000;
    }

    .form-link {
        font-size: 0.9rem;
        text-decoration: none;
    }
    .form-link:hover {
        text-decoration: underline;
    }

    .card-body p.text-center {
        font-size: 0.9rem;
    }
</style>
</head>
<body class="auth-page">
<div class="container-md">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card auth-card">
                <div class="auth-header-box">
                    <a class="logo">
                        <img src="{{ asset('storage/'.$company->logo) }}" alt="logo">
                    </a>
                    <h4 class="mt-3 mb-1 fw-bold">Welcome Back!</h4>
                    <p class="text-light">Login to your account</p>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Username" value="{{ old('email') }}" required autofocus>
                            <label for="email">Username</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="form-link" href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-login">Login <i class="fas fa-sign-in-alt ms-1"></i></button>
                        </div>

                        @if (Route::has('signup'))
                            <p class="text-center mt-3">
                                Don't have an account? <a href="{{ route('signup') }}">Register with us</a>
                            </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
