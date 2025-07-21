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
        {{-- <a href="/superadmin/foreman/create" class="btn btn-sm bg-gradient-purple"><i class="fas fa-plus"></i>
            Tambah</a>
        <br /><br /> --}}

        <a href="/superadmin/customer/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Customer</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Cutomer</th>
                            <th>Username</th>
                            <th>Instansi</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
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
                            <td>
                                @if ($item->foto == null)
                                <img class="direct-chat-img" src="/theme/dist/img/default-150x150.png"
                                    alt="message user image">
                                @else
                                <a href="/storage/{{$item->foto}}" target="_blank"><img class="direct-chat-img"
                                        src="/storage/{{$item->foto}}" alt="message user image"></a>

                                @endif
                            </td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->user == null ? '' : $item->user->username}}</td>
                            <td>{{$item->instansi}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->telp}}</td>
                            <td>{{$item->email}}</td>
                            <td>

                                {{-- <a href="/superadmin/customer/{{$item->id}}/edit" class="btn btn-xs btn-success"><i
                                        class="fas fa-edit"></i> Edit</a> --}}
                                <a href="/superadmin/customer/{{$item->id}}/delete" class="btn btn-xs btn-danger"
                                    onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i>
                                    delete</a>

                                @if ($item->user == null)
                                <a href="/superadmin/customer/{{$item->id}}/akun" class="btn btn-xs btn-warning"><i
                                        class="fas fa-key"></i> Buat Akun</a>

                                @else
                                <a href="/superadmin/customer/{{$item->id}}/reset" class="btn btn-xs btn-info"><i
                                        class="fas fa-lock"></i> Reset Password</a>

                                @endif
                                @if ($item->view == null)
                                <a href='/superadmin/customer/ok/{{$item->id}}' class="btn btn-xs btn-success"
                                    style="border-radius:20px"><i class="fa fa-check-circle"></i></a>
                                @endif

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