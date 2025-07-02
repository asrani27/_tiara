@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin="" />
<style>
  #mapid {
    height: 500px;
  }
</style>
@endpush
@section('title')
Beranda
@endsection
@section('content')
<div class="row">
  <h2>Hi Dokter {{Auth::user()->foreman->nama}}, SELAMAT DATANG DI APLIKASI BONGKAR MUAT BARANG <BR /> PT BORNEO PERSADA
    UTAMA</H2>

</div>

@endsection

@push('js')


@endpush