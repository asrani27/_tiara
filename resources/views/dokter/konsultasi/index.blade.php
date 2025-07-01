@extends('layouts.app')

@push('css')

@endpush
@section('title')
RIWAYAT KONSULTASI
@endsection
@section('content')
<br />

<div class="row">
    @foreach ($pasien as $item)

    <div class="col-md-4">
        <!-- Widget: user widget style 2 -->
        <div class="card card-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-primary">
                <table>
                    <tr>
                        <td width="50px;">

                        </td>
                        <td style="text-align: left; padding-left:20px">
                            <h3>Pasien. {{namaPasien($item->pasien_id)->nama}}</h3>
                            <a href="/dokter/konsultasi/chat/{{$item->pasien_id}}" class="btn btn-default">Chat
                                Konsultasi</a>
                        </td>

                    </tr>
                </table>

            </div>
        </div>
        <!-- /.widget-user -->
    </div>
    @endforeach

</div>


@endsection

@push('js')
@endpush