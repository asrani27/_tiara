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

    <h3 style="text-align: center">
        <u>BERITA ACARA</u> <br/> Nomor : {!!$data->nomor_surat!!}
    </h3> 
        <br />
    <table>
        <tr>
            <td>
                {!!$data->detail!!}
                Nama Operator : {!!$data->nama_operator!!}
            </td>
        </tr><br/>
        <tr  style="text-align: justify;">
            <td>
                {!!$data->kronologi!!}
                Adapun Kerusakan tersebut meliputi : <br/>
                {!!$data->kerusakan!!}
            </td>
        </tr>
    <br/>   
    </table>
    Demikianlah permohonan kami atas bantuan bapak kearah ini sebelumnya kami ucapkan
    terima kasih
    <table width="100%">
        <br /><br />
        <tr>
            <td width="40%"></td>
            <td></td>
            <td><br />
                Bertanda tangan<br /><br /><br /><br />



                <u>{{$data->bertandatangan}}</u><br />
            </td>
        </tr>
    </table>
    </table>
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