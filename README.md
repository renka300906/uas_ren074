# Kedai Makanan — Laravel

Konversi dari project PHP native "RENUHUY" (UAS: Kedai Makanan + CRUD Mahasiswa, UTS: Formulir Pendaftaran) menjadi struktur Laravel 11, **tanpa mengubah tampilan maupun alur fitur aslinya**. Hanya beberapa kesalahan nyata pada kode asli yang diperbaiki (lihat bagian "Perbaikan" di bawah).

## Cara menjalankan

1. `composer install`
2. `cp .env.example .env` lalu sesuaikan `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` (default sudah mengikuti koneksi.php asli: db `rendy`, user `root`, tanpa password).
3. `php artisan key:generate`
4. Buat database `rendy` di MySQL, lalu jalankan migrasi tabel mahasiswa:
   `php artisan migrate`
5. `php artisan serve`

## Peta halaman (URL lama -> route baru)

| PHP asli | Route Laravel |
|---|---|
| `index.php` | `/` |
| `uts/index.php` | `/uts` |
| `uts/proses.php` | `/uts/proses` |
| `uas/Index.php` (frameset) | `/uas` |
| `uas/Header.php` | `/uas/header` |
| `uas/menu.php` | `/uas/menu` |
| `uas/beranda.php` | `/uas/beranda` |
| `uas/daftarproduk.php` | `/uas/daftarproduk` |
| `uas/profil.php` | `/uas/profil` |
| `uas/data/index.php` | `/uas/data` |
| `uas/data/tambah.php` | `/uas/data/tambah` |
| `uas/data/simpan.php` | `POST /uas/data/simpan` |
| `uas/data/edit.php?npm=` | `/uas/data/edit/{npm}` |
| `uas/data/update.php` | `POST /uas/data/update` |
| `uas/data/hapus.php?npm=` | `/uas/data/hapus/{npm}` |

## Perbaikan yang dilakukan (bukan perubahan fitur/tampilan)

1. **SQL Injection** pada `simpan.php`, `update.php`, `edit.php`, `hapus.php`, `index.php` (query mentah `$_GET`/`$_POST` digabung langsung ke SQL) — sekarang memakai Eloquent/parameter binding otomatis dari Laravel.
2. Tag HTML tak tertutup di `Header.php` (`<b>` dan `<font>` dobel tanpa penutup) — dirapikan.
3. Karakter `s` nyasar setelah tag `<tr>` pada baris "Kelas" di `tambah.php` (`<tr>s`) yang membuat HTML cacat — dihapus.
4. Nama file gambar bertumpuk ekstensi (`kedai makanan.jpg.jpg`, `makanan1.jpg.jpg`, dst.) — dirapikan jadi `.jpg` tunggal.
5. Validasi di `proses.php` melewatkan field `bulan` dari pengecekan wajib isi padahal dipakai untuk menyusun tanggal lahir — sekarang ikut divalidasi.
6. File kosong tak terpakai `profil.com` (sisa typo, bukan `.php`) tidak diikutsertakan.

Semua tampilan (termasuk tag lawas seperti `bgcolor`, `<font>`, frameset) sengaja dipertahankan persis seperti aslinya sesuai permintaan.
