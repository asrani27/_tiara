@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

@endpush
@section('title')
Beranda
@endsection
@section('content')
<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-gradient-info">
      <span class="info-box-icon"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Customer</span>
        <span class="info-box-number">{{$customer}}</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-gradient-success">
      <span class="info-box-icon"><i class="fas fa-envelope-square"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Surat Penunjukan</span>
        <span class="info-box-number">{{$produk}}</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-gradient-warning">
      <span class="info-box-icon"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Foreman</span>
        <span class="info-box-number">{{$foreman}}</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box bg-gradient-danger">
      <span class="info-box-icon"><i class="fas fa-clock"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Tanggal</span>
        <span class="info-box-number">{{\Carbon\Carbon::today()->format('d M Y')}}</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>

@endsection

@push('js')

@endpush