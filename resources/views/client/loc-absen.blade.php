@extends('layouts.client-layouts')

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
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
                            <form method="POST" action="{{ route('konfir-absen') }}">
                                @csrf
                                <div class="mb-2 border border-1">
                                    <div class="loc" id="map" style="min-height: 80vh"></div>
                                </div>
                                <div class="mb-0 text-center">
                                    <button type="submit" class="btn btn-primary rounded-pill col-12">Konfirmasi
                                        absen
                                    </button>
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
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);
    </script>
@endpush
