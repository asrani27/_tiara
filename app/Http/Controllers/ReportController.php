<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function loading()
    {
        $data = Report::orderBy('id', 'DESC')->paginate(10);
        return view('foreman.loading.index', compact('data'));
    }

    public function loading_create()
    {
        return view('foreman.loading.create');
    }
    public function loading_store(Request $req)
    {

        Report::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/loading');
    }
    public function loading_update(Request $req, $id)
    {
        Report::find($id)->update($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/loading');
    }
    public function loading_edit($id)
    {
        $data = Report::find($id);
        return view('foreman.loading.edit', compact('data'));
    }
    public function loading_delete($id)
    {
        Report::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('foreman/loading');
    }
}
