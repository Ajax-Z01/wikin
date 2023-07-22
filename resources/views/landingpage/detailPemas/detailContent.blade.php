@include('landingpage.header')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>Pengabdian Masyarakat</h2>
                        <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                            consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione
                            sint. Sit quaerat ipsum dolorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('detailPemas') }}">Blog</a></li>
                    <li>Blog Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container col-lg-8" data-aos="fade-up">
            <article class="blog-details">
                <div class="post-img justify-content-center">
                    <img src="{{ htmlentities($pemas->image) }}" alt="image"
                        class="img-fluid mx-auto d-block rounded">
                </div>
                <h2 class="title">{{ htmlentities($pemas->name) }}
                </h2>
                <div class="content">
                    {!! html_entity_decode($pemas->content) !!}
                    <div class="text-center">
                        <a href="{{ route('detailPemas') }}">
                            <button>Kembali ke daftar pemas</button>
                        </a>
                    </div>
                </div><!-- End post content -->
            </article><!-- End blog post -->
    </section><!-- End Blog Details Section -->
</main><!-- End #main -->
<!-- ======= Footer ======= -->
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
