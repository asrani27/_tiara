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
        {{-- <a href="/superadmin/jadwal/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
        <br /><br /> --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data jadwal Saya</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Dokter</th>
                            <th>Ruangan</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Minggu</th>
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
                            <td>{{$item->dokter->nama}}</td>
                            <td>{{$item->ruangan}}</td>
                            <td>{{$item->senin}}</td>
                            <td>{{$item->selasa}}</td>
                            <td>{{$item->rabu}}</td>
                            <td>{{$item->kamis}}</td>
                            <td>{{$item->jumat}}</td>
                            <td>{{$item->sabtu}}</td>
                            <td>{{$item->minggu}}</td>
                            <td>

                                <a href="/dokter/jadwal/{{$item->id}}/edit" class="btn btn-xs btn-success"><i
                                        class="fas fa-edit"></i> Edit</a>

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