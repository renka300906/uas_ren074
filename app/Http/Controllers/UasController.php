<?php

namespace App\Http\Controllers;

class UasController extends Controller
{
    /**
     * Setara dengan uas/Index.php: frameset (Header, menu, beranda).
     */
    public function index()
    {
        return view('uas.index');
    }

    /**
     * Setara dengan uas/Header.php
     */
    public function header()
    {
        return view('uas.header');
    }

    /**
     * Setara dengan uas/menu.php
     */
    public function menu()
    {
        return view('uas.menu');
    }

    /**
     * Setara dengan uas/beranda.php
     */
    public function beranda()
    {
        return view('uas.beranda');
    }

    /**
     * Setara dengan uas/daftarproduk.php
     */
    public function daftarproduk()
    {
        $menu = [
            ['gambar' => 'makanan1.jpg', 'nama' => 'NASI GORENG', 'harga' => 15000],
            ['gambar' => 'makanan2.jpg', 'nama' => 'SATE AYAM', 'harga' => 25000],
            ['gambar' => 'makanan3.jpg', 'nama' => 'BAKSO URAT', 'harga' => 20000],
            ['gambar' => 'makanan4.jpg', 'nama' => 'RAWON', 'harga' => 15000],
        ];

        return view('uas.daftarproduk', compact('menu'));
    }

    /**
     * Setara dengan uas/profil.php
     */
    public function profil()
    {
        return view('uas.profil');
    }
}
