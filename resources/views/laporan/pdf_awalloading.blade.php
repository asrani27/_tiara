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
    <h3 style="text-align: center">LAPORAN DATA AWAL LOADING
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Kapal</th>
            <th>Pelabuhan Pemuatan</th>
            <th>Pelabuhan Pembuangan</th>
            <th>Deskripsi Barang</th>
            <th>Jumlah Cargo</th>
            <th>Waktu Dihidupkan</th>
            <th>Mulai Memuat</th>
            <th>Selesai Memuat</th>
            <th>Survey Akhir</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->nama_kapal}}</td>
            <td>{{$item->pelabuhan_pemuatan}}</td>
            <td>{{$item->pelabuhan_pembuangan}}</td>
            <td>{{$item->deskripsi_barang}}</td>
            <td>{{$item->jumlah_cargo}}</td>
            <td>{{\Carbon\Carbon::parse($item->waktu_dihidupkan)->format('d-m-Y H:i:s')}}</td>
            <td>{{\Carbon\Carbon::parse($item->mulai_memuat)->format('d-m-Y H:i:s')}}</td>
            <td>{{\Carbon\Carbon::parse($item->selesai_memuat)->format('d-m-Y H:i:s')}}</td>
            <td>{{$item->survei_akhir}}</td>
        </tr>
        @endforeach
    </table>
    <br /> <br />
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