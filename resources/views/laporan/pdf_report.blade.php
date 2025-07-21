<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/logonew.png'))) }}"
                    width="150px">
            </td>
            <td style="text-align: center;" width="60%">

                <font size="24px"><b>PT BORNEO PERSADA UTAMA
                    </b></font><br />

                <font size="20px">Stevedoring Company & Heary Equipment Rental<br /></font>

                Jl. Mulawarman Desa Kaliorang Kec.Kaliorang Kab.Kutai Timur, Prov.Kalimatan Timur<br />
                Tepl. +62.21.4303289 - Email: pt.bpukutim@yahoo.com
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA REPORT COMPLATED
    </h3>
    <table>
        <tr>
            <th style="text-align:left">Nama Kapal</th>
            <td>: {{ $awal->nama_kapal }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Tanggal Perjanjian Sewa</th>
            <td>: {{ \Carbon\Carbon::parse($awal->tanggal_perjanjian_sewa)->format('d-m-Y') }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Pelabuhan Pemuatan</th>
            <td>: {{ $awal->pelabuhan_pemuatan }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Pelabuhan Bongkar Muat</th>
            <td>: {{ $awal->pelabuhan_pembuangan }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Deskripsi Barang</th>
            <td>: {{ $awal->deskripsi_barang }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Jumlah Kargo yang Dimuat</th>
            <td>: {{ $awal->jumlah_cargo }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Waktu Tiba</th>
            <td>: {{ \Carbon\Carbon::parse($awal->waktu_dihidupkan)->format('d-m-Y H:i:s') }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Pemuatan Dimulai</th>
            <td>: {{ \Carbon\Carbon::parse($awal->mulai_memuat)->format('d-m-Y H:i:s') }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Pemuatan Selesai</th>
            <td>: {{ \Carbon\Carbon::parse($awal->selesai_memuat)->format('d-m-Y H:i:s') }}</td>
        </tr>
        <tr>
            <th style="text-align:left">Survei Draft Akhir Selesai</th>
            <td>: {{ \Carbon\Carbon::parse($awal->survei_akhir)->format('d-m-Y H:i:s') }}</td>
        </tr>
    </table>

    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Hari/Tanggal</th>
            <th>Waktu Kerja</th>
            <th>Perkataan</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}}</td>
            <td>{{$item->waktu}}</td>
            <td>{{$item->perkataan}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />
                Sangkulirang, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                PT BORNEO PERSADA UTAMA<br /><br /><br /><br />

                <u>JERRY FIRDAUS</u>

            </td>
        </tr>
    </table>
</body>

</html>