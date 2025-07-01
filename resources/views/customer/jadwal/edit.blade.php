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
        <a href="/dokter/jadwal" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali.</a><br /><br />
        <form method="post" action="/dokter/jadwal/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Dokter</label>
                                <div class="col-sm-10">
                                    <select name="dokter_id" class="form-control" readonly>
                                        <option value="">-dokter-</option>
                                        @foreach ($dokter as $item)
                                        <option value="{{$item->id}}" {{$data->dokter_id == $item->id ?
                                            'selected':''}}>{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Ruangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ruangan" value="{{$data->ruangan}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">senin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="senin" value="{{$data->senin}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">selasa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="selasa" value="{{$data->selasa}}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">rabu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="rabu" value="{{$data->rabu}}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">kamis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kamis" value="{{$data->kamis}}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">jumat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jumat" value="{{$data->jumat}}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">sabtu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="sabtu" value="{{$data->sabtu}}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">minggu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="minggu" value="{{$data->minggu}}"
                                        required>
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