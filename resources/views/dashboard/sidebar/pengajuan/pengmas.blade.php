@extends('dashboard.layout.main')
@section('content')
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

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pesan Masuk</span></h5>
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Balas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">1</a></th>
                                        <td>Arfan</td>
                                        <td>Yogyakarta</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-cursor">

                                                </i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Penerima:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text" class="col-form-label">Pesan
                                                                        Balasan:</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Send
                                                                message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">2</a></th>
                                        <td>Fanny</td>
                                        <td>Yogyakarta</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-cursor">

                                                </i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Penerima:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text" class="col-form-label">Pesan
                                                                        Balasan:</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Send
                                                                message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">3</a></th>
                                        <td>Vania</td>
                                        <td>Yogyakarta</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="bi bi-cursor">

                                                </i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">New message
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Penerima:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text" class="col-form-label">Pesan
                                                                        Balasan:</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Send
                                                                message</button>
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
                </div>

            </div>

            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">List Pengabdian Masyarakat</span></h5>

                        <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                            <td><button type="button" class="bg-danger btn btn-info position-relative"
                                    data-bs-toggle="modal" data-bs-target="#pengmas">
                                    <i class="text-light bi bi-plus-square">
                                    </i></button>
                                <div class="modal fade" id="pengmas" tabindex="-1"
                                    aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian Masyarakat</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Nama
                                                            Kegiatan</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Lokasi</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Deskripsi</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Isi
                                                            Kegiatan</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputNumber" class="col-sm-5 col-form-label">Gambar
                                                            Kegiatan </label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="file" id="imgFile">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
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
                                    <th scope="col">Nama Kegiatan</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">1</a></th>
                                    <td>Kerja Bakti</td>
                                    <td>Yogyakarta</td>
                                    <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                    <td><span class="badge bg-success">Terlaksana</span></td>
                                    <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#pengabdianMas">
                                            <i class="bi bi-info-circle">

                                            </i></button>
                                        <div class="modal fade" id="pengabdianMas" tabindex="-1"
                                            aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian
                                                            Masyarakat</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama
                                                                    Kegiatan</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Lokasi</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="message-text"
                                                                    class="col-form-label">Deskripsi</label>
                                                                <textarea class="form-control" id="message-text"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Send
                                                            message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">2</a></th>
                                    <td>Kunjungan Industri</td>
                                    <td>Yogyakarta</td>
                                    <td><a href="#" class="text-primary">Belum di balas</a></td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#pengabdianMas">
                                            <i class="bi bi-info-circle">

                                            </i></button>
                                        <div class="modal fade" id="pengabdianMas" tabindex="-1"
                                            aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian
                                                            Masyarakat</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama
                                                                    Kegiatan</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Lokasi</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="message-text"
                                                                    class="col-form-label">Deskripsi</label>
                                                                <textarea class="form-control" id="message-text"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Send
                                                            message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">3</a></th>
                                    <td>Bersih Desa</td>
                                    <td>Yogyakarta</td>
                                    <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                    <td><span class="badge bg-success">Terlaksana</span></td>
                                    <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#pengabdianMas">
                                            <i class="bi bi-info-circle">

                                            </i></button>
                                        <div class="modal fade" id="pengabdianMas" tabindex="-1"
                                            aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian
                                                            Masyarakat</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama
                                                                    Kegiatan</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Lokasi</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="message-text"
                                                                    class="col-form-label">Deskripsi</label>
                                                                <textarea class="form-control" id="message-text"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Send
                                                            message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- Formulir Pengmas -->
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Formulir Pengajuan Pengabdian Masyarakat</h5>

                                <!-- General Form Elements -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Nama Pengabdian
                                            Masyarakat</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-3 col-form-label">Asal Daerah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-3 col-form-label">Deskripsi Kegiatan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" style="height: 100px"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3 justify-content-center">
                                        <div class=" col-sm-4">
                                        </div>
                                        <div class=" col-sm-4">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
                                        <div class=" col-sm-4">
                                        </div>
                                    </div>
                            </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div><!-- End List Komunitas  -->
            </div>
        </section>

    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
