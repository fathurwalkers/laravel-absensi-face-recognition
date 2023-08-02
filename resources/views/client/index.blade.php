@extends('layouts.client-layouts')

@push('css')
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <style>
        #header-item {
            width: 100%;
            min-height: 50vh;
            overflow: hidden;
            background-color: rgb(0, 157, 255);
        }

        .overlay {
            width: 100%;
            height: 40vh;
            /* background-color: rgba(0, 0, 0, 0.582) */
        }

        .container {
            width: 100%;
        }

        .masuk-pulang {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .c-header {
            height: 19px;
        }

        .menu-item {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            width: 31.33333333% !important;
            font-weight: bold;

        }

        .icon {
            font-size: 25px !important;
            color: rgb(4, 168, 193);
        }

        .atas {
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }
    </style>
@endpush


@section('header-content')
    <div id="header-item" class="position-relative">
        <div class="profil px-3 py-3 text-light d-flex justify-content-between position-absolute" style="width: 100%;">
            <div class="profil-text my-auto">
                @php
                    $name = explode(' ', 'Hayat Sipaling enkripsi anjing babi binatang');
                @endphp
                Hi, {{ strtoupper($name[2]) }}
            </div>
            <div class="profil-picture">
                <div class="dropdown">
                    <img src="{{ asset('assets/img') }}/awal.jpg" alt="" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" class="border border-2 border-light rounded-pill" width="35">
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="overlay text-center d-flex justify-content-center align-items-center flex-column">
            <h5 class="text-light px-4">Selamat Datang, jangan Lupa Absen Hari Ini</h5>
            <p class="text-white mb-0">Selasa, 04-07-2023</p>
        </div>

    </div>
@endsection

@section('main-content')
    <div class="container bg-light py-4 rounded-top">
        <div class="c-header px-2">
            <div class="atas position-relative " style="top: -150px; border-radius: 50px">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Absen Kerja</h4>
                            </div>
                            <div class="card-body d-flex justify-content-around">
                                <div class="col-5 rounded masuk-pulang">
                                    <div class="mb-0">
                                        <div class="card-judul text-center py-2">
                                            <p class="mb-0 py-1">Masuk</p>
                                        </div>
                                        <div
                                            class="card-content text-center d-flex align-items-center justify-content-center my-auto pb-2">
                                            <i class="fa fa-clock me-2" style="font-size: 20px"></i>
                                            <span class="btn btn-success">08:00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 rounded masuk-pulang">
                                    <div class="mb-0">
                                        <div class="card-judul text-center py-2">
                                            <p class="mb-0 py-1">Pulang</p>
                                        </div>
                                        <div
                                            class="card-content text-center d-flex align-items-center justify-content-center my-auto pb-2 ">
                                            <i class="fa fa-clock me-2" style="font-size: 20px"></i>
                                            <span class="btn btn-danger">--:--</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu mt-5">
            <div class="menu-header px-3">
                <h4 class="text-dark">Menu Utama</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between flex-wrap">
                            <div class="col-4 rounded menu-item text-center py-3 mb-2"
                                onclick="location.href ='{{ route('absen') }}'">
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                Absen
                            </div>
                            <div class="col-4 rounded menu-item text-center py-3 mb-2">
                                <div class="icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                Lembur
                            </div>
                            <div class="col-4 rounded menu-item text-center py-3 mb-2">
                                <div class="icon">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                Izin
                            </div>
                            <div class="col-4 rounded menu-item text-center py-3 mb-2"
                                onclick="location.href ='{{ route('kegiatan') }}'">
                                <div class="icon">
                                    <i class="bi bi-list-task"></i>
                                </div>
                                Kegiatan
                            </div>
                            <div class="col-4 rounded menu-item text-center py-3 mb-2">
                                <div class="icon">
                                    <i class="bi bi-journal-check"></i>
                                </div>
                                Rekap
                            </div>
                            <div class="col-4 rounded menu-item text-center py-3 mb-2">
                                <div class="icon">
                                    <i class="bi bi-info-square"></i>
                                </div>
                                Informasi
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
