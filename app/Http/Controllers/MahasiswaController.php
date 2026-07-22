<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Setara dengan uas/data/index.php
     */
    public function index()
    {
        $data = Mahasiswa::all();

        return view('uas.data.index', compact('data'));
    }

    /**
     * Setara dengan uas/data/tambah.php
     * (perbaikan: menghapus karakter "s" nyasar setelah tag <tr> pada baris Kelas)
     */
    public function create()
    {
        return view('uas.data.tambah');
    }

    /**
     * Setara dengan uas/data/simpan.php
     * Perbaikan: query mentah rawan SQL Injection diganti Eloquent (parameter binding otomatis).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'npm' => ['required', 'string', 'max:20'],
            'nama' => ['required', 'string', 'max:100'],
            'angkatan' => ['required', 'string', 'max:10'],
            'kelas' => ['required', 'string', 'max:10'],
            'jurusan' => ['required', 'string', 'max:100'],
            'jenis_kelamin' => ['required', 'in:Laki-Laki,Perempuan'],
        ]);

        // Mengecek apakah NPM sudah ada, sama seperti logika simpan.php asli
        if (Mahasiswa::whereKey($validated['npm'])->exists()) {
            return redirect()
                ->route('uas.data.tambah')
                ->with('alert', 'NPM sudah terdaftar!');
        }

        Mahasiswa::create([
            'npm' => $validated['npm'],
            'NAMA' => $validated['nama'],
            'ANGKATAN' => $validated['angkatan'],
            'KELAS' => $validated['kelas'],
            'JURUSAN' => $validated['jurusan'],
            'JENIS_KELAMIN' => $validated['jenis_kelamin'],
        ]);

        return redirect()
            ->route('uas.data.index')
            ->with('alert', 'Data berhasil ditambahkan!');
    }

    /**
     * Setara dengan uas/data/edit.php
     */
    public function edit(string $npm)
    {
        $hasil = Mahasiswa::findOrFail($npm);

        return view('uas.data.edit', compact('hasil'));
    }

    /**
     * Setara dengan uas/data/update.php
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'npm' => ['required', 'string'],
            'nama' => ['required', 'string', 'max:100'],
            'angkatan' => ['required', 'string', 'max:10'],
            'kelas' => ['required', 'string', 'max:10'],
            'jurusan' => ['required', 'string', 'max:100'],
            'jenis_kelamin' => ['required', 'in:Laki-Laki,Perempuan'],
        ]);

        $mahasiswa = Mahasiswa::findOrFail($validated['npm']);

        $mahasiswa->update([
            'NAMA' => $validated['nama'],
            'ANGKATAN' => $validated['angkatan'],
            'KELAS' => $validated['kelas'],
            'JURUSAN' => $validated['jurusan'],
            'JENIS_KELAMIN' => $validated['jenis_kelamin'],
        ]);

        return redirect()->route('uas.data.index');
    }

    /**
     * Setara dengan uas/data/hapus.php
     */
    public function destroy(string $npm)
    {
        Mahasiswa::whereKey($npm)->delete();

        return redirect()->route('uas.data.index');
    }
}
