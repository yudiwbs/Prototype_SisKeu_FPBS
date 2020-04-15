@extends('layout/main')
@section('title', 'Tambah Rincian SPTB | Pelaporan SPJ / SPTB')

@section('nav-home')
{{url('/dp')}}
@endsection

@section('navbar-text')
[Nama Departemen/Prodi]<span class="ml-2 h-5"><a href="{{url('/')}}" class="badge badge-dark text-light">Log out</a></span>
@endsection

@section('nav-item')
{{-- <li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        RKAT
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item active" href="{{url('/dp/pemasukan-data-rkat')}}">Pemasukan Data RKAT</a>
        <a class="dropdown-item" href="{{url('/dp/rkat-menunggu-persetujuan')}}">RKAT Menunggu Persetujuan</a>
        <a class="dropdown-item" href="#">RKAT Disetujui & Pengajuan Dana</a>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Lapor SPJ/SPTB</a>
</li> --}}
@endsection

@section('container')
<br>

<div class="container">
    <div class="jumbotron shadow-sm">
        <h3 class="font-weight-light">Tambah Rincian SPTB</h3>
    </div>
</div>

<div class="container shadow w-25">
    <br>
    <div class="row m-2">
        <div class="col">
            <div class="row mb-3">
                <h6>Penerima</h6>
            </div>
            <div class="row mb-3">
                <h6>NPWP</h6>
            </div>
            <div class="row mb-3">
                <h6>Uraian</h6>
            </div>
            <div class="row mb-3">
                <h6>Tanggal</h6>
            </div>
            <div class="row mb-3">
                <h6>Nomor</h6>
            </div>
            <div class="row mb-3">
                <h6>Kegiatan</h6>
            </div>
            <div class="row mb-3">
                <h6>COA</h6>
            </div>
            <div class="row mb-3">
                <h6>Jumlah</h6>
            </div>
            <div class="row mb-3">
                <h6>Jumlah Kena Pajak</h6>
            </div>
        </div>
        <div class="col">
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
            <div class="row mb-3">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <a href="{{url('/dp/pelaporan-spj-sptb')}}" class="btn btn-outline-dark float-left">Simpan Rincian SPTB</a>
        </div>
    </div>
    <br>
</div>

{{-- <br>

<div class="container">
    <a class="btn btn-light btn-lg btn-block shadow-sm" href="{{url('/dp/pemasukan-data-rkat')}}" role="button">Kembali ke Pemasukan Data RKAT</a>
</div> --}}

<br>

<style>
    .jumbotron {
        padding-top: 1em !important;
        padding-bottom: 1em !important;
    }
</style>

@endsection
