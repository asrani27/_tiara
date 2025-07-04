<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $data = Report::orderBy('id', 'DESC')->paginate(10);
        return view('superadmin.report.index', compact('data'));
    }

    public function report_create()
    {
        return view('superadmin.report.create');
    }
    public function report_store(Request $req)
    {

        Report::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('superadmin/report');
    }
    public function report_update(Request $req, $id)
    {
        Report::find($id)->update($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('superadmin/report');
    }
    public function report_edit($id)
    {
        $data = Report::find($id);
        return view('superadmin.report.edit', compact('data'));
    }
    public function report_delete($id)
    {
        Report::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('superadmin/report');
    }
}
