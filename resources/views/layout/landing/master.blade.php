<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themewagon.github.io/FitApp/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2025 07:02:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>@yield('title') Beranda | MadHome</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.html" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&amp;family=Jost:wght@500;600;700&amp;display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('/landing/FitApp/icon/fontawesome/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/landing/FitApp/css/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/landing/FitApp/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/landing/FitApp/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/landing/FitApp/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/landing/FitApp/css/style.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        @include('layout.landing.header')
        <!-- Navbar & Hero End -->

        @yield('content')

        <!-- Footer Start -->
        @include('layout.landing.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('/landing/FitApp/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('/landing/FitApp/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/landing/FitApp/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/landing/FitApp/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/landing/FitApp/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/landing/FitApp/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/landing/FitApp/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/landing/FitApp/js/main.js') }}"></script>

    @yield('js')
</body>


<!-- Mirrored from themewagon.github.io/FitApp/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2025 07:02:29 GMT -->
</html>