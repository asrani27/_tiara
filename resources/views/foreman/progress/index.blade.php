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

        <!--<a href="/foreman/awalloading/print" class="btn btn-sm bg-gradient-warning"><i class="fas fa-print"></i>
            Print</a>-->
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Tracking Progress Pekerjaan</h3>
                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama perusahaan</th>
                            <th>Nama Kapal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @php
                    $no =1;
                    @endphp
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:12px; font-family:Arial, Helvetica, sans-serif">
                            <td>{{$data->firstItem() + $key}}</td>
                            <td>{{$item->perusahaan == null ? '': $item->perusahaan->nama}}</td>
                            <td>{{$item->nama_kapal}}</td>
                            <td>
                                <table>
                                    @if ($item->status_belumdikerjakan == null)
                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Belum Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->status_belumdikerjakan}}</td>
                                        <td style="padding: 3px">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="/foreman/progress/{{$item->id}}/checkstatus1" class="text-green"><i
                                                    class="fa fa-check"></i></a>
                                        </td>
                                    </tr>
                                    @else

                                    <tr style="background-color: rgb(200, 242, 215)">
                                        <td style="padding: 3px"><i class="fa fa-check"></i> Belum Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->status_belumdikerjakan}}</td>
                                        <td style="padding: 3px">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="/foreman/progress/{{$item->id}}/batalstatus1" class="text-red"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    @endif

                                    @if ($item->status_belumdikerjakan == null)
                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Sedang Di Kerjakan</td>
                                        <td style="padding: 3px">: </td>
                                    </tr>
                                    @else
                                    @if ($item->status_sedangdikerjakan == null)
                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Sedang Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->status_sedangdikerjakan}}</td>
                                        <td style="padding: 3px">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="/foreman/progress/{{$item->id}}/checkstatus2" class="text-green"><i
                                                    class="fa fa-check"></i></a>
                                        </td>
                                    </tr>
                                    @else

                                    <tr style="background-color: rgb(200, 242, 215)">
                                        <td style="padding: 3px"><i class="fa fa-check"></i> Sedang Di Kerjakan</td>
                                        <td style="padding: 3px">: {{$item->status_sedangdikerjakan}}</td>
                                        <td style="padding: 3px">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="/foreman/progress/{{$item->id}}/batalstatus2" class="text-red"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                    @if ($item->status_sedangdikerjakan == null)

                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Selesai</td>
                                        <td style="padding: 3px">: </td>
                                    </tr>
                                    @else

                                    @if ($item->status_selesai == null)

                                    <tr style="background-color: rgb(242, 215, 200)">
                                        <td style="padding: 3px"><i class="fa fa-hourglass"></i> Selesai</td>
                                        <td style="padding: 3px">: {{$item->status_selesai}}</td>
                                        <td style="padding: 3px">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="/foreman/progress/{{$item->id}}/checkstatus3" class="text-green"><i
                                                    class="fa fa-check"></i></a>
                                        </td>
                                    </tr>
                                    @else

                                    <tr style="background-color: rgb(200, 242, 215)">
                                        <td style="padding: 3px"><i class="fa fa-check"></i> Selesai</td>
                                        <td style="padding: 3px">: {{$item->status_selesai}}</td>
                                        <td style="padding: 3px">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="/foreman/progress/{{$item->id}}/batalstatus3" class="text-red"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                </table>
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