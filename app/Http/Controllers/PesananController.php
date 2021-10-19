<?php

namespace App\Http\Controllers;

use App\Models\Pesanans;

class PesananController extends Controller
{
    public function pesanan()
    {
        $p = Pesanans::all();
        return view('pesanan', compact('p'));

    }
}
