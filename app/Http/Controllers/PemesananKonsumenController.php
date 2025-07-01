<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Konsumen;
use App\Models\Keranjang;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Models\DetailPemesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PemesananKonsumenController extends Controller
{
    public function index()
    {
        $data = Pemesanan::where('konsumen_id', Auth::user()->konsumen->id)->paginate(10);

        return view('konsumen.pemesanan.index', compact('data'));
    }
    public function create()
    {
        $produk = Produk::get();
        $keranjang = Keranjang::get();
        $konsumen = Konsumen::where('id', Auth::user()->konsumen->id)->get();

        return view('konsumen.pemesanan.create', compact('produk', 'keranjang', 'konsumen'));
    }
    public function deletekeranjang($id)
    {
        Keranjang::find($id)->delete();
        return back();
    }
    public function transaksisimpan(Request $req)
    {
        if ($req->button == 'keranjang') {

            if ($req->produk_id == null || $req->jumlah == null) {
                toastr()->error('produk / Jumlah Belum Di isi');
                $req->flash();
                return back();
            }

            $produk = Produk::find($req->produk_id);
            $checkKeranjang = Keranjang::where('produk_id', $req->produk_id)->first();

            if ($checkKeranjang == null) {
                $s = new Keranjang;
                $s->produk_id       = $req->produk_id;
                $s->harga           = $produk->harga;
                $s->jumlah          = $req->jumlah;
                $s->total           = $produk->harga * $req->jumlah;
                $s->konsumen_id     = Auth::user()->konsumen->id;
                $s->save();
            } else {
                $update = $checkKeranjang;
                $update->jumlah         = $req->jumlah;
                $update->total          = $produk->harga * $req->jumlah;
                $update->save();
            }
            $req->flash();
            return back();
        } else {
            DB::beginTransaction();
            try {
                $keranjang = Keranjang::where('konsumen_id', Auth::user()->konsumen->id)->get();
                if ($keranjang->count() == 0) {
                    toastr()->error('keranjang Pesanan Kosong');
                    $req->flash();
                    return back();
                }
                $n = new Pemesanan();
                $n->tanggal         = $req->tanggal;
                $n->konsumen_id     = $req->konsumen_id;
                $n->save();

                foreach ($keranjang as $item) {
                    $pd = new DetailPemesanan();
                    $pd->pemesanan_id   = $n->id;
                    $pd->produk_id      = $item->produk_id;
                    $pd->harga          = $item->harga;
                    $pd->jumlah         = $item->jumlah;
                    $pd->total          = $item->harga * $item->jumlah;
                    $pd->save();

                    //delete keranjang belanja
                    $item->delete();
                }
                DB::commit();
                toastr()->success('Transaksi Berhasil disimpan');
                return redirect('/konsumen/pemesanan');
                // all good
            } catch (\Exception $e) {

                DB::rollback();
                toastr()->error($e);
                return back();
                // something went wrong
            }
        }
    }
}
