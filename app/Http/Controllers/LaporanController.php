<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Toko;
use App\Models\Dokter;
use App\Models\Jadwal;
use App\Models\Pasien;
use App\Models\Produk;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        return view('superadmin.laporan.index');
    }
    public function pilih()
    {
        $jenis = request()->get('jenis');
        if ($jenis == '1') {
            $data = Dokter::get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_dokter', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }

        if ($jenis == '2') {
            $data = Pasien::get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_pasien', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }

        if ($jenis == '3') {
            $data = Stok::get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_stok', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
        if ($jenis == '4') {
            $data = Jadwal::get();
            $pdf = Pdf::loadView('superadmin.laporan.pdf_jadwal', compact('data'))->setPaper('a4', 'landscape');;
            return $pdf->stream();
        }
    }
}
