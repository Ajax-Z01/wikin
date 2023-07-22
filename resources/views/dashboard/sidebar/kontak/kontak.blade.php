@extends('dashboard.layout.main')
@section('content')
    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Contact</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">More Info</li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section contact">
            <div class="row gy-4">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-telephone"></i>
                                <h3>Nomor Telepon</h3>
                                <p>(0274)484085</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>polteknuklir@brin.go.id</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jl. Babarsari Kotak POB 6101/YKKB, Ngentak,Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Buka</h3>
                                <p>Senin - Jumat<br>08:00 - 16:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card p-4">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                        @elseif(session('unsuccess'))
                            <div class="alert alert-danger" role="alert">
                                <strong class="font-bold">Unsuccess!</strong>
                                <span class="block sm:inline">{{ session('unsuccess') }}</span>
                            </div>
                        @endif
                        <form class="php-email-form" role="form text-left" action="{{ route('kontak.store') }}" method="post"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
