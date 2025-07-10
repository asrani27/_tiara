@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
foreman
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="/foreman/penunjukan/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Surat</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Rencana muatan</th>
                            <th>Pelabuhan Muatan</th>
                            <th>Pelabuhan Tujuan</th>
                            <th>Foreman Yg di tugaskan</th>
                            <th>File</th>
                            <th>Status</th>
                            <th></th>
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
                                @if ($item->view == null)
                                <a href='/foreman/penunjukan/ok/{{$item->id}}' class="btn btn-xs btn-success"
                                    style="border-radius:20px"><i class="fa fa-check-circle"></i></a>
                                @endif

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