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
}
