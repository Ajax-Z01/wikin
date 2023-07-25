@extends('dashboard.layout.main')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Notifikasi</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <!-- List Data User -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Notifikasi</span></h5>
                            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                            </div>
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Update Content</th>
                                        <th scope="col">Waktu Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a>1</a></th>
                                        <td>Pengajuan Konsultasi</td>
                                        <td>Waktu Update</td>
                                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-trash">
                                                </i></button>
                                        </td>
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
@endsection
