@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
ADMIN
@endsection
@section('content')
<div class="row">
    <div class="col-12">

        <a href="/superadmin/perusahaan/add" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data perusahaan</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no =1;
                    @endphp
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:12px; font-family:Arial, Helvetica, sans-serif">
                            <td>{{1 + $key}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->telp}}</td>
                            <td>
                                <a href="/superadmin/perusahaan/edit/{{$item->id}}" class="btn btn-xs btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/perusahaan/delete/{{$item->id}}" class="btn btn-xs btn-danger"
                                    onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i></a>
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