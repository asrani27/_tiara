<?php

namespace App\Http\Controllers;

use App\Models\AwalLoading;
use App\Models\Complated;
use App\Models\Customer;
use App\Models\Demage;
use App\Models\Pengajuan;
use App\Models\Penunjukan;
use App\Models\PerubahanCargo;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminController extends Controller
{
    public function customer()
    {
        $data = Customer::orderBy('id', 'DESC')->paginate(10);
        return view('superadmin.customer.index', compact('data'));
    }
    public function customer_reset($id)
    {
        $u = Customer::find($id)->user;
        $u->update([
            'password' => bcrypt('customer')
        ]);

        toastr()->success('Password direset : customer');
        return back();
    }
    public function customer_delete($id)
    {
        Customer::find($id)->delete();
        toastr()->success('Sukses Di Hapus');
        return back();
    }
    public function penunjukan()
    {
        $data = Penunjukan::orderBy('id', 'DESC')->paginate(10);
        return view('superadmin.penunjukan.index', compact('data'));
    }
    public function penunjukan_verifikasi($id)
    {
        $data = Penunjukan::find($id);
        return view('superadmin.penunjukan.verifikasi', compact('data'));
    }
    public function penunjukan_verifikasi_update(Request $req, $id)
    {
        $data = Penunjukan::find($id)->update([
            'foreman_id' => $req->foreman_id,
            'status' => $req->status
        ]);
        toastr()->success('berhasil Di update');
        return redirect('/superadmin/penunjukan');
    }

    public function pengajuan()
    {
        $data = Pengajuan::orderBy('id', 'DESC')->paginate(10);
        return view('superadmin.pengajuan.index', compact('data'));
    }

    public function pengajuan_create()
    {
        return view('superadmin.pengajuan.create');
    }
    public function pengajuan_store(Request $req)
    {

        Pengajuan::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('superadmin/pengajuan');
    }
    public function pengajuan_update(Request $req, $id)
    {
        Pengajuan::find($id)->update($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('superadmin/pengajuan');
    }
    public function pengajuan_edit($id)
    {
        $data = Pengajuan::find($id);
        return view('superadmin.pengajuan.edit', compact('data'));
    }
    public function pengajuan_delete($id)
    {
        Pengajuan::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('superadmin/pengajuan');
    }
    public function awalloading()
    {
        $data = AwalLoading::orderBy('id', 'DESC')->get();
        return view('superadmin.awalloading.index', compact('data'));
    }
    public function awalloading_delete($id)
    {
        AwalLoading::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return back();
    }
    public function loading()
    {
        $data = Report::orderBy('id', 'DESC')->get();
        return view('superadmin.loading.index', compact('data'));
    }
    public function loading_delete($id)
    {
        Report::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return back();
    }
    public function complated()
    {
        $data = Complated::orderBy('id', 'DESC')->get();
        return view('superadmin.complated.index', compact('data'));
    }
    public function complated_delete($id)
    {
        Complated::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return back();
    }
    public function demage()
    {
        $data = Demage::orderBy('id', 'DESC')->get();
        return view('superadmin.demage.index', compact('data'));
    }
    public function demage_delete($id)
    {
        Demage::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return back();
    }
    public function perubahancargo()
    {
        $data = PerubahanCargo::orderBy('id', 'DESC')->get();
        return view('superadmin.perubahancargo.index', compact('data'));
    }
    public function perubahancargo_delete($id)
    {
        PerubahanCargo::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return back();
    }
}
