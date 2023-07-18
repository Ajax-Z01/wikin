@extends('dashboard.layout.main')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Selamat Datang -->
                        <div class="col-xxl">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Selamat Datang <span>| Arfanny</span></h5>
                                    <h4 class="primary-text">Selamat datang di-<strong>WIKIN</strong><br>
                                        <strong>"Website Interaktif Komunitas Nuklir Indonesia"</strong>
                                    </h4>
                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <div class="row">
                            <!-- User -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah User</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>300</h6>
                                                <span class="text-success small pt-1 fw-bold">10%</span> <span
                                                    class="text-muted small pt-2 ps-1">Meningkat</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End User -->

                            <!-- Pemas -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Pemas</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-journal-check"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>20</h6>
                                                <span class="text-success small pt-1 fw-bold">2%</span> <span
                                                    class="text-muted small pt-2 ps-1">Meningkat</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Pemas -->

                            <!-- Komunitas -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Komunitas</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-diagram-3"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>25</h6>
                                                <span class="text-success small pt-1 fw-bold">2%</span> <span
                                                    class="text-muted small pt-2 ps-1">Meningkat</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Komunitas -->

                            <!-- Keluhan -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Jumlah Keluhan</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-envelope-open"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>50</h6>
                                                <span class="text-success small pt-1 fw-bold">5%</span> <span
                                                    class="text-muted small pt-2 ps-1">Meningkat</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Keluhan -->
                        </div>


                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- News & Updates Traffic -->
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="assets/img/news-1.jpg" alt="">
                                    <h4><a href="#">Info Terkini</a></h4>
                                    <p>Lorem Ipsum</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-2.jpg" alt="">
                                    <h4><a href="#">Info Terbaru</a></h4>
                                    <p>Lorem Ipsum</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-3.jpg" alt="">
                                    <h4><a href="#">Info Terupdate</a></h4>
                                    <p>Lorem Ipsum</p>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
