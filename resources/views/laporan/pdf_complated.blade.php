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
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Tempat</th>
            <th>Posisi</th>
            <th>Tanggal Selesai</th>
            <th>Tanggal Mulai</th>
            <th>Penyimpanan Sebelum</th>
            <th>Draf Survei</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->nama_tempat}}</td>
            <td>{{$item->posisi}}</td>
            <td>{{\Carbon\Carbon::parse($item->tanggal_mulai)->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item->tanggal_selesai)->format('d-m-Y')}}</td>
            <td>{{$item->penyimpanan_sebelum}}</td>
            <td>{{$item->draf_survei}}</td>
        </tr>
        @endforeach
    </table>
    <br /><br />
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