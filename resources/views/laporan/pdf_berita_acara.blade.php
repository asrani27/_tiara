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


    <br />
    <table width="100%" cellpadding="5" cellspacing="0">

        <tr>
            <td width="10%">No</td>
            <td>: {{$data->nomor}}</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: {{$data->lampiran}}</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: {{$data->perihal}}</td>
        </tr>
    </table>
    <br />
    <table>
        <tr>
            <td> Dengan Hormat, <br />
                Sesuai dengan peraturan menteri perhubungan nomor PM 152 tahun 2016 tentang
                penyelenggaraan dan pengusahaan bongkar muat dari dan ke kapal. Bersama ini
                kami dari PT Borneo Persada Utama Menyampaikan RKBM barang di pelabuhan / jetty sebagai berikut :
            </td>
        </tr>
    </table>

    <table style="padding-left:120px">
        <tr>
            <td>Nama Kapal</td>
            <td>: {{$data->nama_kapal}}</td>
        </tr>
        <tr>
            <td>Bendera</td>
            <td>: {{$data->bendera}}</td>
        </tr>
        <tr>
            <td>Isi Kotor</td>
            <td>: {{$data->isi_kotor}}</td>
        </tr>
        <tr>
            <td>Dari</td>
            <td>: {{$data->dari}}</td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>: {{$data->tujuan}}</td>
        </tr>
        <tr>
            <td>Cargo</td>
            <td>: {{$data->agen_kapal}}</td>
        </tr>
        <tr>
            <td>Muatan</td>
            <td>: {{$data->muatan}}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>: {{\Carbon\Carbon::parse($data->tanggal)->format('d M Y')}}</td>
        </tr>
        <tr>
            <td>Nomor LHV</td>
            <td>: {{$data->nomor_lhv}}</td>
        </tr>
        <tr>
            <td>Nomor Siupal</td>
            <td>: {{$data->nomor_siupal}}</td>
        </tr>
        <tr>
            <td>Jasa Kapal</td>
            <td>: {{$data->jasa_kapal}}</td>
        </tr>
        <tr>
            <td>Jasa barang</td>
            <td>: {{$data->jasa_barang}}</td>
        </tr>
        <tr>
            <td>Jasa Labuh</td>
            <td>: {{$data->jasa_labuh}}</td>
        </tr>
        <tr>
            <td>Jasa PBM</td>
            <td>: {{$data->jasa_pbm}}</td>
        </tr>
    </table>

    Demikianlah permohonan kami atas bantuan bapak kearah ini sebelumnya kami ucapkan
    terima kasih
    <table width="100%">
        <tr>
            <td width="40%"></td>
            <td></td>
            <td><br />
                Hormat Kami <br />
                PT. BORNEO PERSADA UTAMA<br />
                Pimpinan<br /><br /><br /><br />



                <u>Mutiara</u><br />
                NPM : 23454213
            </td>
        </tr>
    </table>
</body>

</html>