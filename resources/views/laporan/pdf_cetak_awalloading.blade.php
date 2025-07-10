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

                <font size="20px"><b><u>LAPORAN AWAL LOADING
                    </b></font></u><br />

                Tanggal :  {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br /><br />
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Yang Terhormat Bapak/Ibu</td>
        </tr>
        <br />
        <tr>
            <td>Kami dengan senang hati memberitahukan laporan awal loading kapal kepada kapal yang bertanggung jawab di Pelabuhan Muat Kaliorang, 
                sebagaimana tercantum di bawah ini:</td>
        </tr>
    </table>
    <br />
    <table style="padding-left:50px">
        <tr>
            <td>Nama Kapal</td>
            <td>: {{$data->nama_kapal}}</td>
        </tr>
        <tr>
            <td>Pelabuhan Muatan</td>
            <td>: {{$data->pelabuhan_pemuatan}}</td>
        </tr>
        <tr>
            <td>Pelabuhan Pembuangan</td>
            <td>: {{$data->pelabuhan_pembuangan}}</td>
        </tr>
        <tr>
            <td>Deskripsi Barang</td>
            <td>: {{$data->deskripsi_barang}}</td>
        </tr>
        <tr>
            <td>Jumlah Cargo</td>
            <td>: {{$data->jumlah_cargo}}</td>
        </tr>
        <tr>
            <td>Waktu Dihidupkan</td>
            <td>: {{\Carbon\Carbon::parse($data->waktu_dihidupkan)->format('d M Y H:i:s')}}</td>
        </tr>
        <tr>
            <td>Mulai Memuat</td>
            <td>: {{\Carbon\Carbon::parse($data->mulai_memuat)->format('d M Y H:i:s')}}</td>
        </tr>
        <tr>
            <td>Selesai Memuat</td>
            <td>: {{\Carbon\Carbon::parse($data->selesai_memuat)->format('d M Y H:i:s')}}</td>
        </tr>
        <tr>
            <td>Draft Survey Akhir </td>
            <td>: {{$data->survey_akhir}}</td>
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