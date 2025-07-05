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
                    width="100px">
            </td>
            <td style="text-align: center;" width="60%">

                <font size="24px"><b>PT BORNEO PERSADA UTAMA
                    </b></font><br />

                Stevedoring Company & Heary Equipment Rental
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA SURAT PENUNJUKAN
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Kapal</th>
            <th>Jumlah Cargo</th>
            <th>Mulai Memuat</th>
            <th>Selesai Memuat</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->nama_kapal}}</td>
            <td>{{$item->jumlah_cargo}}</td>
            <td>{{\Carbon\Carbon::parse($item->mulai_memuat)->format('d-m-Y H:i:s')}}</td>
            <td>{{\Carbon\Carbon::parse($item->selesai_memuat)->format('d-m-Y H:i:s')}}</td>

        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />{{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Foreman<br /><br /><br /><br />

                <u>{{Auth::user()->foreman->nama}}</u><br />

            </td>
        </tr>
    </table>
</body>

</html>