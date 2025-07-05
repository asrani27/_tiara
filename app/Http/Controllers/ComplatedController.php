<?php

namespace App\Http\Controllers;

use App\Models\Complated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplatedController extends Controller
{

    public function complated()
    {
        $data = Complated::where('foreman_id', Auth::user()->foreman->id)->orderBy('id', 'DESC')->paginate(10);
        return view('foreman.complated.index', compact('data'));
    }

    public function complated_create()
    {
        return view('foreman.complated.create');
    }
    public function complated_store(Request $req)
    {

        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        Complated::create($param);
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/complated');
    }
    public function complated_update(Request $req, $id)
    {
        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        Complated::find($id)->update($param);
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
