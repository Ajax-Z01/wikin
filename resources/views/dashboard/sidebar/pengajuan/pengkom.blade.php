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
                                        <th scope="col">Komunitas</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Balas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">1</a></th>
                                        <td>Arfan</td>
                                        <td>Singa</td>
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
                                        <td>Harimau</td>
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
                                        <td>Belalang</td>
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
            </div>
        </section>

    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
