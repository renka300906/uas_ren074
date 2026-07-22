<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Struktur tabel disesuaikan dengan kolom yang dipakai pada
     * uas/data/*.php asli: npm, NAMA, ANGKATAN, KELAS, JURUSAN, JENIS_KELAMIN.
     * Tabel ini sebelumnya harus dibuat manual (tidak ada file SQL/migration
     * pada project asli), sehingga dibuatkan migration di sini.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('npm', 20)->primary();
            $table->string('NAMA', 100);
            $table->string('ANGKATAN', 10);
            $table->string('KELAS', 10);
            $table->string('JURUSAN', 100);
            $table->enum('JENIS_KELAMIN', ['Laki-Laki', 'Perempuan']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
