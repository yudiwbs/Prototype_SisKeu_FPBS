@extends('layout/main')
@section('title', 'RKAT Menunggu Persetujuan | Dashboard Departemen/Prodi')

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
        <a class="dropdown-item" href="{{url('/dp/pemasukan-data-rkat')}}">Pemasukan Data RKAT</a>
        <a class="dropdown-item active" href="{{url('/dp/rkat-menunggu-persetujuan')}}">RKAT Menunggu Persetujuan</a>
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
        <h3 class="font-weight-light">RKAT Menunggu Persetujuan</h3>
    </div>
</div>

<div class="container shadow">
    <br>
    <div class="row">
        <div class="col">
            <h6>Unit: xxxxxx</h6>

            <br>

            <h6><b>Keuangan Tingkat Fakultas</b></h6>
            <input type="checkbox" id="v-fakultas" name="v-fakultas" checked>
            <label for="v-fakultas">Sudah diverifikasi; tgl: xxxxxx</label>
            <div class="input-group w-75">
                <div class="input-group-prepend h-50">
                    <span class="input-group-text h-50">Catatan</span>
                </div>
                <textarea class="form-control" aria-label="Catatan" rows="1"></textarea>
            </div>
        </div>
        <div class="col">
            <br><br>

            <h6><b>Kasubbag Keupeg</b></h6>
            <input type="checkbox" id="v-kk" name="v-kk" checked>
            <label for="v-kk">Sudah diverifikasi; tgl: xxxxxx</label>
            <div class="input-group w-75">
                <div class="input-group-prepend h-50">
                    <span class="input-group-text h-50">Catatan</span>
                </div>
                <textarea class="form-control" aria-label="Catatan" rows="1"></textarea>
            </div>
        </div>
        <div class="col">
            <br><br>

            <h6><b>Wakil Dekan Bidang KSD</b></h6>
            <input type="checkbox" id="v-wadek" name="v-wadek" checked>
            <label for="v-wadek">Sudah diverifikasi; tgl: xxxxxx</label>
            <div class="input-group w-75">
                <div class="input-group-prepend h-50">
                    <span class="input-group-text h-50">Catatan</span>
                </div>
                <textarea class="form-control" aria-label="Catatan" rows="1"></textarea>
            </div>
        </div>
    </div>

    <br><br>

    <div class="row">
        <div class="container">
            <h6>Diajukan tgl: xxxxxx</h6>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col" rowspan="2">No.</th>
                        <th scope="col" rowspan="2">Kebijakan / Kegiatan</th>
                        <th scope="col" rowspan="2">Output</th>
                        <th scope="col" rowspan="2">IKU</th>
                        <th scope="col" rowspan="2">Alokasi</th>
                        <th scope="col" rowspan="2">Sumber Dana</th>
                        <th scope="col" colspan="2">MAK</th>
                        <th scope="col" rowspan="2">SBU</th>
                        <th scope="col" rowspan="2">Jumlah</th>
                        <th scope="col" rowspan="2">Jadwal</th>
                        <th scope="col" rowspan="2">Kelengkapan SPJ</th>
                    </tr>
                    <tr align="center">
                        <th scope="col">No.</th>
                        <th scope="col">Uraian</th>
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
                        <td></td>
                        <td></td>
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
                        <td></td>
                        <td></td>
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
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <h6>Total: xxxxxx</h6>
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
