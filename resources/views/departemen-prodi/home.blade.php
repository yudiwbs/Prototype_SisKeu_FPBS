@extends('layout/main')
@section('title', 'Beranda | Dashboard Departemen/Prodi')

@section('nav-home')
{{url('/dp')}}
@endsection

@section('navbar-text')
[Nama Departemen/Prodi]<span class="ml-2 h-5"><a href="{{url('/')}}" class="badge badge-dark text-light">Log out</a></span>
@endsection

@section('nav-item')
{{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        RKAT
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{url('/dp/pemasukan-data-rkat')}}">Pemasukan Data RKAT</a>
        <a class="dropdown-item" href="#">RKAT Menunggu Persetujuan</a>
        <a class="dropdown-item" href="#">Pengajuan Dana</a>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Pelaporan SPJ/SPTB</a>
</li> --}}
@endsection

@section('container')
<div class="container">
    <br>
    <div class="jumbotron shadow-sm">
        <h1 class="display-4">Dashboard Departemen / Prodi</h1>
        <p class="lead">Pemasukan data dan pengajuan RKAT, pengajuan dana, dan pelaporan SPJ/SPTB.</p>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title h-25">Pemasukan Data RKAT</h5>
                    <hr class="my-4">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in.</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{url('/dp/pemasukan-data-rkat')}}" class="btn btn-outline-dark">Buka</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title h-25">RKAT Menunggu Persetujuan</h5>
                    <hr class="my-4">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in.</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{url('/dp/rkat-menunggu-persetujuan')}}" class="btn btn-outline-dark">Buka</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title h-25">Pengajuan Dana</h5>
                    <hr class="my-4">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in.</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{url('/dp/pengajuan-dana')}}" class="btn btn-outline-dark">Buka</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title h-25">Pelaporan SPJ/SPTB</h5>
                    <hr class="my-4">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in.</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{url('/dp/pelaporan-spj-sptb')}}" class="btn btn-outline-dark">Buka</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card{
        overflow: hidden;
        transition: all 0.25s ease;
    }
    .card:hover{
        transform: scale(1.1);
    }
</style>
    
@endsection
