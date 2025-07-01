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
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/rs.png'))) }}"
                    width="100px">
            </td>
            <td style="text-align: center;" width="60%">

                <font size="24px"><b>RUMAH SAKIT SUAKA INSAN BANJARMASIN
                    </b></font><br />

                Jl. Zafri Zam Zam No.60, Belitung Sel., Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan
                70124
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA JADWAL DOKTER
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Dokter</th>
            <th>Ruangan</th>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
            <th>Sabtu</th>
            <th>Minggu</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->dokter->nama}}</td>
            <td>{{$item->ruangan}}</td>
            <td>{{$item->senin}}</td>
            <td>{{$item->selasa}}</td>
            <td>{{$item->rabu}}</td>
            <td>{{$item->kamis}}</td>
            <td>{{$item->jumat}}</td>
            <td>{{$item->sabtu}}</td>
            <td>{{$item->minggu}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Mengetahui, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                RS Suaka Insan<br /><br /><br /><br />

                <u>-</u><br />

            </td>
        </tr>
    </table>
</body>

</html>