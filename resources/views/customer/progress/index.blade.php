@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
@section('title')
CUSTOMER
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Progress</h3>
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
                            <th>Nama Kapal</th>
                            <th>Status</th>
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
                            <td>{{$item->awalloading == null ? '' : $item->awalloading->perusahaan->nama}}</td>
                            <td>{{$item->awalloading == null ? $item->nama_kapal : $item->awalloading->nama_kapal}}</td>
                            <td>
                                @if ($item->awalloading == null)
                                Belum Diverifikasi
                                @else
                                <table>
                                    @if ($item->awalloading->status_belumdikerjakan == null)
                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Belum Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->awalloading->status_belumdikerjakan}}</td>

                                    </tr>
                                    @else

                                    <tr style="background-color: rgb(200, 242, 215)">
                                        <td style="padding: 3px"><i class="fa fa-check"></i> Belum Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->awalloading->status_belumdikerjakan}}</td>

                                    </tr>
                                    @endif

                                    @if ($item->awalloading->status_belumdikerjakan == null)
                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Sedang Di Kerjakan</td>
                                        <td style="padding: 3px">: </td>
                                    </tr>
                                    @else
                                    @if ($item->awalloading->status_sedangdikerjakan == null)
                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Sedang Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->awalloading->status_sedangdikerjakan}}</td>

                                    </tr>
                                    @else

                                    <tr style="background-color: rgb(200, 242, 215)">
                                        <td style="padding: 3px"><i class="fa fa-check"></i> Sedang Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->awalloading->status_sedangdikerjakan}}</td>

                                    </tr>
                                    @endif
                                    @endif
                                    @if ($item->awalloading->status_sedangdikerjakan == null)

                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Selesai</td>
                                        <td style="padding: 3px">: </td>
                                    </tr>
                                    @else

                                    @if ($item->awalloading->status_selesai == null)

                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Selesai</td>
                                        <td style="padding: 3px">: {{$item->awalloading->status_selesai}}</td>

                                    </tr>
                                    @else

                                    <tr style="background-color: rgb(200, 242, 215)">
                                        <td style="padding: 3px"><i class="fa fa-check"></i> Selesai</td>
                                        <td style="padding: 3px">: {{$item->awalloading->status_selesai}}</td>

                                    </tr>
                                    @endif
                                    @endif
                                </table>
                                @endif
                            </td>
                            <td>
                                @if ($item->awalloading != null)
                                @if ($item->awalloading->status_belumdikerjakan != null
                                && $item->awalloading->status_sedangdikerjakan != null
                                && $item->awalloading->status_selesai != null)
                                <a href="/customer/progress/report/{{$item->awalloading->id}}"
                                    class="btn btn-danger btn-sm" target="_blank">Report</a>
                                @else

                                @endif
                                @else

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