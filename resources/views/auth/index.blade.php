<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel 11</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.svg') }}" type="image/x-icon">

    <!-- Vendors styles-->
    <link href="{{ asset('assets/icons/coreui/css/free.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icons/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Main styles for this application-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />

</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">
                                <div class="p-4 my-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">
                                                <h1 class="font-weight-normal text-primary mb-3">
                                                    <i class="cil-3d"></i> Laravel
                                                </h1>
                                                <p>
                                                    Aplikasi ini dibuat menggunakan framework Laravel 11, untuk
                                                    dokumentasi lebih
                                                    lanjut klik tombol dibawah ini.
                                                </p>
                                                <a href="https://laravel.com/docs/11.x/releases"
                                                    class="btn btn-primary px-4">
                                                    Dokumentasi
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <div class="text-center">
                                        <img src="{{ asset('/favicon.svg') }}" style="width: 60px; height:60px;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <div>
                                        <h5 class="text-primary">Login App</h5>
                                        <p class="text-muted">Sign in to continue</p>
                                    </div>
                                    <div class="mt-4">
                                        @error('auth_failed')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Email atau password anda salah
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror

                                        <form action="{{ route('authenticate') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Masukkan Email" value="{{ old('email') }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="Masukkan Password" aria-label="Password"
                                                        aria-describedby="password-addon" value="{{ old('password') }}">
                                                    <button class="btn btn-secondary" type="button"
                                                        id="password-addon">
                                                        <i class="far fa-eye"></i>
                                                    </button>
                                                </div>
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="mt-3 d-grid">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Sign In
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">
                                        Powered By <b class="text-primary">Cegeh Ngoding</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
