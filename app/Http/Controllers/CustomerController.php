<?php

namespace App\Http\Controllers;

use App\Models\Penunjukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function profil()
    {
        $data = Auth::user()->customer;
        return view('customer.profil', compact('data'));
    }

    public function update_profil(Request $req)
    {
        if ($req->foto == null) {
            $filename = null;
        } else {
            $extension = $req->foto->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $req->foto->storeAs('/public/', $filename);
        }
        $param = $req->all();
        $param['foto'] = $filename;

        $data = Auth::user()->customer;
        $data->update($param);
        toastr()->success('Sukses Di update');
        return back();
    }

    public function penunjukan()
    {
        $data = Penunjukan::where('user_id', Auth::user()->id)->paginate(10);
        return view('customer.penunjukan.index', compact('data'));
    }
    public function penunjukan_create()
    {
        return view('customer.penunjukan.create');
    }
    public function penunjukan_store(Request $req)
    {
        if ($req->file == null) {
            $filename = null;
        } else {
            $extension = $req->file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $req->file->storeAs('/public/', $filename);
        }

        $param = $req->all();
        $param['file'] = $filename;
        $param['user_id'] = Auth::user()->id;
        Penunjukan::create($param);
        toastr()->success('berhasil Di simpan');
        return redirect('/customer/penunjukan');
    }
    public function penunjukan_edit($id)
    {
        $data = Penunjukan::find($id);
        return view('customer.penunjukan.edit', compact('data'));
    }
    public function penunjukan_update(Request $req, $id)
    {
        if ($req->file == null) {
            $filename = Penunjukan::find($id)->file;
        } else {
            $extension = $req->file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $req->file->storeAs('/public/', $filename);
        }

        $param = $req->all();
        $param['file'] = $filename;
        $param['user_id'] = Auth::user()->id;
        Penunjukan::find($id)->update($param);
        toastr()->success('berhasil Di update');
        return redirect('/customer/penunjukan');
    }
    public function penunjukan_delete($id)
    {
        Penunjukan::find($id)->delete();
        toastr()->success('berhasil Di Hapu');
        return back();
    }
}
