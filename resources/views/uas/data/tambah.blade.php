<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>

<body bgcolor="#cec4fc">

<center>

<h2>TAMBAH DATA MAHASISWA</h2>

@if (session('alert'))
    <script>alert(@json(session('alert')));</script>
@endif

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('uas.data.simpan') }}" method="POST">
@csrf

<table>

<tr>
    <td>NPM</td>
    <td>
        <input type="text" name="npm" value="{{ old('npm') }}">
    </td>
</tr>

<tr>
    <td>Nama</td>
    <td>
        <input type="text" name="nama" value="{{ old('nama') }}">
    </td>
</tr>

<tr>
    <td>Angkatan</td>
    <td>
        <input type="text" name="angkatan" value="{{ old('angkatan') }}">
    </td>
</tr>

<tr>
    <td>Kelas</td>
    <td>
        <input type="text" name="kelas" value="{{ old('kelas') }}">
    </td>
</tr>

<tr>
    <td>Jurusan</td>
    <td>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}">
    </td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>
        <select name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </td>
</tr>

<tr>
    <td></td>
    <td>
        <input type="submit" value="Simpan">
        <input type="reset" value="Clear">
    </td>
</tr>

</table>

</form>

</center>

</body>
</html>
