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

        <a href="/foreman/demage/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
        <!--<a href="/foreman/demage/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>-->
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Demage</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Surat</th>
                            <th>Nama Operator</th>
                            <th>Bertanda Tangan</th>
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
                            <td>{{\Carbon\Carbon::parse($item->tanggal_surat)->format('d-m-Y')}}</td>
                            <td>{{$item->nama_operator}}</td>
                            <td>{{$item->bertandatangan}}</td>
                            <td>
                                <a href="/foreman/demage/edit/{{$item->id}}" class="btn btn-xs btn-success">
                                    <i class="fas fa-edit"></i> edit</a>

                                <a href="/foreman/demage/delete/{{$item->id}}" class=" btn btn-xs btn-danger"
                                    onclick="return confirm('yakin Di Hapus?');"><i class="fas fa-trash"></i>
                                    Delete</a>
                                <a href="/foreman/demage/cetak/{{$item->id}}" class="btn btn-xs btn-warning"><i
                                        class="fas fa-print"></i> berita acara</a>

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