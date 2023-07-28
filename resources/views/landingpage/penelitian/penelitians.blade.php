@include('landingpage.header')

@include('landingpage.navbar')
<!-- Content -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Informasi Kenukliran</h2>
                        <p>Informasi terkini mengenai pengembangan teknologi kenukliran.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Informasi terkini </li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 posts-list">
                @foreach ($penelitians as $penelitian)
                    <div class="col-xl-4 col-md-6">
                        <article>
                            <a href="{{ route('detailpenelitians', $penelitian->slug) }}">
                                <div class="post-img">
                                    <img src="{{ htmlentities($penelitian->image) }}" alt=""
                                        class="img-fluid mx-auto d-block">
                                </div>
                                <h2 class="title">
                                    {{ htmlentities($penelitian->name_penelitian) }}
                                </h2>
                                <p>
                                    {!! html_entity_decode($penelitian->content) !!}
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-date">
                                            <time datetime="2022-01-01">{{ htmlentities($penelitian->updated) }}</time>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div><!-- End post list item -->
                @endforeach
            </div><!-- End blog posts list -->
            <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div><!-- End blog pagination -->
        </div>
    </section><!-- End Blog Section -->
</main><!-- End #main -->
<!-- end Content -->

@include('landingpage.footer')

<!-- End Footer -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>
