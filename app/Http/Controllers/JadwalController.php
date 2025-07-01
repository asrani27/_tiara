<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{

    public function index()
    {
        $data = Jadwal::paginate(10);
        return view('superadmin.jadwal.index', compact('data'));
    }

    public function create()
    {
        $dokter = Dokter::get();
        return view('superadmin.jadwal.create', compact('dokter'));
    }

    public function store(Request $request)
    {
        Jadwal::create($request->all());

        toastr()->success('Sukses Di Simpan');
        return redirect('/superadmin/jadwal');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Jadwal::find($id);

        $dokter = Dokter::get();
        return view('superadmin.jadwal.edit', compact('data', compact('dokter')));
    }

    public function update(Request $request, $id)
    {
        $attr = $request->all();

        Jadwal::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/superadmin/jadwal');
    }

    public function destroy($id)
    {
        Jadwal::find($id)->delete();
        toastr()->success('Sukses Di Hapus');
        return back();
    }
}
