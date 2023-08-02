@extends('layouts.dashboard-layout')

@push('css')
    <link href="{{ asset('assets/datatables/datatables') }}/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('header-content')
    {{-- <div class="row d-flex">
        <div class="col-lg-6 my-auto">
            Daftar Absensi
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary text-white d-flex justify-content-center align-items-center">
                <i class="fas fa-plus mr-2"></i>
                <p class="mb-0">Tambah Data</p>
            </button>
        </div>
    </div> --}}

    Daftar Laporan
@endsection

@section('main-content')
    <div class="card">
        <div class="card-body">
            <div class="container px-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h5 class="my-auto text-dark">Laporan Kegiatan Harian</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="table-responsive">
                        <table id="example" class="display table-bordered" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Deskripsi Kegiatan</th>
                                    <th>Nama</th>
                                    <th>Level</th>
                                    <th>Tanggal Kegiatan</th>
                                    <th>Waktu Kegiatan</th>
                                    <th>Kelola</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>dsfasd</td>
                                    <td>dsfasd</td>
                                    <td>dsfasd</td>
                                    <td>dsfasd</td>
                                    <td>dsfasd</td>
                                    <td>
                                        <div class="dropdown d-inline">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Option
                                            </button>
                                            <div class="dropdown-menu text-white">
                                                <a class="dropdown-item has-icon text-info" href="#"><i
                                                        class="fas fa-eye"></i>
                                                    Lihat</a>
                                                <a class="dropdown-item has-icon text-warning" href="#"><i
                                                        class="fas fa-pen"></i>
                                                    Edit</a>
                                                <a class="dropdown-item has-icon text-danger" href="#"><i
                                                        class="fas fa-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/datatables/datatables') }}/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
