<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{

    public function index()
    {
        $data = Perusahaan::all();
        return view('superadmin.perusahaan.index', compact('data'));
    }

    public function add()
    {
        return view('superadmin.perusahaan.create');
    }

    public function store(Request $req)
    {
        $check = Perusahaan::where('nama', $req->nama)->first();
        if ($check != null) {
            toastr()->error('nama perusahaan sudah di gunakan');
            return back();
        } else {
            $s = new Perusahaan;
            $s->nama = $req->nama;
            $s->alamat = $req->alamat;
            $s->telp = $req->telp;
            $s->save();
            toastr()->success('Berhasil disimpan');
            return redirect('/superadmin/perusahaan');
        }
    }

    public function edit($id)
    {
        $data = Perusahaan::find($id);
        return view('superadmin.perusahaan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Perusahaan::find($id);
        $s->nama = $req->nama;
        $s->alamat = $req->alamat;
        $s->telp = $req->telp;
        $s->save();
        toastr()->success('Berhasil diupdate');

        return redirect('/superadmin/perusahaan');
    }

    public function delete($id)
    {
        $delete = Perusahaan::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return redirect('/superadmin/perusahaan');
    }
}
