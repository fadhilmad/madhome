<div class="container-xxl position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="#" class="navbar-brand p-0">
            <h1 class="m-0">MadHome</h1>
            {{-- <img src="{{ asset('/landing/FitApp/img/madhome.png') }}" style="width: 150px; height: 150px; object-fit: contain;" alt="Logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="#home" class="nav-item nav-link active">Beranda</a>
                <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                <a href="#feature" class="nav-item nav-link">Layanan Kami</a>
                <a href="#pricing" class="nav-item nav-link">Price List</a>
                <a href="#review" class="nav-item nav-link">Testimonial</a>
                <a href="#contact" class="nav-item nav-link">Hubungi Kami</a>
            </div>
            <a href="#" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Pesan Sekarang</a>
        </div>
    </nav>

    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">Menjadi pemimpin global dalam menciptakan solusi teknologi yang inovatif dan berdampak positif bagi masyarakat.</h1>
                    <p class="text-white pb-3 animated slideInDown">Madhome adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital inovatif untuk membantu bisnis dan individu beradaptasi di era transformasi digital. Kami menyediakan layanan pengembangan perangkat lunak, aplikasi mobile, website, dan solusi IT lainnya yang dirancang untuk memenuhi kebutuhan spesifik Anda.</p>
                    <a href="#" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Tentang Kami</a>
                    <a href="#" class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Kontak Kami</a>
                </div>
                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <div class="owl-carousel screenshot-carousel">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-1.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-2.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-3.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-4.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>