<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtsController extends Controller
{
    /**
     * Setara dengan uts/index.php: formulir pendaftaran mahasiswa baru.
     */
    public function index()
    {
        return view('uts.index');
    }

    /**
     * Setara dengan uts/proses.php: menampilkan hasil isian formulir.
     *
     * Perbaikan dari versi asli: field "bulan" ikut divalidasi wajib diisi
     * (di file PHP aslinya field ini terlewat dari pengecekan empty(),
     * padahal dipakai untuk menyusun tanggal lahir).
     */
    public function proses(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string'],
            'tempat' => ['required', 'string'],
            'tgl' => ['required', 'numeric'],
            'bulan' => ['required', 'string'],
            'tahun' => ['required', 'numeric'],
            'jk' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'sekolah' => ['required', 'string'],
            'namasekolah' => ['required', 'string'],
            'mtk' => ['required'],
            'bing' => ['required'],
            'indo' => ['required'],
            'pil1' => ['required', 'string'],
            'pil2' => ['required', 'string'],
            'alasan' => ['required', 'string'],
        ], [
            'required' => 'Data belum lengkap!',
        ]);

        return view('uts.proses', [
            'data' => $data,
            // format('d F Y') dipertahankan sama seperti date('d F Y') di proses.php asli
            'tanggalDaftar' => now()->format('d F Y'),
        ]);
    }
}
