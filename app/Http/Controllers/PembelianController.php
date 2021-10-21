<?php

namespace App\Http\Controllers;

use App\Models\Pembelians;

class PembelianController extends Controller
{
    public function pembelian()
    {
        $p = Pembelians::all();
        return view('pembelian', compact('p'));

    }
}
