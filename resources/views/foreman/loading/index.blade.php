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

        <form method="get" action="/foreman/loading/print" enctype="multipart/form-data" target="_blank">
            @csrf
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Laporan</label>
                <div class="col-sm-3">
                    <select class="form-control" name="awalloading_id">
                        @foreach (awalloading() as $item)
                        <option value="{{$item->id}}">{{$item->nama_kapal}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-md bg-gradient-warning"><i class="fas fa-print"></i>
                        Print</button>
                </div>
            </div>
        </form>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Report Loading</h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($id != null)

                    <form method="post" action="/foreman/loading/edit/{{$edit->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="card">
                                    <div class="card-body">


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Awal Loading</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="awalloading_id">
                                                    @foreach (awalloading() as $item)
                                                    <option value="{{$item->id}}" {{$edit->awalloading_id == $item->id ?
                                                        'selected':''}}>{{$item->nama_kapal}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal"
                                                    value="{{$edit->tanggal}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">waktu</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="waktu"
                                                    value="{{$edit->waktu}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">perkataan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="perkataan"
                                                    value="{{$edit->perkataan}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit"
                                                    class="btn btn-block btn-primary"><strong>UPDATE</strong></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @else

                    <form method="post" action="/foreman/loading/create" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Awal Loading</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="awalloading_id">
                                                    @foreach (awalloading() as $item)
                                                    <option value="{{$item->id}}">{{$item->nama_kapal}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
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
                    @endif

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kapal</th>
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
                            <td>{{$item->awalloading == null ? null : $item->awalloading->nama_kapal}}</td>
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