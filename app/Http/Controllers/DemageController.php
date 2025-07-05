<?php

namespace App\Http\Controllers;

use App\Models\Demage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemageController extends Controller
{

    public function demage()
    {
        $data = Demage::where('foreman_id', Auth::user()->foreman->id)->orderBy('id', 'DESC')->paginate(10);
        return view('foreman.demage.index', compact('data'));
    }

    public function demage_create()
    {
        return view('foreman.demage.create');
    }
    public function demage_store(Request $req)
    {

        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        Demage::create($param);
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/demage');
    }
    public function demage_update(Request $req, $id)
    {
        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        Demage::find($id)->update($param);
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/demage');
    }
    public function demage_edit($id)
    {
        $data = Demage::find($id);
        return view('foreman.demage.edit', compact('data'));
    }
    public function demage_delete($id)
    {
        Demage::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('foreman/demage');
    }
}
