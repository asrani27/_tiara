<?php

namespace App\Http\Controllers;

use App\Models\Complated;
use Illuminate\Http\Request;

class ComplatedController extends Controller
{

    public function complated()
    {
        $data = Complated::orderBy('id', 'DESC')->paginate(10);
        return view('foreman.complated.index', compact('data'));
    }

    public function complated_create()
    {
        return view('foreman.complated.create');
    }
    public function complated_store(Request $req)
    {

        Complated::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/complated');
    }
    public function complated_update(Request $req, $id)
    {
        Complated::find($id)->update($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/complated');
    }
    public function complated_edit($id)
    {
        $data = Complated::find($id);
        return view('foreman.complated.edit', compact('data'));
    }
    public function complated_delete($id)
    {
        Complated::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('foreman/complated');
    }
}
