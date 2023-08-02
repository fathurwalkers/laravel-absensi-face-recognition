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
                        Kegiatan
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
                <div class="card mt-4 shadow rounded">
                    <div class="card-title px-3 py-2">
                        <h4 class="mb-0">Daftar Kegiatan</h4>
                    </div>
                    <div class="card-body pt-1">
                        <div class="search-bar ">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Kegiatan">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                        <div class="data-absensi">
                            <div class="row mt-3">
                                <div class="card border-0 shadow-none text-light"
                                    style="background: linear-gradient(54deg, rgba(52,110,196,1) 0%, rgba(184,219,240,1) 100%);">

                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h6>Hayat -<span class="text-white"
                                                            style="font-style: italic; font-weight: normal">pentester</span>
                                                    </h6>
                                                    <p style="font-size: 14px" class="">Kegiatan Senin, 15 Maret 2023
                                                    </p>
                                                </div>
                                                <div class="col-3 my-auto">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop">Lihat</button>

                                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                        data-bs-keyboard="false" tabindex="-1"
                                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-dark"
                                                                        id="staticBackdropLabel">Deskripsi Kegiatan</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ...
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
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
            </div>
        </div>
    </div>
    </div>
@endsection

@push('js')
@endpush
