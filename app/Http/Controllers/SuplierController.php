<?php

namespace App\Http\Controllers;

use App\Models\Supliers;

class SuplierController extends Controller
{
    public function suplier()
    {
        $p = Supliers::all();
        return view('suplier', compact('p'));

    }
}
