<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Setara dengan RENUHUY/index.php: halaman berisi 2 tautan (UTS & UAS).
     */
    public function index()
    {
        return view('home');
    }
}
