<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
            } elseif (Auth::user()->roles == 'customer') {
                return redirect('/customer/home');
            } else {
                return redirect('/foreman/home');
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
        if ($req->password != $req->confirm_password) {
            toastr()->error('Password tidak sama');
            return back();
        }
        if (User::where('username', $req->username)->first() == null) {
            $user = new User;
            $user->name = $req->name;
            $user->username = $req->username;
            $user->password = bcrypt($req->password);
            $user->roles = 'customer';
            $user->save();

            $cus = new Customer();
            $cus->nama = $req->name;
            $cus->alamat = $req->alamat;
            $cus->telp = $req->telp;
            $cus->user_id = $user->id;
            $cus->save();

            toastr()->success('Berhasil Di Simpan');
            Auth::loginUsingId($user->id);
            return redirect('/customer/home');
        } else {
            toastr()->error('Username sudah digunakan');
            return back();
        }
    }
}
