<?php

namespace App\Http\Controllers;

use App\Models\Demage;
use Illuminate\Http\Request;

class DemageController extends Controller
{
  
    public function demage()
    {
        $data = Demage::orderBy('id', 'DESC')->paginate(10);
        return view('foreman.demage.index', compact('data'));
    }

    public function demage_create()
    {
        return view('foreman.demage.create');
    }
    public function demage_store(Request $req)
    {

        Demage::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/demage');
    }
    public function demage_update(Request $req, $id)
    {
        Demage::find($id)->update($req->all());
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
