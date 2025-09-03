@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('title')
EDIT
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="/customer/penunjukan" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/customer/penunjukan/edit/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="created_at"
                                        value="{{$data->created_at}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Kapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kapal"
                                        value="{{$data->nama_kapal}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Rencana muatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="rencana_muatan"
                                        value="{{$data->rencana_muatan}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">pelabuhan muatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pelabuhan_muatan"
                                        value="{{$data->pelabuhan_muatan}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">file</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis_barang"
                                        value="{{$data->jenis_barang}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Sandar</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_sandar"
                                        value="{{$data->tgl_sandar}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Estimasi Waktu Pengerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="estimasi" value="{{$data->estimasi}}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit"
                                        class="btn btn-block btn-primary"><strong>SIMPAN</strong></button>
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

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>
@endpush