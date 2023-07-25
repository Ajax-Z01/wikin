@extends('dashboard.layout.main')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Informasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">More Info</li>
                    <li class="breadcrumb-item active">Informasi</li>
                </ol>

            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Komunitas</h5>
                            <p>Ini Adalah Informasi Terbaru dari Kami.</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Subject</h5>
                                <p class="card-text">Content</p>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Konsultasi</h5>
                            <p>Ini Adalah Informasi Terbaru dari Kami.</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Subject</h5>
                                <p class="card-text">Content</p>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Pengabdian Masyarakat</h5>
                            <p>Ini Adalah Informasi Terbaru dari Kami.</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Subject</h5>
                                <p class="card-text">Content</p>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Subject</h5>
                                <p class="card-text">Content</p>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Contact</h5>
                            <p>Ini Pesan Contact (Khusus Admin)</p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Subject</h5>
                                <p class="card-text">Content</p>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Subject</h5>
                                <p class="card-text">Content</p>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
