@extends('layout.landing.master')

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Tentang Kami</h5>
                    <h1 class="mb-4">Tentang Madhome</h1>
                    <p class="mb-4">Madhome adalah team teknologi yang berfokus pada pengembangan solusi digital inovatif
                        untuk membantu bisnis dan individu beradaptasi di era transformasi digital. Kami menyediakan layanan
                        pengembangan perangkat lunak, aplikasi mobile, website, dan solusi IT lainnya yang dirancang untuk
                        memenuhi kebutuhan spesifik Anda.
                        Didukung oleh tim developer berpengalaman dan teknologi terkini, kami berkomitmen untuk menghadirkan
                        produk yang tidak hanya fungsional tetapi juga andal, aman, dan efisien.</p>

                    <h1 class="mb-4">Visi Kami</h1>
                    <p class="mb-4">Menjadi pemimpin global dalam menciptakan solusi teknologi yang menginspirasi,
                        memberdayakan, dan memberikan nilai tambah bagi kehidupan masyarakat.</p>

                    <h1 class="mb-4">Misi Kami</h1>
                    <p class="mb-4">Kami berkomitmen untuk menyediakan layanan IT yang sesuai dengan kebutuhan pelanggan,
                        mendorong inovasi guna mempercepat pertumbuhan dan efisiensi bisnis, serta memastikan setiap solusi
                        yang kami kembangkan memiliki kualitas tinggi dan keamanan yang terjamin.</p>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <i class="fa fa-cogs fa-2x text-primary-gradient flex-shrink-0 mt-1"></i>
                                <div class="ms-3">
                                    <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                    <p class="text-primary-gradient mb-0">Active Install</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <i class="fa fa-comments fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                                <div class="ms-3">
                                    <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                    <p class="text-secondary-gradient mb-0">Clients Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#feature" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Alur
                        Perancangan</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s"
                        src="{{ asset('/landing/FitApp/img/about.png') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5" id="feature">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Layanan</h5>
                <h1 class="mb-5">Layanan Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item bg-light rounded p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-eye text-white fs-4"></i>
                        </div>
                        <h5 class="mb-3">Pengembangan Aplikasi Mobile</h5>
                        <p class="m-0">Membantu Anda menciptakan aplikasi mobile berbasis Android dan iOS yang modern dan
                            user-friendly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item bg-light rounded p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-layer-group text-white fs-4"></i>
                        </div>
                        <h5 class="mb-3">Pengembangan Website</h5>
                        <p class="m-0">Kami merancang website yang interaktif, responsif, dan sesuai dengan identitas
                            brand Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item bg-light rounded p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-edit text-white fs-4"></i>
                        </div>
                        <h5 class="mb-3">Sistem Manajemen Bisnis</h5>
                        <p class="m-0">Solusi berbasis IT untuk membantu mengelola operasi bisnis Anda, seperti ERP, CRM,
                            dan sistem khusus lainnya.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item bg-light rounded p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-shield-alt text-white fs-4"></i>
                        </div>
                        <h5 class="mb-3">Pengembangan Software Kustom</h5>
                        <p class="m-0">Kami menyediakan solusi perangkat lunak yang dirancang khusus untuk kebutuhan unik
                            bisnis Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item bg-light rounded p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cloud text-white fs-4"></i>
                        </div>
                        <h5 class="mb-3">Layanan Cloud dan Infrastruktur IT</h5>
                        <p class="m-0">Dukungan infrastruktur berbasis cloud untuk meningkatkan skalabilitas dan keamanan
                            data Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item bg-light rounded p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-mobile-alt text-white fs-4"></i>
                        </div>
                        <h5 class="mb-3">IT Consulting</h5>
                        <p class="m-0">Memberikan saran strategis untuk membantu Anda memanfaatkan teknologi sebagai alat
                            pertumbuhan bisnis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Screenshot Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Mengapa Memilih Madhome?</h5>
                    <h1 class="mb-4">Antarmuka yang ramah untuk pengguna membuat aplikasi yang sangat mudah digunakan.
                    </h1>
                    <p class="mb-4">Aplikasi ini menawarkan antarmuka yang ramah pengguna, dirancang untuk memberikan
                        pengalaman yang sederhana dan intuitif. Dengan navigasi yang mudah dipahami, pengguna dapat dengan
                        cepat mengakses berbagai fitur tanpa memerlukan panduan tambahan. Kemudahan ini membuat aplikasi
                        menjadi pilihan tepat bagi semua kalangan, baik pemula maupun pengguna berpengalaman, untuk
                        mendukung aktivitas mereka secara efisien dan menyenangkan.</p>
                    <p><i class="fa fa-check text-primary-gradient me-3"></i>Profesionalisme: Tim kami terdiri dari
                        developer dan ahli IT yang berpengalaman.</p>
                    <p><i class="fa fa-check text-primary-gradient me-3"></i>Inovasi Teknologi: Selalu menggunakan
                        teknologi terbaru untuk memberikan solusi terbaik.</p>
                    <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Skalabilitas dan Keamanan:
                        Fokus pada solusi yang mudah dikembangkan dan terjamin keamanannya.</p>
                    <p><i class="fa fa-check text-primary-gradient me-3"></i>Pendekatan Kustom: Kami memahami bahwa setiap
                        klien memiliki kebutuhan yang unik.</p>
                    <a href="#pricing" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Price
                        List</a>
                </div>
                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp"
                    data-wow-delay="0.3s">
                    <div class="owl-carousel screenshot-carousel">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-2.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-2.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-2.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-2.png') }}" alt="">
                        <img class="img-fluid" src="{{ asset('/landing/FitApp/img/screenshot-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Screenshot End -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Alur Development</h5>
                <h1 class="mb-5">Alur Pembuatan Aplikasi</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-cog fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Perencanaan dan Analisis Kebutuhan</h5>
                        <p class="mb-0">Perencanaan dan analisis kebutuhan mencakup penentuan tujuan aplikasi, riset
                            pasar, dokumentasi fitur dan spesifikasi, serta penentuan anggaran dan waktu pengembangan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-address-card fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Desain Aplikasi</h5>
                        <p class="mb-0">Desain aplikasi mencakup pembuatan wireframe untuk alur navigasi, pengembangan
                            desain UI/UX yang menarik, dan pembuatan prototipe untuk uji coba awal.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-check fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Pengembangan Aplikasi</h5>
                        <p class="mb-0">Pengembangan aplikasi meliputi pemilihan teknologi, pengembangan frontend dan
                            backend, serta integrasi antara keduanya untuk memastikan aplikasi berfungsi dengan baik.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-check fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Pengujian (Testing)</h5>
                        <p class="mb-0">Pengujian mencakup QA untuk memastikan fungsi aplikasi, uji kenyamanan pengguna,
                            perbaikan bug, dan stress testing untuk menguji performa di bawah beban tinggi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-check fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Peluncuran Aplikasi</h5>
                        <p class="mb-0">Peluncuran aplikasi meliputi persiapan sesuai standar platform, distribusi di
                            platform yang dipilih, dan strategi pemasaran untuk menjangkau pengguna target.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    <!-- Download Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s"
                        src="{{ asset('/landing/FitApp/img/about.png') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h5 class="text-primary-gradient fw-medium">Download</h5>
                    <h1 class="mb-4">Download The Latest Version Of Our App</h1>
                    <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat
                        ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <a href="#" class="d-flex bg-primary-gradient rounded py-3 px-4">
                                <i class="fab fa-apple fa-3x text-white flex-shrink-0"></i>
                                <div class="ms-3">
                                    <p class="text-white mb-0">Available On</p>
                                    <h5 class="text-white mb-0">App Store</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <a href="#" class="d-flex bg-secondary-gradient rounded py-3 px-4">
                                <i class="fab fa-android fa-3x text-white flex-shrink-0"></i>
                                <div class="ms-3">
                                    <p class="text-white mb-0">Available On</p>
                                    <h5 class="text-white mb-0">Play Store</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Download End -->


    <!-- Pricing Start -->
    <div class="container-xxl py-5" id="pricing">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Paket Harga</h5>
                <h1 class="mb-5">Pilih Paket Anda</h1>
            </div>
            <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center bg-primary-gradient rounded-pill mb-5">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="pill" href="#tab-1">Bulanan</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="pill" href="#tab-2">Tahunan</button>
                    </li>
                </ul>
                <div class="tab-content text-start">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Ekonomis</h4>
                                        <span>Powerful & Awesome Features</span>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp</small>350.000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                Month</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser
                                                Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a href="#" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light rounded border">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Menengah</h4>
                                        <span>Powerful & Awesome Features</span>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp</small>500.000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                Month</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser
                                                Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a href="#"
                                            class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Premium</h4>
                                        <span>Powerful & Awesome Features</span>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp</small>600.000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                Month</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser
                                                Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a href="#" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tab-2" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Ekonomis</h4>
                                        <span>Powerful & Awesome Features</span>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp</small>1.650.000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                Yearly</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser
                                                Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a href="#" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light rounded border">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Menengah</h4>
                                        <span>Powerful & Awesome Features</span>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp</small>2.000.000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                Yearly</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser
                                                Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a href="#" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light rounded">
                                    <div class="border-bottom p-4 mb-4">
                                        <h4 class="text-primary-gradient mb-1">Premium</h4>
                                        <span>Powerful & Awesome Features</span>
                                    </div>
                                    <div class="p-4 pt-0">
                                        <h1 class="mb-3">
                                            <small class="align-top"
                                                style="font-size: 22px; line-height: 45px;">Rp</small>2.500.000<small
                                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                                Yearly</small>
                                        </h1>
                                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                                class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser
                                                Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                        <a href="#" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5" id="review">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Testimonial</h5>
                <h1 class="mb-5">Apa Kata Klien Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="img-fluid bg-white rounded flex-shrink-0 p-1"
                            src="{{ asset('/landing/FitApp/img/testimonial-1.jpg') }}" style="width: 85px; height: 85px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Agus Herlino</h5>
                            <div>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">Bagus dan responsive, dapat mengatur manajement keuangan kami</p>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="img-fluid bg-white rounded flex-shrink-0 p-1"
                            src="{{ asset('/landing/FitApp/img/testimonial-1.jpg') }}" style="width: 85px; height: 85px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Agus Herlino</h5>
                            <div>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">Bagus dan responsive, dapat mengatur manajement keuangan kami</p>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="img-fluid bg-white rounded flex-shrink-0 p-1"
                            src="{{ asset('/landing/FitApp/img/testimonial-1.jpg') }}" style="width: 85px; height: 85px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Agus Herlino</h5>
                            <div>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">Bagus dan responsive, dapat mengatur manajement keuangan kami</p>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="img-fluid bg-white rounded flex-shrink-0 p-1"
                            src="{{ asset('/landing/FitApp/img/testimonial-1.jpg') }}"
                            style="width: 85px; height: 85px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Agus Herlino</h5>
                            <div>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">Bagus dan responsive, dapat mengatur manajement keuangan kami</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5" id="contact">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Kontak Kami</h5>
                <h1 class="mb-5">Hubungi Kami!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">Siap untuk membawa bisnis Anda ke tingkat yang lebih tinggi? Hubungi
                            kami melalui : <a href="#" class="btn btn-primary-gradient rounded-pill py-1 px-1"
                                target="_blank">Whatsapp</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">No Wa</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary-gradient rounded-pill py-3 px-5"
                                        type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
