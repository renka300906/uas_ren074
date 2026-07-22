<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
</head>

<body bgcolor="#cec4fc">

    <center>

        <h2>EDIT DATA MAHASISWA</h2>

        @if ($errors->any())
            <ul style="color:red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('uas.data.update') }}" method="POST">
            @csrf

            <table>

                <tr>
                    <td>NPM</td>
                    <td>
                        <strong>{{ $hasil->npm }}</strong>
                        <input type="hidden" name="npm" value="{{ $hasil->npm }}">
                    </td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" value="{{ $hasil->NAMA }}">
                    </td>
                </tr>

                <tr>
                    <td>Angkatan</td>
                    <td>
                        <input type="text" name="angkatan" value="{{ $hasil->ANGKATAN }}">
                    </td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td>
                        <input type="text" name="kelas" value="{{ $hasil->KELAS }}">
                    </td>
                </tr>

                <tr>
                    <td>Jurusan</td>
                    <td>
                        <input type="text" name="jurusan" value="{{ $hasil->JURUSAN }}">
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jenis_kelamin">
                            <option value="Laki-Laki" @selected($hasil->JENIS_KELAMIN == 'Laki-Laki')>Laki-Laki</option>
                            <option value="Perempuan" @selected($hasil->JENIS_KELAMIN == 'Perempuan')>Perempuan</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Ubah">
                        <input type="reset" value="Clear">
                    </td>
                </tr>

            </table>

        </form>

    </center>

</body>

</html>
