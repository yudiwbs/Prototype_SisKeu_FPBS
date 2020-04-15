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

    public function PDTambahKegiatan()
    {
        return view('departemen-prodi.tambah_kegiatan');
    }

    public function PDTambahRincianMAK()
    {
        return view('departemen-prodi.tambah_rincian_mak');
    }

    public function RKATMenungguPersetujuan()
    {
        return view('departemen-prodi.rkat_menunggu_persetujuan');
    }

    public function pengajuanDana()
    {
        return view('departemen-prodi.pengajuan_dana');
    }

    public function rincianPengajuanDana()
    {
        return view('departemen-prodi.rincian_pengajuan_dana');
    }

    public function pelaporanSpjSptb()
    {
        return view('departemen-prodi.pelaporan_spj_sptb');
    }

    public function rincianPelaporanSpjSptb()
    {
        return view('departemen-prodi.rincian_pelaporan_spj_sptb');
    }
}
