<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function loading()
    {
        $data = Report::where('foreman_id', Auth::user()->foreman->id)->orderBy('id', 'DESC')->paginate(10);
        $id = null;
        return view('foreman.loading.index', compact('data', 'id'));
    }

    public function loading_create()
    {
        return view('foreman.loading.create');
    }
    public function loading_store(Request $req)
    {

        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        Report::create($param);
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/loading');
    }
    public function loading_update(Request $req, $id)
    {
        $param = $req->all();
        $param['foreman_id'] = Auth::user()->foreman->id;
        Report::find($id)->update($param);
    toastr()->success('berhasil Di update');
        return redirect('foreman/loading');
    }
    public function loading_edit($id)
    {
        $edit = Report::find($id);
        $data = Report::where('foreman_id', Auth::user()->foreman->id)->orderBy('id', 'DESC')->paginate(10);
        return view('foreman.loading.index', compact('data', 'id', 'edit'));
    }
    public function loading_delete($id)
    {
        Report::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('foreman/loading');
    }
}
