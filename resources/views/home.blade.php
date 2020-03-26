@extends('layout/main')
@section('title', 'Prototype Sistem Keuangan FPBS')

@section('container')

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <div class="card mb-3 shadow h-100" style="width: 18rem;">
                    <img src="{{ asset('img/fakultas.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portal Fakultas</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in.</p>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-outline-dark">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 shadow h-100" style="width: 18rem;">
                    <img src="{{ asset('img/departemen-prodi.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Portal Departemen & Prodi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in.</p>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{url('/dp')}}" class="btn btn-outline-dark">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card img {
        object-fit: contain;
        height: 122px;
        padding: 22px;
        /* opacity: 0.8; */
        /* background-color: #979797; */
    }

    .card-img-top {
        border-radius: 0;
        background-color: #efebea;
    }
</style>

@endsection