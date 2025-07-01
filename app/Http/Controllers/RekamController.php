<?php

namespace App\Http\Controllers;

use App\Models\Rekam;
use Illuminate\Http\Request;

class RekamController extends Controller
{

    public function index()
    {
        $data = Rekam::paginate(10);
        return view('dokter.rekam.index', compact('data'));
    }

    public function create()
    {
        return view('dokter.rekam.create');
    }

    public function store(Request $request)
    {
        Rekam::create($request->all());

        toastr()->success('Sukses Di Simpan');
        return redirect('/dokter/rekam');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Rekam::find($id);
        return view('dokter.rekam.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $attr = $request->all();

        Rekam::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/dokter/rekam');
    }

    public function destroy($id)
    {
        Rekam::find($id)->delete();
        toastr()->success('Sukses Di Hapus');
        return back();
    }
}
