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
                            <form>
                                <div class="mb-2 border border-1">
                                    <div class="cam bg-dark rounded" style="min-height: 80vh"></div>
                                </div>
                                <div class="mb-0 text-center">
                                    <a href="{{ route('absen-loc') }}" class="btn btn-primary rounded-pill col-12">Absen
                                        Sekarang
                                    </a>
                                </div>
                            </form>
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
