<?php

namespace App\Http\Controllers;

use App\Models\Pembelis;

class PembeliController extends Controller
{
    public function pembeli()
    {
        $p = Pembelis::all();
        return view('pembeli', compact('p'));

    }
}
