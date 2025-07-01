<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{

    public function index()
    {
        $data = Pasien::paginate(10);
        return view('superadmin.pasien.index', compact('data'));
    }

    public function create()
    {
        return view('superadmin.pasien.create');
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

        Pasien::create($attr);

        toastr()->success('Sukses Di Simpan');
        return redirect('/superadmin/pasien');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Pasien::find($id);

        return view('superadmin.pasien.edit', compact('data'));
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
            $filename = Pasien::find($id)->foto;
        } else {
            $extension = $request->foto->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $request->foto->storeAs('/public/', $filename);
        }

        $attr = $request->all();
        $attr['foto'] = $filename;

        Pasien::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/superadmin/pasien');
    }

    public function destroy($id)
    {
        Pasien::find($id)->delete();
        toastr()->success('Sukses Di Hapus');
        return back();
    }

    public function akun($id)
    {
        // $role = Role::where('name', 'user')->first();
        //Create User Peserta
        $pasien = Pasien::find($id);
        $n = new User;
        $n->name = $pasien->nama_pasien;
        $n->username = 'pasien' . $pasien->id;
        $n->password = bcrypt('pasien');
        $n->roles = 'pasien';
        $n->save();

        $pasien->update(['user_id' => $n->id]);

        toastr()->success('Akun sukses di buat, Password : pasien');
        return back();
    }

    public function reset($id)
    {
        $u = Pasien::find($id)->user;
        $u->update([
            'password' => bcrypt('pasien')
        ]);

        toastr()->success('Password direset : pasien');
        return back();
    }
    public function gantipass()
    {
        return view('pasien.gantipass.index');
    }

    public function resetpass(Request $req)
    {

        if ($req->password1 == $req->password2) {
            $u = Auth::user();
            $u->password = bcrypt($req->password1);
            $u->save();
            toastr()->success('Berhasil Di Ubah, Login Dengan Password Baru');
            return redirect('/pasien/gantipass');
        } else {
            toastr()->error('Password Tidak Sama');
            return back();
        }
    }
}
