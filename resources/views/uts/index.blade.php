<!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran</title>
</head>

<body bgcolor="#ffffff">

    <h2>Formulir Pendaftaran</h2>

    @if ($errors->any())
        <p style="color:red;">Data belum lengkap!</p>
    @endif

    <form action="{{ route('uts.proses') }}" method="GET">

        <label style="display:inline-block; width:200px;"><b>Nama</b></label> :
        <input type="text" name="nama" value="{{ old('nama') }}" required><br><br>

        <label style="display:inline-block; width:200px;"><b>Tempat Lahir</b></label> :
        <input type="text" name="tempat" value="{{ old('tempat') }}" required><br><br>

        <label style="display:inline-block; width:200px;"><b>Tanggal Lahir</b></label> :
        <input type="number" name="tgl" value="{{ old('tgl') }}" style="width:50px;" required>

        <select name="bulan" required>
            <option>Januari</option>
            <option>Februari</option>
            <option>Maret</option>
            <option>April</option>
            <option>Mei</option>
            <option>Juni</option>
            <option>Juli</option>
            <option>Agustus</option>
            <option>September</option>
            <option>Oktober</option>
            <option>November</option>
            <option>Desember</option>
        </select>

        <input type="number" name="tahun" value="{{ old('tahun') }}" style="width:70px;" required><br><br>

        <label style="display:inline-block; width:200px;"><b>Jenis Kelamin</b></label> :
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>

        <label style="display:inline-block; width:200px;"><b>Alamat</b></label> :
        <input type="text" name="alamat" value="{{ old('alamat') }}" required><br><br>

        <label style="display:inline-block; width:200px;"><b>Sekolah Asal</b></label> :
        <input type="radio" name="sekolah" value="SMA" required> SMA
        <input type="radio" name="sekolah" value="MA"> MA
        <input type="radio" name="sekolah" value="SMK"> SMK
        <br>

        <input type="text" name="namasekolah" value="{{ old('namasekolah') }}" style="margin-left:210px;" required><br><br>

        <b>Nilai UAN : </b><br><br>

        <label style="display:inline-block; width:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matematika</label> :
        <input type="text" name="mtk" value="{{ old('mtk') }}" required><br><br>

        <label style="display:inline-block; width:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahasa Inggris</label> :
        <input type="text" name="bing" value="{{ old('bing') }}" required><br><br>

        <label style="display:inline-block; width:200px;">&nbsp;&nbsp;&nbsp;Bahasa Indonesia</label> :
        <input type="text" name="indo" value="{{ old('indo') }}" required><br><br>

        <b>Jurusan Yang Dipilih : </b><br><br>

        <label style="display:inline-block; width:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&bull; Pilihan 1</label> :
        <select name="pil1" required>
            <option>TEKNIK INFORMATIKA</option>
            <option>SISTEM INFORMASI</option>
            <option>TEKNIK INDUSTRI</option>
            <option>TEKNIK GEOGRAFIS</option>
            <option>TEKNIK SIPIL</option>
        </select><br><br>

        <label style="display:inline-block; width:200px;">&nbsp;&nbsp;&nbsp;&nbsp;&bull; Pilihan 2</label> :
        <select name="pil2" required>
            <option>TEKNIK INFORMATIKA</option>
            <option>TEKNIK INDUSTRI</option>
            <option>SISTEM INFORMASI</option>
            <option>TEKNIK GEOGRAFIS</option>
            <option>TEKNIK SIPIL</option>
        </select><br><br>

        <label style="display:inline-block; width:200px;"><b>Alasan Masuk UNIROW</b></label> :
        <textarea name="alasan" rows="5" cols="30" style="vertical-align:top;" required>{{ old('alasan') }}</textarea><br><br>

        <input type="checkbox" required>
        Dengan ini saya menyatakan bahwa data yang diberikan<br>
        sesuai dengan sebenarnya
        <br><br>

        <div style="margin-left:380px;">
            <input type="submit" value="Daftar">
            <input type="reset" value="Cancel">
        </div>

    </form>

</body>

</html>
