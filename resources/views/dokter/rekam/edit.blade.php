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
        <a href="/dokter/rekam" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali.</a><br /><br />
        <form method="post" action="/dokter/rekam/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nomor rekam</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor" required
                                        value="{{$data->nomor}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nik pasien</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" required value="{{$data->nik}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nama pasien</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required
                                        value="{{$data->nama}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">keluhan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="keluhan" required
                                        value="{{$data->keluhan}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">obat/tindakan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="obat" required
                                        value="{{$data->obat}}">
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