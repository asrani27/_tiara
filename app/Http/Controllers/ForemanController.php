<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Foreman;
use App\Models\Pengajuan;
use App\Models\Penunjukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ForemanController extends Controller
{

    public function index()
    {
        $data = Foreman::paginate(10);
        return view('superadmin.foreman.index', compact('data'));
    }

    public function create()
    {
        return view('superadmin.foreman.create');
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

        Foreman::create($attr);

        toastr()->success('Sukses Di Simpan');
        return redirect('/superadmin/foreman');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Foreman::find($id);

        return view('superadmin.foreman.edit', compact('data'));
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
            $filename = Foreman::find($id)->foto;
        } else {
            $extension = $request->foto->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $request->foto->storeAs('/public/', $filename);
        }

        $attr = $request->all();
        $attr['foto'] = $filename;

        Foreman::find($id)->update($attr);

        toastr()->success('Sukses Di Update');
        return redirect('/superadmin/foreman');
    }

    public function destroy($id)
    {
        Foreman::find($id)->delete();
        toastr()->success('Sukses Di Hapus');
        return back();
    }

    public function akun($id)
    {
        // $role = Role::where('name', 'user')->first();
        //Create User Peserta
        $foreman = Foreman::find($id);
        $n = new User;
        $n->name = $foreman->nama;
        $n->username = 'foreman' . $foreman->id;
        $n->password = bcrypt('foreman');
        $n->roles = 'foreman';
        $n->save();

        $foreman->update(['user_id' => $n->id]);

        toastr()->success('Akun sukses di buat, Password : foreman');
        return back();
    }

    public function reset($id)
    {
        $u = foreman::find($id)->user;
        $u->update([
            'password' => bcrypt('foreman')
        ]);

        toastr()->success('Password direset : foreman');
        return back();
    }

    //PENUNJUKAN
    public function penunjukan()
    {
        $data = Penunjukan::orderBy('id', 'DESC')->where('foreman_id', Auth::user()->foreman->id)->paginate(10);
        return view('foreman.penunjukan.index', compact('data'));
    }
    public function penunjukan_verifikasi($id)
    {
        $data = Penunjukan::find($id);

        return view('foreman.penunjukan.verifikasi', compact('data'));
    }
    public function penunjukan_verifikasi_update(Request $req, $id)
    {
        $data = Penunjukan::find($id)->update([
            'status' => $req->status
        ]);
        toastr()->success('berhasil Di update');
        return redirect('/foreman/penunjukan');
    }
    //SURAT PENGAJUAN
    public function pengajuan()
    {
        $data = Pengajuan::orderBy('id', 'DESC')->paginate(10);
        return view('foreman.pengajuan.index', compact('data'));
    }

    public function pengajuan_create()
    {
        return view('foreman.pengajuan.create');
    }
    public function pengajuan_store(Request $req)
    {

        Pengajuan::create($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/pengajuan');
    }
    public function pengajuan_update(Request $req, $id)
    {
        Pengajuan::find($id)->update($req->all());
        toastr()->success('berhasil Di simpan');
        return redirect('foreman/pengajuan');
    }
    public function pengajuan_edit($id)
    {
        $data = Pengajuan::find($id);
        return view('foreman.pengajuan.edit', compact('data'));
    }
    public function pengajuan_delete($id)
    {
        Pengajuan::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return redirect('foreman/pengajuan');
    }

    //REPORT LOADING
    
}
