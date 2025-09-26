@php
    // safe: data_get works for array or object
    $company = \App\Helpers\Global_helper::companyDetails();
    $logoPath = data_get($company, 'logo');
    $faviconPath = data_get($company, 'favicon');
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8" />
<title>Loanswala</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" sizes="32x32"
      href="{{ $faviconPath ? asset('storage/'.$faviconPath) : asset('assets/img/default-favicon.png') }}">
<link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
<style>
    body.auth-page { background-size: cover; }
    .auth-card { border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); overflow: hidden; border: none; }
    .auth-header-box { background: #206333; color: #fff; text-align: center; padding: 2rem 1rem; }
    .auth-header-box img { max-height: 70px; margin-bottom: 15px; }
    .auth-header-box h4 { font-weight: 600; font-size: 1.5rem; }
    .form-control:focus { box-shadow: none; border-color: #206333; }
    .btn-primary { background-color: #206333; border-color: #206333; transition: all 0.3s; }
    .btn-primary:hover { background-color: #F2B929; border-color: #F2B929; color: #206333; }
    .back-login-link { display: block; text-align: center; margin-top: 15px; color: #206333; }
    .back-login-link:hover { text-decoration: underline; color: #F2B929; }
</style>
</head>
<body id="body" class="auth-page">
<div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-6 col-lg-5">
            <div class="card auth-card">
                <div class="auth-header-box">
                    <img src="{{ $logoPath ? asset('storage/'.$logoPath) : asset('assets/img/default-logo.png') }}" alt="logo" class="auth-logo">
                    <h4>Reset Password</h4>
                    <p class="text-light">Enter your new password below</p>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        {{-- token MUST be present --}}
                        <input type="hidden" name="token" value="{{ $token ?? '' }}">
                        {{-- Laravel reset requires email as well --}}
                        <input type="hidden" name="email" value="{{ old('email', $email ?? request('email')) }}">

                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="new-password" placeholder="Enter new password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <input id="password-confirm" type="password"
                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                   name="password_confirmation"
                                   required autocomplete="new-password" placeholder="Confirm new password">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid mb-3">
                            <button class="btn btn-primary btn-lg" type="submit">
                                Reset Password <i class="fas fa-sync-alt ms-2"></i>
                            </button>
                        </div>

                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="back-login-link">Back to Login</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
