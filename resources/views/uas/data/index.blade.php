<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>

<body style="background-color: #ffffff; text-align: center;">

    <h2>DAFTAR MAHASISWA</h2>

    @if (session('alert'))
        <script>alert(@json(session('alert')));</script>
    @endif

    <a href="{{ route('uas.data.tambah') }}" style="text-decoration: none;">Tambahkan Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" style="margin: 0 auto; border-collapse: collapse;">
        <thead>
            <tr bgcolor="#f88c8c" style="color: white;">
                <th>NPM</th>
                <th>NAMA</th>
                <th>ANGKATAN</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>JENIS KELAMIN</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $hasil)
                <tr>
                    <td>{{ $hasil->npm }}</td>
                    <td>{{ $hasil->NAMA }}</td>
                    <td>{{ $hasil->ANGKATAN }}</td>
                    <td>{{ $hasil->KELAS }}</td>
                    <td>{{ $hasil->JURUSAN }}</td>
                    <td>{{ $hasil->JENIS_KELAMIN }}</td>
                    <td>
                        <a href="{{ route('uas.data.edit', $hasil->npm) }}">Edit</a> |
                        <a href="{{ route('uas.data.hapus', $hasil->npm) }}" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
