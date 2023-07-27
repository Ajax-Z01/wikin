@extends('dashboard.layout.main')
@section('content')
    <!-- Main Content -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Pengajuan Komunitas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Form Pengajuan</li>
                    <li class="breadcrumb-item active">Pengajuan Komunitas</li>
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
                                            <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                                            <td>{{ htmlentities($komun->name) }}</td>
                                            <td>{{ htmlentities($komun->comunity_name) }}</td>
                                            <td><a href="#"
                                                    class="text-primary">{{ htmlentities($komun->description) }}</a></td>
                                            <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#komun{{$komun->id}}">
                                                    <i class="bi bi-cursor">
                                                    </i></button>
                                                <div class="modal fade" id="komun{{$komun->id}}" tabindex="-1"
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
                                                                <form action="{{ route('send.message', $komun->user_id) }}" method="post">
                                                                    @method('POST')
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <label for="user_id" class="col-form-label">Penerima:</label>
                                                                        <select class="form-control" id="user_id" name="user_id">
                                                                            <option value="{{ $komun->user_id }}">{{ $komun->name }}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="subject" class="col-form-label">Topik:</label>
                                                                        <input type="text" class="form-control" id="subject" name="subject" value="{{ $komun->comunity_name }} : ">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="message-text" class="col-form-label">Pesan Balasan:</label>
                                                                        <textarea class="form-control" id="message-text" name="content"></textarea>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
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
            </div><!-- End Row -->
        </section>

    </main><!-- End #main -->
    <!-- End Main Content -->
@endsection
