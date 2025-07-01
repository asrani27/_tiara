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
  <h2>Hi Dokter {{Auth::user()->dokter->nama}}, SELAMAT DATANG DI APLIKASI SISTEM INFORMASI PELAYANAN KESEHATAN</h2>
  <div class="col-md-6 col-sm-6 col-12">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Pasien Saya</span>
        <span class="info-box-number">0</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-6 col-sm-6 col-12">
    <div class="info-box bg-gradient-success">
      <span class="info-box-icon"><i class="fas fa-user"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Nama Poli</span>
        <span class="info-box-number">{{Auth::user()->dokter->poli}}</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>

@endsection

@push('js')


@endpush