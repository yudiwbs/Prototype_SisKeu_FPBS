@extends('layout/main')
@section('title', 'Pelaporan SPJ/SPTB | Dashboard Departemen/Prodi')

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
        <h3 class="font-weight-light">Pelaporan SPJ/SPTB</h3>
    </div>
</div>

<div class="container shadow">
    <br>
    <div class="row">
        <div class="col">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark float-left mr-2" type="submit">Search</button>
                <button type="button" class="btn btn-outline-dark float-left">Filter</button>
            </form>
        </div>
        <div class="col">
            <button type="button" class="btn btn-outline-dark float-right">Print</button>
            {{-- <button type="button" class="btn btn-outline-dark float-right mr-2">Ajukan</button> --}}
        </div>
    </div>

    <br><br>

    <div class="row">
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col" rowspan="2">No.</th>
                        <th scope="col" rowspan="2">Penerima</th>
                        <th scope="col" rowspan="2">NPWP</th>
                        <th scope="col" rowspan="2">Uraian</th>
                        <th scope="col" colspan="2">Bukti</th>
                        <th scope="col" rowspan="2">Kegiatan</th>
                        <th scope="col" rowspan="2">COA</th>
                        <th scope="col" rowspan="2">Jumlah</th>
                        <th scope="col" rowspan="2">Jumlah Kena Pajak</th>
                        <th scope="col" rowspan="2">Aksi</th>
                    </tr>
                    <tr align="center">
                        <th scope="col">Tanggal</th>
                        <th scope="col">No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="badge badge-success">Edit</a>
                            <a href="#" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="badge badge-success">Edit</a>
                            <a href="#" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="badge badge-success">Edit</a>
                            <a href="#" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            {{-- <h6>Jumlah:</h6> --}}
        </div>
        <div class="col">
            <button type="button" class="btn btn-outline-dark float-right" disabled>Tambah SPTB<sup>WIP</sup></button>
        </div>
    </div>
    <br>
</div>

<br>

<div class="container">
    <a class="btn btn-light btn-lg btn-block shadow-sm" href="{{url('/dp')}}" role="button">Kembali ke Beranda</a>
</div>

<style>
    .jumbotron {
        padding-top: 1em !important;
        padding-bottom: 1em !important;
    }
</style>

@endsection
