@extends('layout/main')
@section('title', 'Pemasukan Data RKAT | Dashboard Departemen/Prodi')

@section('navbar-text')
    [Nama Departemen/Prodi]<span class="ml-2 h-5"><a href="#" class="badge badge-dark text-light">Log out</a></span>
@endsection

@section('nav-item')
    <li class="nav-item">
        <a class="nav-link" href="{{url('/dp')}}">Beranda</a>
    </li>
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          RKAT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item active" href="/dp/pemasukan-data-rkat">Pemasukan Data RKAT</a>
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
            <h1 class="display-4">Pemasukan Data RKAT</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h6>Periode: 2019-2020</h6>
                <h6>Status: Belum diajukan</h6>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary float-right">Print</button>
                <button type="button" class="btn btn-primary float-right mr-1">Ajukan</button>
            </div>
        </div>

        <br><br>

        <div class="row">
            {{-- Tabel masih berbentuk bawaan template Bootstrap --}}
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <h6>Jumlah:</h6>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary float-right">Tambah Kegiatan</button>
            </div>
        </div>
    </div>
@endsection
