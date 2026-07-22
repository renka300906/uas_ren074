<!DOCTYPE html>
<html>

<head>
    <title>Hasil Pendaftaran</title>
</head>

<body bgcolor="#ffffff">

    Koneksi Berhasil

    <br>
    <br>

    @php
        function baris($label, $isi)
        {
            echo "<div style='margin-bottom:6px;'>
                    <span style='display:inline-block;width:180px;'>$label</span>
                    : $isi
                  </div>";
        }
    @endphp

    {!! baris('<b>Nama</b>', e($data['nama'])) !!}
    {!! baris('<b>Tempat Lahir</b>', e($data['tempat'])) !!}
    {!! baris('<b>Tanggal Lahir</b>', e($data['tgl']).' '.e($data['bulan']).' '.e($data['tahun'])) !!}
    {!! baris('<b>Jenis Kelamin</b>', e($data['jk'])) !!}
    {!! baris('<b>Alamat</b>', e($data['alamat'])) !!}
    {!! baris('<b>Sekolah Asal</b>', e($data['sekolah']).' '.e($data['namasekolah'])) !!}

    <br>
    {!! baris('<b>Nilai UAN</b>', '') !!}

    {!! baris('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matematika', e($data['mtk'])) !!}
    {!! baris('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahasa Inggris', e($data['bing'])) !!}
    {!! baris('&nbsp;&nbsp;&nbsp;Bahasa Indonesia', e($data['indo'])) !!}

    <br>
    {!! baris('<b>Jurusan Yang Dipilih</b>', '') !!}

    {!! baris('&nbsp;&nbsp;&nbsp;&nbsp;&bull; Pilihan 1', e($data['pil1'])) !!}
    {!! baris('&nbsp;&nbsp;&nbsp;&nbsp;&bull; Pilihan 2', e($data['pil2'])) !!}

    {!! baris('<b>Alasan Masuk UNIROW</b>', e($data['alasan'])) !!}

    <br>

    <table border="1" cellpadding="15" width="560">
        <tr>
            <td>
                {!! baris('<b>TANGGAL DAFTAR</b>', '<b>'.$tanggalDaftar.'</b>') !!}
            </td>
        </tr>
    </table>

</body>

</html>
