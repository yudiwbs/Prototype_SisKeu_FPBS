<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sistem Keuangan FPBS UPI</title>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="navbar d-flex justify-content-center m-6">
            <img src="{{ asset('img/logo-upi.png') }}" alt="" width="82">
            <div class="lh-100 my-0">
                <h1 class="mb-0 lh-100 ml-3 mt-1">SISTEM KEUANGAN</h1>
                <h3 class="ml-3 mb-3">FPBS UPI</h3>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col">
                <div class="card mb-3 shadow h-100" style="width: 18rem;">
                    <img src="{{ asset('img/fakultas.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portal Fakultas</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                            in.</p>
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
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                            in.</p>
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

    <style>
        .card img {
            object-fit: contain;
            height: 122px;
            padding: 22px;
        }

        .card-img-top {
            border-radius: 0;
            background-color: #efebea;
        }

    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
