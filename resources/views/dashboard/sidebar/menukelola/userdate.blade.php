@extends('dashboard.layout.main')
@section('content')
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
                            <h5 class="card-title">Data User</span></h5>
                            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                <td><button type="button" class="bg-danger btn btn-info position-relative"
                                        data-bs-toggle="modal" data-bs-target="#dataUser">
                                        <i class="text-light bi bi-plus-square">
                                        </i></button>
                                    <div class="modal fade" id="dataUser" tabindex="-1"
                                        aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian Masyarakat
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Nama
                                                                Lengkap</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="username" class="col-form-label">Username</label>
                                                            <input type="text" class="form-control" id="username">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="col-form-label">Email</label>
                                                            <input type="text" class="form-control" id="email">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="password" class="col-form-label">Password</label>
                                                            <input type="password" class="form-control" id="password">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Daftar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </div>
                            <table class="table table-borderless datatable">

                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama User</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">1</a></th>
                                        <td>Singa</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-info-circle">

                                                </i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalToggleLabel">Detail Akun
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Nama : Singa
                                                        </div>
                                                        <div class="modal-body">
                                                            Username : Arfanny aja
                                                        </div>
                                                        <div class="modal-body">
                                                            Email : example@gmail.com
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-danger"
                                                                data-bs-target="#exampleModalToggle2"
                                                                data-bs-toggle="modal" data-bs-dismiss="modal">Hapus
                                                                Akun</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">2</a></th>
                                        <td>Harimau</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-info-circle">

                                                </i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalToggleLabel">Detail
                                                                Akun</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Nama : Harimau
                                                        </div>
                                                        <div class="modal-body">
                                                            Username : Arfanny aja
                                                        </div>
                                                        <div class="modal-body">
                                                            Email : example@gmail.com
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-danger"
                                                                data-bs-target="#exampleModalToggle2"
                                                                data-bs-toggle="modal" data-bs-dismiss="modal">Hapus
                                                                Akun</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">3</a></th>
                                        <td>Gajah</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-info-circle">

                                                </i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalToggleLabel">Detail
                                                                Akun</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Nama : Gajah
                                                        </div>
                                                        <div class="modal-body">
                                                            Username : Arfanny aja
                                                        </div>
                                                        <div class="modal-body">
                                                            Email : example@gmail.com
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-danger"
                                                                data-bs-target="#exampleModalToggle2"
                                                                data-bs-toggle="modal" data-bs-dismiss="modal">Hapus
                                                                Akun</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
