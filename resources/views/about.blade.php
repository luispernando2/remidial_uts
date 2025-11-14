<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        .img-fit {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .card-fixed {
            height: 280px;
            overflow: hidden;
        }

        /* Gambar ambil 50% dari card */
        .img-side {
            width: 50% !important;
            height: 100%;
        }

        /* Teks ambil sisa 50% */
        .text-side {
            width: 50% !important;
            height: 100%;
        }

        .socmed i {
            font-size: 1.2rem;
            color: #fff;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: 1px solid #777;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            transition: 0.25s;
            background: rgba(255,255,255,0.2);
        }

        .socmed i:hover {
            background: #0d6efd;
            color: white;
            border-color: #0d6efd;
            transform: scale(1.1);
        }
    </style>
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <a class="navbar-brand" href="/">Baiq Jingga Prameswari (2301040020)</a>
        <div>
            <a class="nav-link d-inline text-white" href="/">Home</a>
            <a class="nav-link d-inline text-white" href="/about">About</a>
        </div>
    </div>
</nav>

<div class="container mt-5 text-center">
    <h2>About Us</h2>
</div>

<div class="container d-flex flex-column align-items-center pt-3">

    <!-- CARD 1 -->
    <div class="col-md-6">
        <div class="card card-fixed" style="background-color:#ccf2ff;">
            <div class="d-flex h-100">

                <!-- Gambar 50% -->
                <div class="img-side">
                    <img src="{{ asset('images/jerry.jpg') }}" class="img-fit" alt="">
                </div>

                <!-- Teks 50% -->
                <div class="text-side">
                    <div class="card-body">
                        <h3 class="card-title">Luis Pernando</h3>
                        <p>2301040004</p>
                        <p>Programmer 1 Master Programmer alias bossnya</p>

                        <div class="socmed mt-2">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-twitter"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-instagram"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- CARD 2 -->
    <div class="col-md-6">
        <div class="card card-fixed" style="background-color:#e5ecc2;">
            <div class="d-flex h-100">

                <!-- Teks 50% -->
                <div class="text-side">
                    <div class="card-body">
                        <h3 class="card-title">Baiq Jingga Prameswari</h3>
                        <p>2301040020</p>
                        <p>Programmer 2 Ternaknya Programmer 1</p>

                        <div class="socmed mt-2">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-twitter"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-instagram"></i>
                        </div>
                    </div>
                </div>

                 <!-- Gambar 50% -->
                <div class="img-side">
                    <img src="{{ asset('images/tom.png') }}" class="img-fit" alt="">
                </div>

            </div>
        </div>
    </div>

</div>

<div class="container text-center mt-4 pb-5">
    <a href="/" class="btn btn-primary">← Back To Home</a>
</div>

</body>
</html>
