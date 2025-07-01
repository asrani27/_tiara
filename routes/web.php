<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkpdController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\GantiPassController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JadwalSayaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProdukSayaController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\PemesananKonsumenController;
use App\Http\Controllers\RekamController;

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/tentangkami', [HomeController::class, 'tentang']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/pengrajin', [HomeController::class, 'pengrajin']);
Route::get('/pengrajin/produk/{id}', [HomeController::class, 'produkPengrajin']);
Route::get('/semuaproduk', [HomeController::class, 'semuaproduk']);
Route::get('/kategori/{id}/detail', [HomeController::class, 'kategoriproduk']);
Route::get('/produk/cari', [HomeController::class, 'cariProduk']);
Route::get('/produk/{id}/detail', [HomeController::class, 'detailProduk']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/login', function () {
    if (Auth::check()) {
        if (Auth::user()->roles == 'superadmin') {
            return redirect('/superadmin/home');
        } elseif (Auth::user()->roles == 'pasien') {
            return redirect('/konsumen/home');
        } else {
            return redirect('/dokter/home');
        }
    }
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/daftar', [LoginController::class, 'daftar']);
Route::post('/daftar', [LoginController::class, 'simpanDaftar']);

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('superadmin')->group(function () {
        Route::get('gantipass', [HomeController::class, 'gantipass']);
        Route::post('gantipass', [HomeController::class, 'resetpass']);

        Route::get('/dokter/{id}/akun', [DokterController::class, 'akun']);
        Route::get('/dokter/{id}/reset', [DokterController::class, 'reset']);
        Route::get('/pasien/{id}/akun', [PasienController::class, 'akun']);
        Route::get('/pasien/{id}/reset', [PasienController::class, 'reset']);

        Route::get('laporan', [LaporanController::class, 'index']);

        Route::get('/laporan/pilih', [LaporanController::class, 'pilih']);
        Route::get('pemesanan', [PemesananController::class, 'index']);
        Route::get('pemesanan/create', [PemesananController::class, 'create']);
        Route::get('keranjang/delete/{id}', [PemesananController::class, 'deletekeranjang']);
        Route::post('/pemesanan/create', [PemesananController::class, 'transaksisimpan']);
        Route::resource('konsumen', KonsumenController::class);
        Route::resource('profildinas', ProfilController::class);
        Route::resource('banner', BannerController::class);
        Route::resource('kategori', KategoriController::class);
        Route::resource('dokter', DokterController::class);
        Route::resource('pasien', PasienController::class);
        Route::resource('produk', ProdukController::class);
        Route::resource('jadwal', JadwalController::class);
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('dokter')->group(function () {
        Route::resource('rekam', RekamController::class);
        Route::get('jadwal', [JadwalSayaController::class, 'index']);
        Route::get('jadwal/{id}/edit', [JadwalSayaController::class, 'edit']);
        Route::get('gantipass', [GantiPassController::class, 'gantipassuser']);
        Route::post('gantipass', [GantiPassController::class, 'resetpass']);
        Route::post('profil', [GantiPassController::class, 'profil']);
        Route::get('konsultasi', [KonsultasiController::class, 'dokter']);
        Route::get('konsultasi/chat/{pasien_id}', [KonsultasiController::class, 'chatPasien']);
        Route::post('chat/{pasien_id}', [KonsultasiController::class, 'kirimChatKePasien']);
        Route::resource('produksaya', ProdukSayaController::class);
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('pasien')->group(function () {
        Route::post('chat/{dokter_id}', [KonsultasiController::class, 'kirimChat']);
        Route::get('jadwal', [KonsultasiController::class, 'jadwal']);
        Route::get('konsultasi', [KonsultasiController::class, 'pasien']);
        Route::get('konsultasi/chat/{id}', [KonsultasiController::class, 'chat']);
        Route::get('gantipass', [PasienController::class, 'gantipass']);
        Route::post('gantipass', [PasienController::class, 'resetpass']);

        Route::get('pemesanan', [PemesananKonsumenController::class, 'index']);
        Route::get('pemesanan/create', [PemesananKonsumenController::class, 'create']);
        Route::get('keranjang/delete/{id}', [PemesananKonsumenController::class, 'deletekeranjang']);
        Route::post('/pemesanan/create', [PemesananKonsumenController::class, 'transaksisimpan']);
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/superadmin/home', [HomeController::class, 'superadmin']);
    Route::get('/dokter/home', [HomeController::class, 'dokter']);
    Route::get('/pasien/home', [HomeController::class, 'pasien']);
});
