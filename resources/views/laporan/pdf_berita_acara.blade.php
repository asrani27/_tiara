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

    <h3 style="text-align: center"><u>BERITA ACARA</u><br /> NOMOR : </h3><br />
    <table>
        <tr>
            <td>
                {!!$data->detail!!}
            </td>
        </tr>
        <tr style="text-align: justify;" width="50%">
            <td>
                Nama Operator : {!!$data->nama_operator!!}
            </td>
        </tr>
        <br />
        <tr  style="text-align: justify;">
            <td>Kronologis : {!!$data->kronologi!!}</td>
        </tr>
        <br />
        <tr style="text-align: justify;" width="50%">
            <td>Adapun Kerusakan tersebut meliputi : </td>
        </tr>
        <tr>
            <td>
            - {!!$data->kerusakan!!}
            </td>
        </tr>
    </table>
    <br /><br />
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
</body>

</html>