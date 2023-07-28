@include('landingpage.header')
@include('landingpage.navbar')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>Informasi Terkini Kenukliran</h2>
                        <p>Merupakan kumpulan informasi mengenai pengambangan teknologi nuklir di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('penelitians') }}">Informasi Terkini</a></li>
                    <li>Detail Penelitian</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container col-lg-8" data-aos="fade-up">
            <article class="blog-details">
                <div class="post-img justify-content-center">
                    <img src="{{ htmlentities($penelitian->image) }}" alt="image"
                        class="img-fluid mx-auto d-block rounded">
                </div>
                <h2 class="title">{{ htmlentities($penelitian->name_penelitian) }}
                </h2>
                <div class="content">
                    {!! html_entity_decode($penelitian->content) !!}
                    <div class="text-center">
                        <a href="{{ route('penelitians') }}">
                            <button>Kembali ke daftar informasi </button>
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
