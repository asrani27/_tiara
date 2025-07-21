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
        
        <a href="/foreman/loading/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Report Loading</h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="row">
    <div class="col-12">
        <form method="post" action="/foreman/loading/create" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal"
                                        value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">waktu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="waktu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">perkataan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="perkataan">
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
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari/Tanggal</th>
                            <th>Waktu Kerja</th>
                            <th>Perkataan</th>
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
                            <td>{{$item->waktu}}</td>
                            <td>{{$item->perkataan}}</td>

                            <td>

                                <a href="/foreman/loading/edit/{{$item->id}}" class="btn btn-xs btn-success"><i
                                        class="fas fa-edit"></i> edit</a>

                                <a href="/foreman/loading/delete/{{$item->id}}" class=" btn btn-xs btn-danger"
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