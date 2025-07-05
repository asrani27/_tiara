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
        <a href="/foreman/perubahancargo" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/foreman/perubahancargo/edit/{{$data->id}}" enctype="multipart/form-data">
            @csrf
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
                                <label class="col-sm-2 col-form-label">Nama tempat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_tempat"
                                        value={{$data->nama_tempat}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">memuat_oleh</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="memuat_oleh"
                                        value={{$data->memuat_oleh}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">posisi_akhir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="posisi_akhir"
                                        value={{$data->posisi_akhir}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">agent_diataskapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="agent_diataskapal"
                                        value={{$data->agent_diataskapal}}>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">draft_mt</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="draft_mt" value={{$data->draft_mt}}>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ujicoba_selesai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ujicoba_selesai"
                                        value={{$data->ujicoba_selesai}}>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">rencana_penyimpanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="rencana_penyimpanan"
                                        value={{$data->rencana_penyimpanan}}>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">cargo_diataskapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cargo_diataskapal"
                                        value={{$data->cargo_diataskapal}}>
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