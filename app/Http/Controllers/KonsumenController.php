<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KonsumenController extends Controller
{
    public function gantipass()
    {
        return view('konsumen.gantipass.index');
    }

    public function resetpass(Request $req)
    {

        if ($req->password1 == $req->password2) {
            $u = Auth::user();
            $u->password = bcrypt($req->password1);
            $u->save();
            toastr()->success('Berhasil Di Ubah, Login Dengan Password Baru');
            return redirect('/konsumen/gantipass');
        } else {
            toastr()->error('Password Tidak Sama');
            return back();
        }
    }
    public function index()
    {
        $data = Konsumen::paginate(10);
        return view('superadmin.konsumen.index', compact('data'));
    }

    public function create()
    {
        return view('superadmin.konsumen.create');
    }

    public function store(Request $request)
    {
        $attr = $request->all();

        Konsumen::create($attr);

        toastr()->success('Sukses Di Simpan');
        return redirect('/superadmin/konsumen');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Konsumen::find($id);

        return view('superadmin.konsumen.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $attr = $request->all();

        Konsumen::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/superadmin/konsumen');
    }

    public function destroy($id)
    {
        Konsumen::find($id)->delete();
        toastr()->success('Sukses Di Hapus');
        return back();
    }
}
