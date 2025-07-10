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
        <a href="/superadmin/pengajuan" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/superadmin/pengajuan/edit/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berdasarkan surat Foreman</label>
                                
                            </div>
                            <!--<div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nomor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor" value="{{$data->nomor}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">lampiran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lampiran" value="{{$data->lampiran}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">alamat_penerima</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat_penerima"
                                        value="{{$data->alamat_penerima}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nama_kapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kapal"
                                        value="{{$data->nama_kapal}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">bendera</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bendera" value="{{$data->bendera}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">isi_kotor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="isi_kotor"
                                        value="{{$data->isi_kotor}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">agen_kapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="agen_kapal"
                                        value="{{$data->agen_kapal}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">dari</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dari" value="{{$data->dari}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tujuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tujuan" value="{{$data->tujuan}}">
                                </div>
                            </div>-->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="diterima" {{$data->status == 'diterima' ?
                                            'selected':''}}>diterima</option>
                                        <option value="ditolak" {{$data->status == 'ditolak' ? 'selected':''}}>ditolak
                                        </option>
                                    </select>
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