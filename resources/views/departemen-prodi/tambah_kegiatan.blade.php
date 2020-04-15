@extends('layout/main')
@section('title', 'Tambah Kegiatan | Pemasukan Data RKAT')

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
        <h3 class="font-weight-light">Tambah Kegiatan</h3>
    </div>
</div>

<div class="container shadow w-50">
    <br>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="container mb-2">
                    <label for="jenis-rkat">Jenis RKAT</label>
                    <select class="custom-select custom-select-sm" id="jenis-rkat">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="container mb-2">
                    <label for="kebijakan">Kebijakan</label>
                    <select class="custom-select custom-select-sm" id="kebijakan">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="container mb-2">
                    <label for="program">Program</label>
                    <select class="custom-select custom-select-sm" id="program">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="container mb-2">
                    <label for="indikator">Indikator</label>
                    <select class="custom-select custom-select-sm" id="indikator">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="container mb-2">
                    <label for="kegiatan">Kegiatan</label>
                    <select class="custom-select custom-select-sm" id="kegiatan">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    {{-- <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Kegiatan</span>
                        </div>
                        <select class="custom-select" id="kegiatan">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="container mb-2">
                    <label for="output">Output</label>
                    <div class="input-group">
                        <textarea class="form-control" rows="1"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="container mb-2">
                    <label for="sumber-dana">Sumber Dana</label>
                    <select class="custom-select custom-select-sm" id="sumber-dana">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="container mb-2">
                    <label for="kelengkapan-spj">Kelengkapan SPJ</label>
                    <div class="input-group">
                        <textarea class="form-control" rows="1"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6>Kategori: xxx</h6>
                    <h6>Pagu: xxx</h6>
                </div>
                <div class="col">
                    <label for="jadwal">Jadwal</label>
                    <table class="table table-bordered" id="jadwal">
                        <tbody>
                            <tr>
                                <td scope="row">Januari</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td scope="row">Februari</td>
                                <td>xxx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="container">
            <label for="mak">MAK</label>
            <table class="table table-bordered" id="MAK">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">COA</th>
                        <th scope="col">SBU</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>51006</td>
                        <td></td>
                        <td></td>
                        <td>XXX</td>
                        <td>
                            <a href="#" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2.1.2.1 .... 1 ORG x 10 PRODI</td>
                        <td>4.000.000</td>
                        <td>40.000.000</td>
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
            <a href="{{url('/dp/pemasukan-data-rkat')}}" class="btn btn-outline-dark float-left">Simpan Kegiatan</a>
        </div>
        <div class="col">
            <h6 align="right">Jumlah:</h6>
        </div>
        <div class="col">
            <a href="{{url('/dp/pemasukan-data-rkat/tambah-kegiatan/tambah-rincian-mak')}}" class="btn btn-outline-dark float-right">Tambah Rincian MAK</a>
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
