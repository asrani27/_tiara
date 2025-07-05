<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerubahanCargo;
use Illuminate\Support\Facades\Auth;

class PerubahanCargoController extends Controller
{


    public function perubahancargo()
    {
        $data = PerubahanCargo::where('foreman_id', Auth::user()->foreman->id)->orderBy('id', 'DESC')->paginate(10);
        return view('foreman.perubahancargo.index', compact('data'));
    }

    public function perubahancargo_create()
    {
        return view('foreman.perubahancargo.create');
    }
    public function perubahancargo_store(Request $req)
    {
        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        PerubahanCargo::create($param);
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/perubahancargo');
    }
    public function perubahancargo_update(Request $req, $id)
    {
        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        PerubahanCargo::find($id)->update($param);
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
