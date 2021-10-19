<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function barang()
    {
        $p = Barang::all();
        return view('barang', compact('p'));

    }
}
