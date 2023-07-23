@extends('landingpage.main')

@section('content')
    <main class="main" id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Tentang Kami</h2>
                    <p>Wikin bertujuan untuk mendorong pertumbuhan komunitas nuklir yang berdedikasi, berwawasan luas, dan
                        memiliki kontribusi positif bagi kemajuan teknologi nuklir di Indonesia. Dengan memberikan wadah
                        interaktif dan informatif, web ini berupaya menciptakan ruang yang aman dan terbuka bagi para
                        pemangku kepentingan nuklir dalam berbagi pengetahuan dan pengalaman kepada masyarakat umum.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="{{ asset('/img/logo.png') }}" class="img-fluid rounded-4 mb-4" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Wikin (Website Interaktif Komunitas Nuklir Indonesia)
                                Tempat anda menuangkan segala ide dan gagasan tentang kenukliran.
                                Fitur-fitur yang bisa anda dapatkan :
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Pengajuan pengabdian masyarakat</li>
                                <li><i class="bi bi-check-circle-fill"></i> Pengajuan Keluhan Kenukliran</li>
                                <li><i class="bi bi-check-circle-fill"></i> Join Komunitas</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Fitur Tersedia</h2>
                    <p>Wikin menyedikan beberapa fitur kepada guna menunjang kinerja website</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative ">
                            <div class="icon justify-content-center">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <h3>Pengajuan Komunitas</h3>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-journal-check"></i>
                            </div>
                            <h3>Pengajuan Pemas</h3>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon justify-content-center">
                                <i class="bi bi-envelope-open"></i>
                            </div>
                            <h3>Konsultasi Kenukliran</h3>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Our Services Section -->


        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="pemas" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pengabdian Masyarakat</h2>
                    <p>Berikut merupakan artikel yang menjelaskan mengenai peran teknologi nuklir dalam kehidupan.</p>
                </div>

                <div class="row gy-4">
                    @foreach ($pengmas as $pemas)
                        <div class="col-xl-4 col-md-6">
                            <article>
                                <div class="post-img">
                                    <img src="{{ htmlentities($pemas->image) }}" alt="image" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="{{ route('detail', $pemas->slug) }}">{{ htmlentities($pemas->name) }}</a>
                                </h2>
                                <p>
                                    {!! html_entity_decode($pemas->content) !!}
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-date">
                                            <time datetime="2022-01-01">{{ htmlentities($pemas->updated) }}</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->
                    @endforeach
                </div><!-- End recent posts list -->

                <div class="text-center mt-4"><a href="{{ route('detailPemas') }}"><button type="button"
                            class="text-center">Selengkapnya</button></a>
                </div>
            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

        <section id="alur" class="recent-post sections-bg">
            <div class="container text-center" data-aos="fade-down">
                <img src="{{ asset('img/alur.png') }}" class="img-fluid" alt="">
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Kontak</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis
                        dolorem dolore earum</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Jl. Babarsari Kotak POB 6101/YKKB, Ngentak, Caturtunggal, Kec. Depok, Kabupaten
                                        Sleman, Daerah Istimewa Yogyakarta 55281</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>komunitasnuklir@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+62 878-1462-4204</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
