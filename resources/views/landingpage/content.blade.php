@extends('landingpage.main')

@section('content')
    <main class="main" id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Tentang Kami</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                        nobis omnis tiledo stran delop</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="{{ asset('/img/h1.jpg') }}" class="img-fluid rounded-4 mb-4" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                    mastiro dolore eu fugiat nulla pariatur.</li>
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
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id
                        nobis omnis tiledo stran delop</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item  position-relative ">
                            <div class="icon justify-content-center">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3>Pengajuan Komunitas</h3>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h3>Pengajuan Pemas</h3>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon justify-content-center">
                                <i class="bi bi-easel"></i>
                            </div>
                            <h3>Konsultasi Kenukliran</h3>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon justify-content-center">
                                <i class="bi bi-bounding-box-circles "></i>
                            </div>
                            <h3>Jumlah Pengabdian Masyarakat</h3>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Our Services Section -->


        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pengabdian Masyarakat</h2>
                    <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
                        accusamus fugit aut qui distinctio</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/blog/blog-author.jpg') }}" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Maria Doe</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('/img/blog/blog-2.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('/img/blog/blog-author-2.jpg') }}" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('/img/blog/blog-3.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('/img/blog/blog-author-3.jpg') }}" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

                <div class="text-center mt-4"><a href="{{ route('detailPemas') }}"><button type="button"
                            class="btn btn-outline-secondary">Selengkapnya</button></a>
                </div>
            </div>
        </section><!-- End Recent Blog Posts Section -->

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
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
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
