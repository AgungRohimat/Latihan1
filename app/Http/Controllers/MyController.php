<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public function tampilkan()
    {
        $nama = 'Agung Rohimat';
        $umur = 18;
        $status = 'Pelajar';

        return view('sample', compact('nama', 'umur', 'status'));
    }
}
