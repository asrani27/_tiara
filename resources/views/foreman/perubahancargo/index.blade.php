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

        <a href="/foreman/perubahancargo/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
<<<<<<< HEAD
        <a href="/foreman/perubahancargo/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
=======
>>>>>>> 90ef2df (f)
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Perubahan Cargo</h3>
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
                            <td>{{$data->firstItem() + $key}}</td>
<<<<<<< HEAD
                            <td>{{$item->memuat_oleh}}</td>
=======
                            <td>{{$item->memuat_olah}}</td>
>>>>>>> 90ef2df (f)
                            <td>{{$item->agent_diataskapal}}</td>
                            <td>{{$item->rencana_penyimpanan}}</td>
                            <td>{{$item->cargo_diataskapal}}</td>
                            <td>
                                <a href="/foreman/perubahancargo/edit/{{$item->id}}" class="btn btn-xs btn-success"><i
                                        class="fas fa-edit"></i> edit</a>

                                <a href="/foreman/perubahancargo/delete/{{$item->id}}" class=" btn btn-xs btn-danger"
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