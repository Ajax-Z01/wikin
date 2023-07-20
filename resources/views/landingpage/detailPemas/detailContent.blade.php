@include('landingpage.header')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
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
                    <li>Blog Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-12">
                    <article class="blog-details">
                        <div class="post-img justify-content-center">
                            <img src="{{ asset('/img/blog/blog-1.jpg') }}" alt="" class="img-fluid rounded">
                        </div>
                        <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                        </h2>
                        <div class="content">
                            <p>
                                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est
                                cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis
                                dolore.
                            </p>
                            <p>
                                Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in
                                accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate
                                cupiditate.
                            </p>
                            <p>
                                Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore
                                provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta
                                est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit
                                quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem
                                magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                            </p>

                            <h3>Et quae iure vel ut odit alias.</h3>
                            <p>
                                Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum
                                atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem
                                laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum
                                nesciunt aliquid qui.
                                Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut
                                ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem
                                omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint
                                consequatur quidem ea.
                                Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum
                                quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                            </p>
                            <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                            <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                            <p>
                                Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In
                                assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro
                                autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem
                                facilis hic dolorum dolores vel.
                                Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
                                quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut
                                illum ut a quam vitae.
                            </p>
                            <p>
                                Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
                                incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                            </p>
                        </div><!-- End post content -->
                    </article><!-- End blog post -->
                </div>
            </div>
        </div>
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
