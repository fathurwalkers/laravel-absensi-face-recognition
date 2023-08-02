@extends('layouts.client-layouts')

@push('css')
@endpush

@section('header-content')
    <div class="container px-0">
        <div class="row bg-primary mx-auto py-2">
            <div class="col-2 ">
                <div class="header d-flex">
                    <div class="header-icon">
                        <a href="{{ route('client') }}" class="btn text-light">
                            <i class="fa fa-arrow-left" style="font-size: 20px"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-8 text-center my-auto">
                <div class="header-text">
                    <h5 class="text-white">
                        Absensi
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card shadow rounded pb-2">
                    <div class="card-body">
                        <div class="absensi">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('status') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form>
                                <div class="mb-3">
                                    <label for="floatingTextarea" class="mb-3">Deskripsi Kegiatan</label>
                                    <div class="form-floating">
                                        <textarea class="form-control pt-1" placeholder="Hayat" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Absen</label>
                                    <input type="datetime-local" class="form-control" value="{{ now() }}">
                                </div>
                                <div class="mb-0 text-center">
                                    <a href="{{ route('absen-cam') }}" class="btn btn-primary rounded-pill col-12">Absen
                                        Masuk
                                    </a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card shadow rounded pb-2">
                    <div class="card-body">
                        <div class="absensi">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Absen</label>
                                    <input type="datetime-local" class="form-control" value="{{ now() }}">
                                </div>
                                <div class="mb-0 text-center">
                                    <button type="submit" class="btn btn-danger rounded-pill col-12">Absen Pulang
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card mt-4 shadow rounded">
                    <div class="card-title px-3 py-2">
                        <h4 class="mb-0">Daftar Kehadiran</h4>
                    </div>
                    <div class="card-body pt-1">
                        <div class="search-bar ">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Absensi">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                        <div class="data-absensi">
                            <div class="row mt-3">
                                <div class="card text-light shadow-none border-0"
                                    style="background: linear-gradient(54deg, rgba(52,110,196,1) 0%, rgba(184,219,240,1) 100%);">

                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h6>Hayat -<span class="text-white"
                                                            style="font-style: italic; font-weight: normal">pentester</span>
                                                    </h6>
                                                    <p style="font-size: 14px" class="">Absensi Senin, 15 Maret 2023
                                                    </p>
                                                </div>
                                                <div class="col-3 my-auto">
                                                    <button
                                                        class="btn btn-primary btn-sm text-light shadow-none px-3 rounded-pill">
                                                        Hadir
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('js')
@endpush
