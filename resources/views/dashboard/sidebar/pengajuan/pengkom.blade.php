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
                            <h5 class="card-title">Penambahan Komunitas</span></h5>
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
                                    @foreach ($formkomun as $komun)
                                        <tr>
                                            <th scope="row"><a href="#">1</a></th>
                                            <td>{{ htmlentities($komun->name) }}</td>
                                            <td>{{ htmlentities($komun->comunity_name) }}</td>
                                            <td><a href="#"
                                                    class="text-primary">{{ htmlentities($komun->description) }}</a></td>
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
                                                                        <label for="message-text"
                                                                            class="col-form-label">Pesan
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success mt-4" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @elseif(session('unsuccess'))
                            <div class="alert alert-danger mt-4" role="alert">
                                <strong class="font-bold">Unsuccess!</strong>
                                <span class="block sm:inline">{{ session('unsuccess') }}</span>
                            </div>
                        @endif
                        <h5 class="card-title">Formulir Pengajuan Komunitas</h5>

                        <!-- General Form Elements -->
                        <form role="form text-left" action="{{ route('pengkom.store') }}" method="post"
                            enctype="multipart/form-data>
                            @method('POST')
                            @csrf
                            <div class="row
                            mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('name') is-invalid @enderror "
                                    id="name" name="name">
                                @error('name')
                                    <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                @enderror
                            </div>
                    </div>
                    <div class="row mb-3">
                        <label for="comunity_name" class="col-sm-3 col-form-label">Nama Komunitas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control @error('comunity_name') is-invalid @enderror"
                                id="comunity_name" name="comunity_name">
                            @error('comunity_name')
                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email">
                            @error('email')
                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control @error('description') is-invalid @enderror" style="height: 100px" id="description"
                                name="description"></textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="logo_image" class="col-sm-3 col-form-label">Logo Upload</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('logo_image') is-invalid @enderror" type="file"
                                id="logo_image" name="logo_image">
                            @error('logo_image')
                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>
            </div>
            <div class="container text-center">
                <h5 class="card-title">Daftar Komunitas</h5>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('/img/card.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bunga</h5>
                                <p class="card-text">Komunitas Energi <br>Kontak :asdf@gmail</p>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('/img/card.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bunga</h5>
                                <p class="card-text">Komunitas Pangan <br>Kontak :asdf@gmail</p>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('/img/card.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bunga</h5>
                                <p class="card-text">Komunitas Pangan <br>Kontak :asdf@gmail</p>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('/img/card.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bunga</h5>
                                <p class="card-text">Komunitas Pangan <br>Kontak :asdf@gmail</p>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
