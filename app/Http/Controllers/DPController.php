<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DPController extends Controller
{
    public function home()
    {
        return view('departemen-prodi.home');
    }

    public function pemasukanDataRKAT()
    {
        return view('departemen-prodi.pemasukan_data_rkat');
    }

    public function RKATMenungguPersetujuan()
    {
        return view('departemen-prodi.rkat_menunggu_persetujuan');
    }
}
