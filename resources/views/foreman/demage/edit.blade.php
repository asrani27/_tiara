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
        <a href="/foreman/demage" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/foreman/demage/edit/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tanggal surat</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_surat"
                                        value="{{$data->tanggal_surat}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor_surat"
                                        value="{{$data->nomor_surat}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">detail</label>
                                <div class="col-sm-10">
                                    <textarea id="summernote" name="detail">{!!$data->detail!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama operator</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_operator"
                                        value="{{$data->nama_operator}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">kronologi</label>
                                <div class="col-sm-10">
                                    <textarea id="summernote" name="kronologi">{!!$data->kronologi!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">kerusakan</label>
                                <div class="col-sm-10">
                                    <textarea id="summernote" name="kerusakan">{!!$data->kerusakan!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">bertandatangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bertandatangan"
                                        value="{{$data->bertandatangan}}">
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