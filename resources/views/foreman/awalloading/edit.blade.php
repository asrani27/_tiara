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
        <a href="/foreman/awalloading" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/foreman/awalloading/edit/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Kapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kapal" value="{{$data->nama_kapal}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pelabuhan Muatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pelabuhan_muatan" value="{{$data->pelabuhan_muatan}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pelabuhan Pembuangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pelabuhan_pembuangan" value="{{$data->pelabhuan_pembuangan}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deskripsi_barang" value="{{$data->deskripsi_barang}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah Cargo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jumlah_cargo" value="{{$data->jumlah_cargo}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Waktu Dihidupkan</label>
                                <div class="col-sm-10">
                                    <input type="datetime" class="form-control" name="waktu_dihidupkan" value="{{$data->waktu_dihidupkan}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mulai Memuat</label>
                                <div class="col-sm-10">
                                    <input type="datetime" class="form-control" name="mulai_memuat" value="{{$data->mulai_memuat}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Selesai Memuat</label>
                                <div class="col-sm-10">
                                    <input type="datetime" class="form-control" name="selesai_memuat" value="{{$data->selasi_memuar}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Survei Akhir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="survei_akhir" value="{{$data->survei_akhir}}">
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