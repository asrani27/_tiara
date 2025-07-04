<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ForemanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\GantiPassController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\JadwalSayaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\ProdukSayaController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\PemesananKonsumenController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SuperadminController;
use PgSql\Lob;

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

        Route::get('/report', [ReportController::class, 'report']);
        Route::get('/report/create', [ReportController::class, 'report_create']);
        Route::post('/report/create', [ReportController::class, 'report_store']);
        Route::get('/report/edit/{id}', [ReportController::class, 'report_edit']);
        Route::get('/report/delete/{id}', [ReportController::class, 'report_delete']);
        Route::post('/report/edit/{id}', [ReportController::class, 'report_update']);

        Route::get('/customer', [SuperadminController::class, 'customer']);
        Route::get('/customer/{id}/reset', [SuperadminController::class, 'customer_reset']);
        Route::get('/customer/{id}/delete', [SuperadminController::class, 'customer_delete']);


        Route::get('penunjukan', [SuperadminController::class, 'penunjukan']);
        Route::get('penunjukan/verifikasi/{id}', [SuperadminController::class, 'penunjukan_verifikasi']);
        Route::post('penunjukan/verifikasi/{id}', [SuperadminController::class, 'penunjukan_verifikasi_update']);
        Route::get('penunjukan/delete/{id}', [SuperadminController::class, 'penunjukan_delete']);

        Route::get('pengajuan', [SuperadminController::class, 'pengajuan']);
        Route::get('pengajuan/create', [SuperadminController::class, 'pengajuan_create']);
        Route::post('pengajuan/create', [SuperadminController::class, 'pengajuan_store']);
        Route::get('pengajuan/edit/{id}', [SuperadminController::class, 'pengajuan_edit']);
        Route::post('pengajuan/edit/{id}', [SuperadminController::class, 'pengajuan_update']);
        Route::get('pengajuan/delete/{id}', [SuperadminController::class, 'pengajuan_delete']);

        Route::get('/user', [UserController::class, 'index']);
        Route::get('/user/add', [UserController::class, 'add']);
        Route::get('/user/edit/{id}', [UserController::class, 'edit']);
        Route::get('/user/delete/{id}', [UserController::class, 'delete']);
        Route::post('/user/add', [UserController::class, 'store']);
        Route::post('/user/edit/{id}', [UserController::class, 'update']);

        Route::get('gantipass', [HomeController::class, 'gantipass']);
        Route::post('gantipass', [HomeController::class, 'resetpass']);

        Route::get('/foreman/{id}/akun', [ForemanController::class, 'akun']);
        Route::get('/foreman/{id}/reset', [ForemanController::class, 'reset']);


        Route::get('laporan', [LaporanController::class, 'index']);

        Route::get('/laporan/pilih', [LaporanController::class, 'pilih']);
        Route::resource('profildinas', ProfilController::class);

        Route::resource('foreman', ForemanController::class);
    });
});


Route::group(['middleware' => ['auth']], function () {
    Route::prefix('foreman')->group(function () {
        Route::get('penunjukan', [ForemanController::class, 'penunjukan']);
        Route::get('penunjukan/verifikasi/{id}', [ForemanController::class, 'penunjukan_verifikasi']);
        Route::post('penunjukan/verifikasi/{id}', [ForemanController::class, 'penunjukan_verifikasi_update']);

        Route::get('pengajuan', [ForemanController::class, 'pengajuan']);
        Route::get('pengajuan/create', [ForemanController::class, 'pengajuan_create']);
        Route::post('pengajuan/create', [ForemanController::class, 'pengajuan_store']);
        Route::get('pengajuan/edit/{id}', [ForemanController::class, 'pengajuan_edit']);
        Route::post('pengajuan/edit/{id}', [ForemanController::class, 'pengajuan_update']);
        Route::get('pengajuan/delete/{id}', [ForemanController::class, 'pengajuan_delete']);

        Route::get('/loading', [ReportController::class, 'loading']);
        Route::get('/loading/create', [ReportController::class, 'loading_create']);
        Route::post('/loading/create', [ReportController::class, 'loading_store']);
        Route::get('/loading/edit/{id}', [ReportController::class, 'loading_edit']);
        Route::get('/loading/delete/{id}', [ReportController::class, 'loading_delete']);
        Route::post('/loading/edit/{id}', [ReportController::class, 'loading_update']);
    });
});
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('customer')->group(function () {

        Route::get('profil', [CustomerController::class, 'profil']);
        Route::post('profil', [CustomerController::class, 'update_profil']);

        Route::get('penunjukan', [CustomerController::class, 'penunjukan']);
        Route::get('penunjukan/create', [CustomerController::class, 'penunjukan_create']);
        Route::post('penunjukan/create', [CustomerController::class, 'penunjukan_store']);
        Route::get('penunjukan/edit/{id}', [CustomerController::class, 'penunjukan_edit']);
        Route::post('penunjukan/edit/{id}', [CustomerController::class, 'penunjukan_update']);
        Route::get('penunjukan/delete/{id}', [CustomerController::class, 'penunjukan_delete']);
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/superadmin/home', [HomeController::class, 'superadmin']);
    Route::get('/foreman/home', [HomeController::class, 'foreman']);
    Route::get('/customer/home', [HomeController::class, 'customer']);
});
