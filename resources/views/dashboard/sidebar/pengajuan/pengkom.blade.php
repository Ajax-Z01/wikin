@extends('dashboard.layout.main')
@section('content')
    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Pengajuan Komunitas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pengajuan</li>
                    <li class="breadcrumb-item ">Komunitas</li>
                </ol>
            </nav>
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
        </div><!-- End Page Title -->
        <section class="section">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Pengajuan Komunitas</h5>

                        <!-- General Form Elements -->
                        <form role="form text-left" action="{{ route('pengkom.store') }}" method="post"
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
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email">
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
            </div>
            <div class="container text-center">
                <h5 class="card-title">Daftar Komunitas</h5>
                <div class="row">
                    @foreach ($komuns as $komun)
                        <div class="col-4">
                            <div class="card">
                                <img src="{{ htmlentities($komun->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ htmlentities($komun->name) }}</h5>
                                    <p class="card-text">{{ htmlentities($komun->description) }}<br>Kontak:
                                        {{ htmlentities($komun->contact) }}</p>
                                </div>
                            </div><!-- End Card with an image on top -->
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>

    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
