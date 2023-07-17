<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WIKIN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('dashboard.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('dashboard.sidebar.sidebar')
    <!-- End Sidebar-->

    <!-- Main Content -->
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

        <section class="section">
            <div class="row">

                <!-- List Data User -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">Data Komunitas</span></h5>

                            <table class="table table-borderless datatable">
                                <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                    <button type="button" class="bg-danger btn btn-info position-relative"><i class="text-light bi bi-person-plus"></i></button>
                                </div>
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Komunitas</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">1</a></th>
                                        <td>Singa</td>
                                        <td><i class="bi bi-emoji-smile"></i></td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td><button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">2</a></th>
                                        <td>Harimau</td>
                                        <td><i class="bi bi-emoji-smile"></i></td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td><button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">3</a></th>
                                        <td>Gajah</td>
                                        <td><i class="bi bi-emoji-smile"></i></td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td><button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">4</a></th>
                                        <td>Paus</td>
                                        <td><i class="bi bi-emoji-smile"></i></td>
                                        <td><a href="#" class="text-primar">Lorem Ipsum</a></td>
                                        <td><span class="badge bg-danger">Rejected</span></td>
                                        <td><button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">5</a></th>
                                        <td>Gagak</td>
                                        <td><i class="bi bi-emoji-smile"></i></td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td><button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End List Komunitas  -->
            </div>
        </section>
    </main><!-- End #main -->
    <!-- End Main Content -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/mainUser.js') }}"></script>

</body>

</html>