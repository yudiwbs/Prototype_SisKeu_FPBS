@extends('layout/main')
@section('title', 'Beranda | Dashboard Departemen/Prodi')

@section('navbar-text')
    [Nama Departemen/Prodi]<span class="ml-2 h-5"><a href="#" class="badge badge-dark text-light">Log out</a></span>
@endsection

@section('nav-item')
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/dp')}}">Beranda</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          RKAT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/dp/pemasukan-data-rkat">Pemasukan Data RKAT</a>
          <a class="dropdown-item" href="#">RKAT Menunggu Persetujuan</a>
          <a class="dropdown-item" href="#">RKAT Disetujui & Pengajuan Dana</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Lapor SPJ/SPTB</a>
    </li>
@endsection

@section('container')
    {{-- <style>
        body {
            background-image: url('https://fpbs.upi.edu/wp-content/uploads/2017/09/gedung-fpbs.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            
        }
        .jumbotron {
            background: rgba(255, 255, 255, 0.5); 
        }
    </style> --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Dashboard Departemen/Prodi</h1>
            <p class="lead">Pemasukan data dan pengajuan RKAT, pengajuan dana, dan pelaporan SPJ/SPTB.</p>
        </div>
    </div>
@endsection
