<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Soal;
use App\Models\Stok;
use App\Models\Toko;
use App\Models\Waktu;
use App\Models\Banner;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Produk;
use App\Models\Profil;
use App\Models\Foreman;
use App\Models\Jawaban;
use App\Models\Layanan;
use App\Models\Pegawai;
use App\Models\Peserta;
use App\Models\Customer;
use App\Models\Kategori;
use App\Models\Pengajuan;
use App\Models\BenarSalah;
use App\Models\Penunjukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function foreman()
    {
        return view('foreman.home');
    }

    public function customer()
    {
        return view('customer.home');
    }

    public function superadmin()
    {
        $customer = count(Customer::get());
        $penunjukan = count(Penunjukan::get());
        $foreman = count(Foreman::get());

        return view('superadmin.home', compact('customer', 'penunjukan', 'foreman'));
    }

    public function gantipass()
    {
        return view('superadmin.gantipass.index');
    }

    public function resetpass(Request $req)
    {
        if ($req->password1 == $req->password2) {
            $u = Auth::user();
            $u->password = bcrypt($req->password1);
            $u->save();

            Auth::logout();
            toastr()->success('Berhasil Di Ubah, Login Dengan Password Baru');
            return redirect('/');
        } else {
            toastr()->error('Password Tidak Sama');
            return back();
        }
    }

    public function welcome()
    {
        if (Auth::check()) {
            if (Auth::user()->roles == 'superadmin') {
                return redirect('/superadmin/home');
            }
            if (Auth::user()->roles == 'customer') {
                return redirect('/customer/home');
            }
            if (Auth::user()->roles == 'foreman') {
                return redirect('/foreman/home');
            }
        }
        return view('welcome');
    }
}
