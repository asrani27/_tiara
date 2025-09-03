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
        <a href="/superadmin/penunjukan" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i>
            Kembali</a><br /><br />
        <form method="post" action="/superadmin/penunjukan/verifikasi/{{$data->id}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Kapal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kapal"
                                        value="{{$data->nama_kapal}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Rencana muatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="rencana_muatan"
                                        value="{{$data->rencana_muatan}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">pelabuhan muatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pelabuhan_muatan"
                                        value="{{$data->pelabuhan_muatan}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="">pilih</option>
                                        <option value="diterima">diterima</option>
                                        <option value="diover">diover</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pilih foreman</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="foreman_id" id="foreman" disabled>
                                        <option value="">-pilih-</option>
                                        @foreach (foreman() as $item)
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Perusahaan Over</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="perusahaan_over" id="perusahaan_over"
                                        disabled>
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

<script>
    document.getElementById('status').addEventListener('change', function () {
    let status = this.value;
    let foreman = document.getElementById('foreman');
    let perusahaanOver = document.getElementById('perusahaan_over');

    if (status === 'diterima') {
        foreman.disabled = false;
        perusahaanOver.disabled = true;
        perusahaanOver.value = ''; // reset kalau sebelumnya keisi
    } else if (status === 'diover') {
        foreman.disabled = true;
        foreman.value = ''; // reset kalau sebelumnya keisi
        perusahaanOver.disabled = false;
    } else {
        // kalau pilih kosong reset semua
        foreman.disabled = true;
        foreman.value = '';
        perusahaanOver.disabled = true;
        perusahaanOver.value = '';
    }
});
</script>
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