@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush
@section('title')
TAMBAH
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="/foreman/pengajuan" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/foreman/pengajuan/create" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal"
                                        value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">nomor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lampiran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lampiran">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Perihal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="perihal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Penerima</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat_penerima">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Kapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kapal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bendera</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bendera">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Isi Kotor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="isi_kotor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Agen Kapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="agen_kapal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Dari</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dari">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tujuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tujuan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cargo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cargo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Muatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="muatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Muatan</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_muatan">
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