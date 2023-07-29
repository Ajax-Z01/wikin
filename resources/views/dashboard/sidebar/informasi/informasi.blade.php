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
                @foreach ($messages as $message)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Informasi {{ $message->name }}</h5>
                                <p>Ini Adalah Informasi Terbaru dari Kami.</p>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $message->subject }}</h5>
                                    <p class="card-text">{{ $message->content }}</p>
                                    <a href="{{ route('informasi.delete', ['id' => $message->id]) }}"
                                        onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this message?')) document.getElementById('delete-form-{{ htmlentities($message->id) }}').submit();">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                                    </a>
                                    <form id="delete-form-{{ htmlentities($message->id) }}"
                                        action="{{ route('informasi.delete', ['id' => $message->id]) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if (Auth::user()->type == 'admin')
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Contact</h5>
                                <p>Ini Pesan Contact (Khusus Admin)</p>
                            </div>
                            @foreach ($contacts as $contact)
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $contact->subject }}</h5>
                                        <p class="card-text">{{ $contact->message }}</p>
                                        <a href="{{ route('informasi.delete2', ['id' => $contact->id]) }}"
                                            onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this contact?')) document.getElementById('delete-form-{{ htmlentities($contact->id) }}').submit();">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Hapus</button>
                                        </a>
                                        <form id="delete-form-{{ htmlentities($contact->id) }}"
                                            action="{{ route('informasi.delete2', ['id' => $contact->id]) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection
