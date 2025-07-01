<?php

namespace App\Http\Controllers;

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
}
