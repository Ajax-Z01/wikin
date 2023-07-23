{{-- Header --}}
@include('landingpage.header')
<!--  Navbar  -->
@include('landingpage.navbar')

<!-- ======= Hero Section ======= -->
@include('landingpage.hero')

<!-- End Hero Section -->

@yield('content')



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
