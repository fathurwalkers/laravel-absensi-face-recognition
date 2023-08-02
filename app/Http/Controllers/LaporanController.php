<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function daftar_laporan()
    {
        return view('laporan.daftar-laporan');
    }

    public function daftar_laporan_user()
    {
        return view('laporan.daftar-laporan-user');
    }
}
