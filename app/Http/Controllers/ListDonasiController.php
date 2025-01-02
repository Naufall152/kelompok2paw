<?php

namespace App\Http\Controllers;
use App\Models\Tunai;
use App\Models\Makanan;
use Illuminate\Http\Request;

class ListDonasiController extends Controller
{
    public function index()
    {

        $donasiTunai = Tunai::all();
        $donasiMakanan = Makanan::all();

        return view('list-donasi', compact('donasiTunai', 'donasiMakanan'));
    }
}
