<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Selamat Datang di<span> Wikin</span></h2>
                <p>Platform interaktif penunjang komunitas nuklir di Indonesia</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('login') }}" class="btn-get-started">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>

            <!-- Carousel -->
            <div class="col-lg-6 order-1 order-lg-2">
                <!-- <img src="assets/img/h4.png" class="img-fluid rounded-4" alt="" data-aos="zoom-out" data-aos-delay="100"> -->
                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-aos="zoom-out" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('/img/h4.png') }}" class="d-block w-100 img-fluid rounded-4" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/komunitas.jpeg') }}" class="d-block w-100 img-fluid rounded-4" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/img/h3.jpg') }}" class="d-block w-100 img-fluid rounded-4" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- End Carousel -->

        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Konsultasi</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-geo-alt"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Komunitas</a></h4>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-command"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Pengabdian</a></h4>
                    </div>
                </div><!--End Icon Box -->

            </div>
        </div>
    </div>

    </div>
</section>