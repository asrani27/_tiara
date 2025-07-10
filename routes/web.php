<?php

use PgSql\Lob;
use App\Models\AwalLoading;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DemageController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ForemanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ComplatedController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\AwalLoadingController;
use App\Http\Controllers\PerubahanCargoController;

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
        Route::get('/customer/print', [SuperadminController::class, 'customer_print']);
        Route::get('/customer/{id}/reset', [SuperadminController::class, 'customer_reset']);
        Route::get('/customer/{id}/delete', [SuperadminController::class, 'customer_delete']);

        Route::get('awalloading', [SuperadminController::class, 'awalloading']);
        Route::get('awalloading/print', [SuperadminController::class, 'awalloading_print']);
        Route::get('awalloading/delete/{id}', [SuperadminController::class, 'awalloading_delete']);

        Route::get('loading', [SuperadminController::class, 'loading']);
        Route::get('loading/print', [SuperadminController::class, 'loading_print']);
        Route::get('loading/delete/{id}', [SuperadminController::class, 'loading_delete']);

        Route::get('complated', [SuperadminController::class, 'complated']);
        Route::get('complated/print', [SuperadminController::class, 'complated_print']);
        Route::get('complated/delete/{id}', [SuperadminController::class, 'complated_delete']);

        Route::get('demage', [SuperadminController::class, 'demage']);
        Route::get('demage/print', [SuperadminController::class, 'demage_print']);
        Route::get('demage/delete/{id}', [SuperadminController::class, 'demage_delete']);
        Route::get('demage/cetak/{id}', [SuperadminController::class, 'demage_beritaacara']);

        Route::get('perubahancargo', [SuperadminController::class, 'perubahancargo']);
        Route::get('perubahancargo/print', [SuperadminController::class, 'perubahancargo_print']);
        Route::get('perubahancargo/delete/{id}', [SuperadminController::class, 'perubahancargo_delete']);

        Route::get('penunjukan/print', [SuperadminController::class, 'penunjukan_print']);
        Route::get('penunjukan', [SuperadminController::class, 'penunjukan']);
        Route::get('penunjukan/verifikasi/{id}', [SuperadminController::class, 'penunjukan_verifikasi']);
        Route::post('penunjukan/verifikasi/{id}', [SuperadminController::class, 'penunjukan_verifikasi_update']);
        Route::get('penunjukan/delete/{id}', [SuperadminController::class, 'penunjukan_delete']);

        Route::get('pengajuan', [SuperadminController::class, 'pengajuan']);
        Route::get('pengajuan/print', [SuperadminController::class, 'pengajuan_print']);
        Route::get('pengajuan/cetak/{id}', [SuperadminController::class, 'pengajuan_cetak']);
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
        Route::get('/foreman/print', [SuperadminController::class, 'foreman_print']);


        Route::get('laporan', [LaporanController::class, 'index']);

        Route::get('/laporan/pilih', [LaporanController::class, 'pilih']);
        Route::resource('profildinas', ProfilController::class);

        Route::resource('foreman', ForemanController::class);
    });
});


Route::group(['middleware' => ['auth']], function () {
    Route::prefix('foreman')->group(function () {

        //cetak
        Route::get('penunjukan/print', [ForemanController::class, 'print_penunjukan']);
        Route::get('pengajuan/print', [ForemanController::class, 'print_pengajuan']);
        Route::get('awalloading/print', [ForemanController::class, 'print_awalloading']);
        Route::get('report/print', [ForemanController::class, 'print_report']);
        Route::get('complated/print', [ForemanController::class, 'print_complated']);
        Route::get('demage/print', [ForemanController::class, 'print_demage']);
        Route::get('perubahancargo/print', [ForemanController::class, 'print_perubahancargo']);
        //-------------------------------//
        Route::get('penunjukan', [ForemanController::class, 'penunjukan']);
        Route::get('penunjukan/ok/{id}', [ForemanController::class, 'penunjukan_ok']);
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

        Route::get('/awalloading', [AwalLoadingController::class, 'awalloading']);
        Route::get('/awalloading/create', [AwalLoadingController::class, 'awalloading_create']);
        Route::post('/awalloading/create', [AwalLoadingController::class, 'awalloading_store']);
        Route::get('/awalloading/edit/{id}', [AwalLoadingController::class, 'awalloading_edit']);
        Route::get('/awalloading/delete/{id}', [AwalLoadingController::class, 'awalloading_delete']);
        Route::post('/awalloading/edit/{id}', [AwalLoadingController::class, 'awalloading_update']);

        Route::get('/complated', [ComplatedController::class, 'complated']);
        Route::get('/complated/create', [ComplatedController::class, 'complated_create']);
        Route::post('/complated/create', [ComplatedController::class, 'complated_store']);
        Route::get('/complated/edit/{id}', [ComplatedController::class, 'complated_edit']);
        Route::get('/complated/delete/{id}', [ComplatedController::class, 'complated_delete']);
        Route::post('/complated/edit/{id}', [ComplatedController::class, 'complated_update']);

        Route::get('/demage', [DemageController::class, 'demage']);
        Route::get('/demage/create', [DemageController::class, 'demage_create']);
        Route::post('/demage/create', [DemageController::class, 'demage_store']);
        Route::get('/demage/edit/{id}', [DemageController::class, 'demage_edit']);
        Route::get('/demage/delete/{id}', [DemageController::class, 'demage_delete']);
        Route::post('/demage/edit/{id}', [DemageController::class, 'demage_update']);
        Route::get('demage/cetak/{id}', [DemageController::class, 'demage_beritaacara']);

        Route::get('/perubahancargo', [PerubahanCargoController::class, 'perubahancargo']);
        Route::get('/perubahancargo/create', [PerubahanCargoController::class, 'perubahancargo_create']);
        Route::post('/perubahancargo/create', [PerubahanCargoController::class, 'perubahancargo_store']);
        Route::get('/perubahancargo/edit/{id}', [PerubahanCargoController::class, 'perubahancargo_edit']);
        Route::get('/perubahancargo/delete/{id}', [PerubahanCargoController::class, 'perubahancargo_delete']);
        Route::post('/perubahancargo/edit/{id}', [PerubahanCargoController::class, 'perubahancargo_update']);
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
