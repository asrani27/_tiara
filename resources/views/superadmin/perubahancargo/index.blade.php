@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
Foreman
@endsection
@section('content')
<div class="row">
    <div class="col-12">

        <a href="/superadmin/perubahancargo/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Perubahan Cargo</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foreman</th>
                            <th>Dimuat Oleh</th>
                            <th>Agent Diatas Kapal</th>
                            <th>Rencana Penyimpanan</th>
                            <th>Cargo Diatas Kapal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no =1;
                    @endphp
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:12px; font-family:Arial, Helvetica, sans-serif">
                            <td>{{1+ $key}}</td>
                            <td>{{$item->foreman == null ? null : $item->foreman->nama}}</td>
                            <td>{{$item->memuat_oleh}}</td>
                            <td>{{$item->agent_diataskapal}}</td>
                            <td>{{$item->rencana_penyimpanan}}</td>
                            <td>{{$item->cargo_diataskapal}}</td>
                            <td>
                                <a href="/superadmin/perubahancargo/edit/{{$item->id}}"
                                    class="btn btn-xs btn-success"><i class="fas fa-edit"></i> edit</a>

                                <a href="/superadmin/perubahancargo/delete/{{$item->id}}" class=" btn btn-xs btn-danger"
                                    onclick="return confirm('yakin Di Hapus?');"><i class="fas fa-trash"></i>
                                    Delete</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection

@push('js')
@endpush