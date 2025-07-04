<?php

use App\Models\Foreman;
use App\Models\Pasien;
use App\Models\Penunjukan;
use App\Models\Upload;

function listUpload($pegawai_id, $persyaratan_id)
{
    return Upload::where('pegawai_id', $pegawai_id)->where('persyaratan_id', $persyaratan_id)->get();
}

function listSyarat($persyaratan_id)
{
    $id = json_decode($persyaratan_id);
    return Upload::whereIn('id', $id)->get();
}

function foreman()
{
    return Foreman::get();
}

function penunjukan()
{
    return Penunjukan::get();
}
