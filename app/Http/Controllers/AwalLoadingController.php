<?php

namespace App\Http\Controllers;

use App\Models\AwalLoading;
use Illuminate\Http\Request;

class AwalLoadingController extends Controller
{
    public function awalloading()
    {
        $data = AwalLoading::orderBy('id', 'DESC')->paginate(10);
        return view('foreman.awalloading.index', compact('data'));
    }

    public function awalloading_create()
    {
        return view('foreman.awalloading.create');
    }
    public function awalloading_store(Request $req)
    {

        AwalLoading::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/awalloading');
    }
    public function awalloading_update(Request $req, $id)
    {
        AwalLoading::find($id)->update($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/awalloading');
    }
    public function awalloading_edit($id)
    {
        $data = AwalLoading::find($id);
        return view('foreman.awalloading.edit', compact('data'));
    }
    public function awalloading_delete($id)
    {
        AwalLoading::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('foreman/awalloading');
    }
}
