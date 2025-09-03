<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AwalLoading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    public function progress()
    {
        $data = AwalLoading::where('foreman_id', Auth::user()->foreman->id)->orderBy('id', 'DESC')->paginate(10);
        return view('foreman.progress.index', compact('data'));
    }

    public function batalstatus1($id)
    {
        $data = AwalLoading::find($id);
        $data->status_belumdikerjakan = null;
        $data->status_sedangdikerjakan = null;
        $data->status_selesai = null;
        $data->save();
        toastr()->success('Berhasil diupdate');
        return back();
    }
    public function checkstatus1($id)
    {
        $data = AwalLoading::find($id);
        $data->status_belumdikerjakan = Carbon::now();
        $data->save();
        toastr()->success('Berhasil diupdate');
        return back();
    }
    public function batalstatus2($id)
    {
        $data = AwalLoading::find($id);
        $data->status_sedangdikerjakan = null;
        $data->status_selesai = null;
        $data->save();
        toastr()->success('Berhasil diupdate');
        return back();
    }
    public function checkstatus2($id)
    {
        $data = AwalLoading::find($id);
        $data->status_sedangdikerjakan = Carbon::now();
        $data->save();
        toastr()->success('Berhasil diupdate');
        return back();
    }
    public function batalstatus3($id)
    {
        $data = AwalLoading::find($id);
        $data->status_selesai = null;
        $data->save();
        toastr()->success('Berhasil diupdate');
        return back();
    }
    public function checkstatus3($id)
    {
        $data = AwalLoading::find($id);
        $data->status_selesai = Carbon::now();
        $data->save();
        toastr()->success('Berhasil diupdate');
        return back();
    }
}
