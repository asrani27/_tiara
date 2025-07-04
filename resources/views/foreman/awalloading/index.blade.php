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

        <a href="/foreman/awalloading/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
        <a href="/foreman/awalloading/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Report Loading</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kapal</th>
                            <th>Jumlah Cargo</th>
                            <th>Mulai Memuat</th>
                            <th>Selesai Memuat</th>
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
                            <td>{{$item->nama_kapal}}</td>
                            <td>{{$item->jumlah_cargo}}</td>
                            <td>{{\Carbon\Carbon::parse($item->mulai_memuat)->format('d-m-Y H:i:s')}}</td>
                            <td>{{\Carbon\Carbon::parse($item->selesai_memuat)->format('d-m-Y H:i:s')}}</td>
                            <td>
                                <a href="/foreman/awalloading/edit/{{$item->id}}" class="btn btn-xs btn-success"><i
                                        class="fas fa-edit"></i> edit</a>

                                <a href="/foreman/awalloading/delete/{{$item->id}}" class=" btn btn-xs btn-danger"
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