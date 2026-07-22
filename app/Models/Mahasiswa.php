<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'npm';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    // Nama kolom dipertahankan persis seperti pada tabel & query asli
    // (npm, NAMA, ANGKATAN, KELAS, JURUSAN, JENIS_KELAMIN).
    protected $fillable = [
        'npm',
        'NAMA',
        'ANGKATAN',
        'KELAS',
        'JURUSAN',
        'JENIS_KELAMIN',
    ];
}
