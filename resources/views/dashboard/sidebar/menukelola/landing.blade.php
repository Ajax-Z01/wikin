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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Landing Page</h5>
                            <form role="form text-left" action="{{ route('landing.store') }}" method="post"
                            enctype="multipart/form-data">
                            @method('POST')    
                            @csrf
                                <div class="row mb-2">
                                    <label for="inputText" class="col-sm-5 col-form-label">Facebook</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="facebook" id="facebook" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputText" class="col-sm-5 col-form-label">Instagram</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="instagram" id="instagram" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputEmail" class="col-sm-5 col-form-label">Twitter</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="twitter" id="twitter" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputText" class="col-sm-5 col-form-label">LinkedIn</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="linkedin" id="linkedin" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputText" class="col-sm-5 col-form-label">Deskripsi</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" style="height: 100px" name="description"
                                            id="description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="inputNumber" class="col-sm-5 col-form-label">Gambar Halaman </label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="file" id="image" name="image">
                                    </div>
                                </div>
                                <div class="mt-3 row mb-3">
                                    <div class="col-lg-4">
                                    </div>
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
