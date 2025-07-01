<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalSayaController extends Controller
{
    public function index()
    {
        $data = Jadwal::where('dokter_id', Auth::user()->dokter->id)->paginate(10);
        return view('dokter.jadwal.index', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $attr = $request->all();

        Jadwal::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/dokter/jadwal');
    }
    public function edit($id)
    {
        $data = Jadwal::find($id);

        $dokter = Dokter::get();
        return view('dokter.jadwal.edit', compact('data', 'dokter'));
    }
}
