<?php

namespace App\Http\Controllers;

use App\Models\PerubahanCargo;
use Illuminate\Http\Request;

class PerubahanCargoController extends Controller
{


    public function perubahancargo()
    {
        $data = PerubahanCargo::orderBy('id', 'DESC')->paginate(10);
        return view('foreman.perubahancargo.index', compact('data'));
    }

    public function perubahancargo_create()
    {
        return view('foreman.perubahancargo.create');
    }
    public function perubahancargo_store(Request $req)
    {

        PerubahanCargo::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/perubahancargo');
    }
    public function perubahancargo_update(Request $req, $id)
    {
        PerubahanCargo::find($id)->update($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/perubahancargo');
    }
    public function perubahancargo_edit($id)
    {
        $data = PerubahanCargo::find($id);
        return view('foreman.perubahancargo.edit', compact('data'));
    }
    public function perubahancargo_delete($id)
    {
        PerubahanCargo::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('foreman/perubahancargo');
    }
}
