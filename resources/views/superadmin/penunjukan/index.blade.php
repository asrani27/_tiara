@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
superadmin
@endsection
@section('content')
<div class="row">
    <div class="col-12">

        <a href="/superadmin/penunjukan/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Surat</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Rencana muatan</th>
                            <th>Pelabuhan Muatan</th>
                            <th>Pelabuhan Tujuan</th>
                            <th>Foreman Yg di tugaskan</th>
                            <th>File</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no =1;
                    @endphp
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:12px; font-family:Arial, Helvetica, sans-serif">
                            <td>{{$data->firstItem() + $key}}</td>
                            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}}</td>
                            <td>{{$item->rencana_muatan}}</td>
                            <td>{{$item->pelabuhan_muatan}}</td>
                            <td>{{$item->pelabuhan_tujuan}}</td>
                            <td>{{$item->foreman == null ? null : $item->foreman->nama}}</td>
                            <td><a href="/storage/{{$item->file}}" target="_blank"><i class="fa fa-download"></i>
                                    Download</a></td>
                            <td>{{$item->status}}</td>
                            <td>

                                <a href="/superadmin/penunjukan/verifikasi/{{$item->id}}"
                                    class="btn btn-xs btn-success"><i class="fas fa-edit"></i> verifikasi</a>

                                <a href="/superadmin/penunjukan/delete/{{$item->id}}" class=" btn btn-xs btn-danger"
                                    onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i>
                                    Delete</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        {{$data->links()}}
    </div>
</div>

@endsection

@push('js')
@endpush