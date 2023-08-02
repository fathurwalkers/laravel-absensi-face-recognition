<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class ClientController extends Controller
{
    public function index()
    {
        $session_users = session('data_login');
        $users = Login::find($session_users->id);
        if ($users->login_level == 'admin') {
            return redirect()->route('dashboard');
        }
        return view('client.index');
    }

    public function absen()
    {
        return view('client.absen');
    }

    public function kegiatan()
    {
        return view('client.kegiatan');
    }

    public function absen_cam()
    {
        return view('client.cam-absen');
    }

    public function absen_loc()
    {
        return view('client.loc-absen');
    }
}
