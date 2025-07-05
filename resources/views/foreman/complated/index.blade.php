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

        <a href="/foreman/complated/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
<<<<<<< HEAD
        <a href="/foreman/complated/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
=======
>>>>>>> 90ef2df (f)
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Report Complated</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
<<<<<<< HEAD
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
=======
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
>>>>>>> 90ef2df (f)
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tempat</th>
                            <th>Posisi</th>
                            <th>Tanggal Selesai</th>
                            <th>Tanggal Mulai</th>
                            <th>Penyimpanan Sebelum</th>
                            <th>Draf_survei</th>
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
                            <td>{{$item->nama_tempat}}</td>
                            <td>{{$item->posisi}}</td>
                            <td>{{\Carbon\Carbon::parse($item->tanggal_mulai)->format('d-m-Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($item->tanggal_selesai)->format('d-m-Y')}}</td>
                            <td>{{$item->penyimpanan_sebelum}}</td>
                            <td>{{$item->draf_survei}}</td>
                            <td>
                                <a href="/foreman/complated/edit/{{$item->id}}" class="btn btn-xs btn-success"><i
                                        class="fas fa-edit"></i> edit</a>

                                <a href="/foreman/complated/delete/{{$item->id}}" class=" btn btn-xs btn-danger"
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
        {{$data->links()}}
    </div>
</div>

@endsection

@push('js')
@endpush