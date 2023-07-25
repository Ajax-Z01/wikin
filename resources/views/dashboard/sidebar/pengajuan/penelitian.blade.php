@extends('dashboard.layout.main')
@section('content')
    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Penelitian Kenukliran</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Form Pengajuan</li>
                    <li class="breadcrumb-item active">Penelitian Kenukliran</li>
                </ol>
            </nav>
            @if (session('success'))
                <div class="alert alert-primary mt-4" role="alert">
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
            <div class="row">
                @if (Auth::user()->type == 'admin')
                    <div class="col-lg-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">List Penelitian Kenukliran</span></h5>
                                <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                    <td><button type="button" class="bg-danger btn btn-info position-relative"
                                            data-bs-toggle="modal" data-bs-target="#penelitian">
                                            <i class="text-light bi bi-plus-square">
                                            </i></button>
                                        <div class="modal fade" id="penelitian" tabindex="-1"
                                            aria-labelledby="penelitianMasLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pengabdianMasLabel">Penelitian
                                                            Kenukliran</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form text-left" action="{{ route('penelitian.store') }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @method('POST')
                                                            @csrf
                                                            <input type="hidden" name="user_id"
                                                                value="{{ Auth::user()->id }}">
                                                            <div class="mb-3">
                                                                <label for="name_penelitian" class="col-form-label">Nama
                                                                    Penelitian</label>
                                                                <input type="text" class="form-control"
                                                                    name="name_penelitian" id="name_penelitian">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="location" class="col-form-label">Lokasi</label>
                                                                <input type="text" class="form-control" name="location"
                                                                    id="location">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="description"
                                                                    class="col-form-label">Deskripsi</label>
                                                                <input class="form-control" name="description"
                                                                    id="description">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="contentpemas" class="col-form-label">Isi
                                                                    Kegiatan</label>
                                                                <textarea class="form-control" id="contentpemas" name="content"></textarea>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-sm-10">
                                                                    <label for="image"
                                                                        class="col-sm-5 col-form-label">Gambar
                                                                        Kegiatan </label>
                                                                    <input class="form-control" type="file"
                                                                        name="image" id="image" accept="image/*">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Send
                                                                    message</button>
                                                            </div>
                                                        </form>
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
                                            <th scope="col">Nama Penelitian</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penelitians as $penelitian)
                                            <tr>
                                                <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                                                <td>{{ htmlentities($penelitian->name_penelitian) }}</td>
                                                <td>{{ htmlentities($penelitian->location) }}</td>
                                                <td><a href="#"
                                                        class="text-primary">{{ htmlentities($penelitian->description) }}</a>
                                                </td>
                                                <td><span class="badge bg-success">Terlaksana</span></td>
                                                <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#penelitian{{ $penelitian->id }}">
                                                        <i class="bi bi-info-circle">
                                                        </i></button>
                                                    <div class="modal fade" id="penelitian{{ $penelitian->id }}"
                                                        tabindex="-1" aria-labelledby="penelitianMasLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="penelitianMasLabel">
                                                                        Penelitian Kenukliran</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form text-left"
                                                                        action="{{ route('penelitian.update', $penelitian->id) }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <input type="hidden" name="user_id"
                                                                            value="{{ Auth::user()->id }}">
                                                                        <div class="mb-3">
                                                                            <label for="name"
                                                                                class="col-form-label">Nama
                                                                                Penelitian</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name_penelitian"
                                                                                id="name_penelitian"
                                                                                value="{{ htmlentities($penelitian->name_penelitian) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="location"
                                                                                class="col-form-label">Lokasi</label>
                                                                            <input type="text" class="form-control"
                                                                                name="location" id="location"
                                                                                value="{{ htmlentities($penelitian->location) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="description"
                                                                                class="col-form-label">Deskripsi</label>
                                                                            <input class="form-control" name="description"
                                                                                id="description"
                                                                                value="{{ htmlentities($penelitian->description) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="contentpemas"
                                                                                class="col-form-label">Isi
                                                                                Kegiatan</label>
                                                                            <textarea class="form-control" id="contentpemas" name="content">{!! html_entity_decode($penelitian->content) !!}</textarea>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <div class="col-sm-10">
                                                                                <label for="image"
                                                                                    class="col-sm-5 col-form-label">Gambar
                                                                                    Kegiatan </label>
                                                                                <input class="form-control" type="file"
                                                                                    name="image" id="image"
                                                                                    accept="image/*">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-bs-dismiss="modal">Hapus Data</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Tambahkan</button>
                                                                        </div>
                                                                    </form>
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
                @endif
            </div>
        </section>
    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
