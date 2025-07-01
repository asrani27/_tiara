<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Jadwal;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    public function pasien()
    {
        $dokter = Dokter::get();
        return view('pasien.konsultasi.index', compact('dokter'));
    }
    public function dokter()
    {
        $pasien = Konsultasi::select('pasien_id')->where('dokter_id', Auth::user()->dokter->id)->groupBy('pasien_id')->get();

        return view('dokter.konsultasi.index', compact('pasien'));
    }
    public function jadwal()
    {
        $data = Jadwal::get();
        return view('pasien.jadwal.index', compact('data'));
    }
    public function chat($id)
    {
        $dokter = Dokter::find($id);
        $chat = Konsultasi::where('pasien_id', Auth::user()->pasien->id)->where('dokter_id', $id)->get();
        return view('pasien.konsultasi.chat', compact('dokter', 'id', 'chat'));
    }

    public function chatPasien($pasien_id)
    {
        $dokter = Auth::user()->dokter;
        $chat = Konsultasi::where('pasien_id', $pasien_id)->where('dokter_id', Auth::user()->dokter->id)->get();
        return view('dokter.konsultasi.chat', compact('dokter', 'chat'));
    }
    public function kirimChatKePasien(Request $req, $pasien_id)
    {

        $param['chat_dokter'] = $req->isi;
        $param['pasien_id'] = $pasien_id;
        $param['dokter_id'] = Auth::user()->dokter->id;
        Konsultasi::create($param);
        toastr()->success('Chat dikirim');
        return back();
    }
    public function kirimChat(Request $req, $dokter_id)
    {

        $param['chat_pasien'] = $req->isi;
        $param['pasien_id'] = Auth::user()->pasien->id;
        $param['dokter_id'] = $dokter_id;
        Konsultasi::create($param);
        toastr()->success('Chat dikirim');
        return back();
    }
}
