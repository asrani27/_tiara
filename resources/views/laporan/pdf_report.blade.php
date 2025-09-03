<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Report Complate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        table {
            border-collapse: collapse;
        }

        .header-table td {
            vertical-align: top;
        }

        .data-table th {
            text-align: left;
            padding-right: 10px;
        }

        .bordered-table {
            border: 1px solid #000;
        }

        .bordered-table th,
        .bordered-table td {
            border: 1px solid #000;
            padding: 5px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <table width="100%" class="header-table">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/logonew.png'))) }}"
                    width="120px">
            </td>
            <td class="center" width="70%">
                <div style="font-size: 22px; font-weight: bold;">PT BORNEO PERSADA UTAMA</div>
                <div style="font-size: 16px;">Stevedoring Company & Heary Equipment Rental</div>
                <div>Jl. Mulawarman Desa Kaliorang Kec. Kaliorang Kab. Kutai Timur, Prov. Kalimantan Timur</div>
                <div>Tepl. +62.21.4303289 - Email: pt.bpukutim@yahoo.com</div>
            </td>
            <td width="15%"></td>
        </tr>
    </table>

    <hr>

    <!-- JUDUL -->
    <table width="100%" class="header-table">
        <tr>
            <td class="center" width="70%">
                <div style="font-size: 18px; font-weight: bold;"><u>LAPORAN DATA REPORT LOADING</u></div>
                <div style="font-size: 16px;">Lembar Waktu / Penyataan Fakta</div>
                <div>Catatan Kerja</div>
            </td>
        </tr>
    </table>
    <br />
    <br />
    <!-- DATA KAPAL -->
    <table class="data-table">
        <tr>
            <th>Nama Perusahaan</th>
            <td>: {{ $awal->perusahaan == null ? "": $awal->perusahaan->nama }}</td>
        </tr>
        <tr>
            <th>Nama Kapal</th>
            <td>: {{ $awal->nama_kapal }}</td>
        </tr>
        <tr>
            <th>Tanggal Perjanjian Sewa</th>
            <td>: {{ \Carbon\Carbon::parse($awal->tanggal_perjanjian_sewa)->format('d-m-Y') }}</td>
        </tr>
        <tr>
            <th>Pelabuhan Pemuatan</th>
            <td>: {{ $awal->pelabuhan_pemuatan }}</td>
        </tr>
        <tr>
            <th>Pelabuhan Bongkar Muat</th>
            <td>: {{ $awal->pelabuhan_pembuangan }}</td>
        </tr>
        <tr>
            <th>Deskripsi Barang</th>
            <td>: {{ $awal->deskripsi_barang }}</td>
        </tr>
        <tr>
            <th>Jumlah Kargo yang Dimuat</th>
            <td>: {{ $awal->jumlah_cargo }}</td>
        </tr>
        <tr>
            <th>Waktu Tiba</th>
            <td>: {{ \Carbon\Carbon::parse($awal->waktu_dihidupkan)->format('d-m-Y H:i:s') }}</td>
        </tr>
        <tr>
            <th>Pemuatan Dimulai</th>
            <td>: {{ \Carbon\Carbon::parse($awal->mulai_memuat)->format('d-m-Y H:i:s') }}</td>
        </tr>
        <tr>
            <th>Pemuatan Selesai</th>
            <td>: {{ \Carbon\Carbon::parse($awal->selesai_memuat)->format('d-m-Y H:i:s') }}</td>
        </tr>
        <tr>
            <th>Survei Draft Akhir Selesai</th>
            <td>: {{ \Carbon\Carbon::parse($awal->survei_akhir)->format('d-m-Y H:i:s') }}</td>
        </tr>
    </table>

    <br>

    <!-- TABEL KEGIATAN -->
    <table width="100%" class="bordered-table">
        <tr>
            <th>Hari/Tanggal</th>
            <th>Waktu Kerja</th>
            <th>Perkataan</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
            <td>{{ $item->waktu }}</td>
            <td>{{ $item->perkataan }}</td>
        </tr>
        @endforeach
    </table>

    <br><br>

    <!-- TANDA TANGAN -->
    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td class="center">
                Sangkulirang, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}<br>
                PT BORNEO PERSADA UTAMA<br><br><br><br><br><br>
                <u>JERRY FIRDAUS</u>
            </td>
        </tr>
    </table>

</body>

</html>