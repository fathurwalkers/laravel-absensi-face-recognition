<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class BackController extends Controller
{
    public function index()
    {
        $session_users = session('data_login');
        $users = Login::find($session_users->id);
        if ($users->login_level == 'user') {
            return redirect()->route('client');
        }
        return view('dashboard.index');
    }

    public function data_karyawan()
    {
        return view('dashboard.data-karyawan');
    }

    public function login_admin()
    {
        if (session('data_login') !== null) {
            return redirect()->route('dashboard');
        }
        return view('login-admin');
    }

    public function login_client()
    {
        if (session('data_login') !== null) {
            return redirect()->route('client');
        }
        return view('login-client');
    }

    public function post_login(Request $request)
    {
        $cek_request = $request->cekrequest;
        $username = $request->username;
        $password = $request->password;
        $cari_user = Login::where('login_username', $username)->first();


        if ($cari_user == null) {

            // Alert::error('Error', 'Username atau password salah.')->showConfirmButton()->toToast();
            // return redirect()->route('login-admin');
            return redirect()->route('login-admin')->with('gagal', 'username atau password salah')->withInput();
        }
        switch ($cari_user->login_level) {
            case 'admin':
                // $password = Hash::check('login_password', $cari_user->login_password);
                if ($cek_request == "user") {
                    return redirect()->route('login-client')->with('errors', 'username atau password salah');
                }
                $password = Hash::check($request->password, $cari_user->login_password);
                // dd($password);
                if ($cari_user) {
                    if ($password) {
                        $users = session(['data_login' => $cari_user]);
                        // Alert::question('success', 'Mission failed succesfully.')->showConfirmButton()->toToast();
                        return redirect()->route('dashboard')->with('sukses', 'Selamat Datang Admin');
                    } else {
                        return redirect()->route('login-admin')->with('gagal', 'username atau password salah');
                    }
                }
                break;
            case 'user':
                if ($cek_request == "admin") {

                    return redirect()->route('login-admin')->with('gagal', 'username atau password salah');
                }
                $password = Hash::check($request->password, $cari_user->login_password);
                if ($cari_user) {
                    if ($password) {
                        $users = session(['data_login' => $cari_user]);
                        return redirect()->route('client')->with('status', 'Berhasil Login!');
                    } else {
                        return redirect()->route('login-client')->with('gagal', 'username atau password salah');
                    }
                }
                break;
        }
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        $users = session('data_login');
        $level_users = $users->login_level;
        $request->session()->forget('data_login');
        $request->session()->flush();
        $request->session()->invalidate();

        switch ($level_users) {
            case 'admin':
                return redirect()->route('login-admin')->with('status', 'Anda telah logout!');
                break;
            case 'user':
                return redirect()->route('login-client')->with('status', 'Anda telah logout!');
                break;
        }
    }
}
