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

                <u>Stevedoring Company & Heary Equipment Rental</u>
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <br />
    <table width="100%">
        <tr>
            <td style="text-align: center;" width="60%">

                <font size="20px"><b><u>LAPORAN PERUBAHAN CARGO
                    </b></font></u><br />
                    Tanggal : {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}
                <br /><br />
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Yang Terhormat Bapak/Ibu</td>
        </tr>
        <br />
        <tr>
            <td>Dengan ini Kami memberitahukan laporan perubahan cargo kapal kepada kapal yang bertanggung jawab di Pelabuhan Muat Kaliorang, 
                sebagaimana tercantum di bawah ini:</td>
        </tr>
    </table>
    <br />
    <table style="padding-left:50px">
        <tr>
            <td>Nama Tempat </td>
            <td>: {{$data->nama_tempat}}</td>
        </tr>
        <tr>
            <td>Memuat Oleh</td>
            <td>: {{$data->memuat_oleh}}</td>
        </tr>
        <tr>
            <td>Posisi Akhir</td>
            <td>: {{$data->posisi_akhir}}</td>
        </tr>
        <tr>
            <td>Agent Diatas Kapal </td>
            <td>: {{$data->agent_diataskapal}}</td>
        </tr>
        <tr>
            <td>Draft Muatan</td>
            <td>: {{$data->draft_mt}}</td>
        </tr>
        <tr>
            <td>Uji Coba Selesai</td>
            <td>: {{$data->ujicoba_selesai}}</td>
        </tr>
        <tr>
            <td>Rencana Penyimpanan</td>
            <td>: {{$data->rencana_penyimpanan}}</td>
        </tr>
        <tr>
            <td>Cargo Diatas Kapal</td>
            <td>: {{$data->cargo_diataskapal}}</td>
        </tr>
    </table>
    <br /> <br />
    <br /> <br />
    <br /> <br />
    <br /> <br />
    <br /> <br />
    <br /> <br />
    <br /> <br />
     <hr>
    <table>
        <tr>
            <td style="text-align: center" width="60%">
                <b>H E A D &nbsp;&nbsp;&nbsp; O F F I C E : </b>
            </td>
            <td width="15%">
            </td> 
        </tr> 
    </table>
    <hr>
    <table>
        <tr>
            <td><b>JL. Mulawarman Desa kaliorang Kec.Kaliorang
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
            <td><b>Telp   : +082255550233/0823-5838-1532</b></td>
        </tr>
        <tr>
            <td><b>kab.Kutai Timur, Prov.Kalimantan Timur </b></td>
            <td><b>Fax    : +62.21.4303289</b></td>
        </tr>
        <tr>
            <td><b> </b></td>
            <td><b>E-mail : pt.bpukutim@yahoo.com </b></td>
        </tr>
    </table>
    <hr>
</body>
</html>