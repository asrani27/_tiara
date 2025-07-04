<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pengajuan;
use App\Models\Penunjukan;
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
}
