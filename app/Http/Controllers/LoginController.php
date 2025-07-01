<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\Pasien;
use App\Models\Role;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        if (Auth::attempt(['username' => $req->username, 'password' => $req->password], true)) {
            if (Auth::user()->roles == 'superadmin') {

                return redirect('/superadmin/home');
            } elseif (Auth::user()->roles == 'pasien') {
                return redirect('/pasien/home');
            } else {
                return redirect('/dokter/home');
            }
        } else {
            toastr()->error('Username / Password Tidak Ditemukan');
            $req->flash();
            return back();
        }
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function simpanDaftar(Request $req)
    {

        if (User::where('username', $req->username)->first() == null) {
            $user = new User;
            $user->name = $req->name;
            $user->username = $req->username;
            $user->password = bcrypt($req->password);
            $user->roles = 'pasien';
            $user->save();

            $pasien = new Pasien();
            $pasien->nama = $req->name;
            $pasien->alamat = $req->alamat;
            $pasien->telp = $req->telp;
            $pasien->user_id = $user->id;
            $pasien->save();

            toastr()->success('Berhasil Di Simpan');
            Auth::loginUsingId($user->id);
            return redirect('/pasien/home');
        } else {
            toastr()->error('Username sudah digunakan');
            return back();
        }
    }
}
