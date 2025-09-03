<?php

use App\Models\Pasien;
use App\Models\Upload;
use App\Models\Foreman;
use App\Models\Customer;
use App\Models\Pengajuan;
use App\Models\Penunjukan;
use App\Models\AwalLoading;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;

function listUpload($pegawai_id, $persyaratan_id)
{
    return Upload::where('pegawai_id', $pegawai_id)->where('persyaratan_id', $persyaratan_id)->get();
}

function listSyarat($persyaratan_id)
{
    $id = json_decode($persyaratan_id);
    return Upload::whereIn('id', $id)->get();
}
function perusahaan()
{
    return Perusahaan::get();
}

function foreman()
{
    return Foreman::get();
}
function awalloading()
{
    return AwalLoading::where('foreman_id', Auth::user()->foreman->id)->get();
}
function notifCustomer()
{
    return Customer::where('view', null)->count();
}
function notifPengajuan()
{
    return Pengajuan::where('status', null)->count();
}
function notifPenunjukan()
{
    return Penunjukan::where('status', null)->count();
}
function notifPenunjukanForeman()
{
    return Penunjukan::where('foreman_id', Auth::user()->foreman->id)->where('view', null)->count();
}
function penunjukan()
{
    return Penunjukan::get();
}
