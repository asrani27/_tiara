@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
EDIT
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="/superadmin/dokter" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/superadmin/dokter/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama dokter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{$data->nama}}"
                                        required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIK Dokter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" value="{{$data->nik}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jkel</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jkel">
                                        <option value="L" {{$data->jkel == 'L'? 'selected':''}}>Laki Laki</option>
                                        <option value="P" {{$data->jkel == 'P'? 'selected':''}}>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tgl Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_lahir"
                                        value="{{$data->tgl_lahir}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Pemilik</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}"
                                        required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="telp" value="{{$data->telp}}"
                                        required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">poli</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="poli" value="{{$data->poli}}"
                                        required>
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
                                    <button type="submit"
                                        class="btn btn-block btn-primary"><strong>UPDATE</strong></button>
                                </div>
                            </div>
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