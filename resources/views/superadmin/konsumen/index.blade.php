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
        <a href="/superadmin/konsumen/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Konsumen</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama konsumen</th>
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
                            <td>{{$data->firstItem() + $key}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->telp}}</td>
                            <td>

                                <form action="/superadmin/konsumen/{{$item->id}}" method="post">
                                    <a href="/superadmin/konsumen/{{$item->id}}/edit" class="btn btn-xs btn-success"><i
                                            class="fas fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-xs btn-danger"
                                        onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i>
                                        Delete</button>

                                </form>

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