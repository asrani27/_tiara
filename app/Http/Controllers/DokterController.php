<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{

    public function index()
    {
        $data = Dokter::paginate(10);
        return view('superadmin.dokter.index', compact('data'));
    }

    public function create()
    {
        return view('superadmin.dokter.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foto'  => 'mimes:jpg,png,jpeg,bmp|max:5120',
        ]);

        if ($validator->fails()) {
            $request->flash();
            toastr()->error('File harus Gambar dan Maks 5MB');
            return back();
        }

        if ($request->foto == null) {
            $filename = null;
        } else {
            $extension = $request->foto->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $request->foto->storeAs('/public/', $filename);
        }

        $attr = $request->all();
        $attr['foto'] = $filename;
        $attr['lat'] = '-3.320363756863717';
        $attr['long'] = '114.6000705394259';

        Dokter::create($attr);

        toastr()->success('Sukses Di Simpan');
        return redirect('/superadmin/dokter');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Dokter::find($id);

        return view('superadmin.dokter.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'foto'  => 'mimes:jpg,png,jpeg,bmp|max:5120',
        ]);

        if ($validator->fails()) {
            $request->flash();
            toastr()->error('File harus Gambar dan Maks 5MB');
            return back();
        }

        if ($request->foto == null) {
            $filename = Dokter::find($id)->foto;
        } else {
            $extension = $request->foto->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $request->foto->storeAs('/public/', $filename);
        }

        $attr = $request->all();
        $attr['foto'] = $filename;

        Dokter::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/superadmin/dokter');
    }

    public function destroy($id)
    {
        Dokter::find($id)->delete();
        toastr()->success('Sukses Di Hapus');
        return back();
    }

    public function akun($id)
    {
        // $role = Role::where('name', 'user')->first();
        //Create User Peserta
        $dokter = dokter::find($id);
        $n = new User;
        $n->name = $dokter->nama_dokter;
        $n->username = 'dokter' . $dokter->id;
        $n->password = bcrypt('dokter');
        $n->roles = 'dokter';
        $n->save();

        $dokter->update(['user_id' => $n->id]);

        toastr()->success('Akun sukses di buat, Password : dokter');
        return back();
    }

    public function reset($id)
    {
        $u = dokter::find($id)->user;
        $u->update([
            'password' => bcrypt('dokter')
        ]);

        toastr()->success('Password direset : dokter');
        return back();
    }
}
