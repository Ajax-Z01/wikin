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
                            <h5 class="card-title">Data Komunitas</span></h5>
                            <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                <td><button type="button" class="bg-danger btn btn-info position-relative"
                                        data-bs-toggle="modal" data-bs-target="#pengkom">
                                        <i class="text-light bi bi-plus-square">
                                        </i></button>
                                    <div class="modal fade" id="pengkom" tabindex="-1"
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
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Nama
                                                                Komunitas</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Narahubung
                                                                Komunitas</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text"
                                                                class="col-form-label">Deskripsi</label>
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
                                        <th scope="col">Nama Komunitas</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Kontak</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">1</a></th>
                                        <td>Singa</td>
                                        <td>lerem</td>
                                        <td>0865xxxxxx</td>
                                        <td><button type="button" class="bg-primary btn btn-info position-relative"
                                                data-bs-toggle="modal" data-bs-target="#pengkoms">
                                                <i class="text-light bi bi-info-circle">
                                                </i></button>
                                            <div class="modal fade" id="pengkoms" tabindex="-1"
                                                aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="pengabdianMasLabel">Edit Komunitas
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Nama
                                                                        Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Narahubung Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text"
                                                                        class="col-form-label">Deskripsi</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputNumber"
                                                                        class="col-sm-5 col-form-label">Gambar Kegiatan
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="file"
                                                                            id="imgFile">
                                                                    </div>
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
                                            <!-- End Button Info -->
                                            <button type="button" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">2</a></th>
                                        <td>Harimau</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td>0867xxxxxx</td>
                                        <td><button type="button" class="bg-primary btn btn-info position-relative"
                                                data-bs-toggle="modal" data-bs-target="#pengkom">
                                                <i class="text-light bi bi-info-circle">
                                                </i></button>
                                            <div class="modal fade" id="pengkom" tabindex="-1"
                                                aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian
                                                                Masyarakat</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Nama Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Narahubung Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text"
                                                                        class="col-form-label">Deskripsi</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputNumber"
                                                                        class="col-sm-5 col-form-label">Gambar Kegiatan
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="file"
                                                                            id="imgFile">
                                                                    </div>
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
                                            <!-- End Button Info -->
                                            <button type="button" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">3</a></th>
                                        <td>Gajah</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td>0867xxxxxx</td>
                                        <td><button type="button" class="bg-primary btn btn-info position-relative"
                                                data-bs-toggle="modal" data-bs-target="#pengkom">
                                                <i class="text-light bi bi-info-circle">
                                                </i></button>
                                            <div class="modal fade" id="pengkom" tabindex="-1"
                                                aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian
                                                                Masyarakat</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Nama Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Narahubung Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text"
                                                                        class="col-form-label">Deskripsi</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputNumber"
                                                                        class="col-sm-5 col-form-label">Gambar Kegiatan
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="file"
                                                                            id="imgFile">
                                                                    </div>
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
                                            <!-- End Button Info -->
                                            <button type="button" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">4</a></th>
                                        <td>Paus</td>
                                        <td><a href="#" class="text-primary">Lorem Ipsum</a></td>
                                        <td>0867xxxxxx</td>
                                        <td><button type="button" class="bg-primary btn btn-info position-relative"
                                                data-bs-toggle="modal" data-bs-target="#pengkom">
                                                <i class="text-light bi bi-info-circle">
                                                </i></button>
                                            <div class="modal fade" id="pengkom" tabindex="-1"
                                                aria-labelledby="pengabdianMasLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="pengabdianMasLabel">Pengabdian
                                                                Masyarakat</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Nama Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Narahubung Komunitas</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text"
                                                                        class="col-form-label">Deskripsi</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputNumber"
                                                                        class="col-sm-5 col-form-label">Gambar Kegiatan
                                                                    </label>
                                                                    <div class="col-sm-10">
                                                                        <input class="form-control" type="file"
                                                                            id="imgFile">
                                                                    </div>
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
                                            <!-- End Button Info -->
                                            <button type="button" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></i></button>
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
