<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data = User::all();
        return view('superadmin.user.index', compact('data'));
    }

    public function add()
    {
        return view('superadmin.user.create');
    }

    public function store(Request $req)
    {
        $check = User::where('username', $req->username)->first();
        if ($check != null) {
            toastr()->error('username sudah di gunakan');
            return back();
        } else {
            $s = new User;
            $s->name = $req->name;
            $s->username = $req->username;
            $s->password = Hash::make($req->password);
            $s->roles = $req->roles;

            $s->save();
            toastr()->success('Berhasil disimpan');
            return redirect('/superadmin/user');
        }
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('superadmin.user.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        if ($req->password == null) {
            $s = User::find($id);
            $s->name = $req->name;
            $s->username = $req->username;
            $s->roles = $req->roles;
            $s->save();
            toastr()->success('Berhasil diupdate');
        } else {
            $s = User::find($id);
            $s->name = $req->name;
            $s->username = $req->username;
            $s->password = Hash::make($req->password);
            $s->roles = $req->roles;
            $s->save();
            toastr()->success('Berhasil diupdate');
        }
        return redirect('/superadmin/user');
    }

    public function delete($id)
    {
        $delete = User::find($id)->delete();
        toastr()->success('Berhasil dihapus');
        return redirect('/superadmin/user');
    }
}
