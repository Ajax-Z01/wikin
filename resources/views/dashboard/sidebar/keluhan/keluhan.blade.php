@extends('dashboard.layout.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Formulir Keluhan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Keluhan Kenukliran</li>
                </ol>
            </nav>
            @if (session('success'))
                <div class="alert alert-primary" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @elseif(session('unsuccess'))
                <div class="alert alert-danger" role="alert">
                    <strong class="font-bold">Unsuccess!</strong>
                    <span class="block sm:inline">{{ session('unsuccess') }}</span>
                </div>
            @endif
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                @if (Auth::user()->type == 'admin')
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pesan Masuk</span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Balas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($formkeluh as $keluh)
                                            <tr>
                                                <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                                                <td>{{ htmlentities($keluh->name) }}</td>
                                                <td><a href="#"
                                                        class="text-primary">{{ htmlentities($keluh->description) }}</a>
                                                </td>
                                                <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        <i class="bi bi-cursor">

                                                        </i></button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">New
                                                                        message
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
                @elseif (Auth::user()->type == 'user')
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Formulir Keluhan Kenukliran</h5>

                                <!-- General Form Elements -->
                                <form role="form text-left" action="{{ route('keluhan.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name">
                                            @error('name')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                                name="nik" id="nik">
                                            @error('nik')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" id="email">
                                            @error('email')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="location" class="col-sm-3 col-form-label">Asal Daerah</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                name="location" id="location">
                                            @error('location')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="description" class="col-sm-3 col-form-label">Deskripsi<br>*Note : Apa
                                            yang dirasakan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control @error('description') is-invalid @enderror" style="height: 100px" name="description"
                                                id="description"></textarea>
                                            @error('description')
                                                <span class="invalid-feedback">{{ htmlentities($message) }}</span>
                                            @enderror
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
                                </form><!-- End General Form Elements -->
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
