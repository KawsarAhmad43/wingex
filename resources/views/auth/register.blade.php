<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/register.css') }}">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row w-100">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="illustration-banner">
                    <img src="{{ asset('assets/auth/images/login.png') }}" alt="Illustration" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
                <div class="register-form text-center p-4 shadow-lg">
                    <img src="{{ asset('assets/images/logo.PNG') }}" alt="Logo" class="mb-4">
                    <h2 class="mb-4">Register</h2>
                    <!-- Register form starts -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirm Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Register</button>

                        <div class="d-flex justify-content-center mt-3">
                            <span class="text-muted">Already registered?</span>
                            <a href="{{ route('login') }}" class="text-muted ms-2 actionBtn">Login</a>
                        </div>
                    </form>
                    <!-- Register form ends -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="register.js"></script>
</body>

</html>
