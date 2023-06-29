<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DevFolio Bootstrap Portfolio Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('/img/favicon.png') }}" rel="icon">
    <link href="{{ url('/img/favicon.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/template/DevFolio/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/template/DevFolio/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('/template/DevFolio/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('/template/DevFolio/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/template/DevFolio/assets/css/style.css') }}" rel="stylesheet">

    {{-- font sofia --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    @yield('css')

    <!-- =======================================================
  * Template Name: DevFolio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}

    @include('layouts.frontend.header')

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url({{ url('/img/banner_2.jpeg') }})">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4" style="font-family: 'Sofia', cursive;">We Shall Never Deny A Guest Even
                        The
                        Most
                        Ridiculous Request</h1>
                    <p class="hero-subtitle"><span class="typed"
                            data-typed-items="Designer, Developer, Freelancer "></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    @yield('content')
    @yield('modal')

    @include('layouts.frontend.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('/template/DevFolio/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('/template/DevFolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/template/DevFolio/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('/template/DevFolio/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('/template/DevFolio/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ url('/template/DevFolio/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('/template/DevFolio/assets/js/main.js') }}"></script>
    @yield('js')

</body>

</html>
