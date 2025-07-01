@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
PROFIL
@endsection
@section('content')
<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">

                    @if ($data->foto == null)
                    <img class="profile-user-img img-fluid img-circle" src="/theme/dist/img/user4-128x128.jpg"
                        alt="User profile picture">
                    @else
                    <img class="profile-user-img img-fluid img-circle" src="/storage/{{$data->foto}}"
                        alt="User profile picture">
                    @endif
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->customer->nama}}</h3>

                <p class="text-muted text-center">Customer</p>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>
    <div class="col-md-9">
        <form method="post" action="/customer/profil" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Instansi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="instansi" value="{{$data->instansi}}"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Instansi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telp Instansi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telp" value="{{$data->telp}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email Instansi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" value="{{$data->email}}" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-block btn-primary"><strong>UPDATE</strong></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@push('js')

@endpush