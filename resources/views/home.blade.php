<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
    .img-fit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-fixed {
        height: 280px;
    }

    .card,
    .card img {
        border-radius: 0 !important;
    }

    /* --- Ikon Sosmed Bulat --- */
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

    <div class="container mt-4 text-center">
        <h2>Selamat Datang di --Luis Pernando 2301040004-- Group</h2>
    </div>

    <div class="container mt-3">
    <div class="row g-0">

        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="card card-fixed h-100" style="background-color: #ccf2ff">
                <div class="row g-0 h-100">
                    <!-- Gambar Kiri -->
                    <div class="col-md-6 h-100">
                        <img src="{{ asset('images/jerry.jpg') }}" class="img-fit" alt="">
                    </div>

                    <!-- Teks Kanan -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h3 class="card-title">Special Sambal</h3>
                            <p class="card-text">Restoran Khas Sambal</p>
                            <p class="card-text">Waroeng Special Sambal SS berdiri pada 20 Agustus 2002
                                dan kini memiliki 100 cabang di Jawa–Bali hingga Asia.</p>

                            <!-- Icon medsos -->
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

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="card card-fixed h-100" style="background-color: #ffccdaff">
                <div class="row g-0 h-100">

                    <!-- Teks kiri -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Sate Pak Pong</h5>
                            <p class="card-text">Cari Satay di Jogja</p>
                            <p class="card-text">Menu daging kambing khas Bantul termasuk sate klatak
                                yang memakai daging kambing muda.</p>

                            <div class="socmed mt-2">
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-youtube"></i>
                                <i class="bi bi-instagram"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar kanan -->
                    <div class="col-md-6 h-100">
                        <img src="{{ asset('images/tom.png') }}" class="img-fit" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6">
            <div class="card card-fixed h-100" style="background-color: #d2a08cff">
                <div class="row g-0 h-100">

                    <!-- Teks kiri -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Gudeg Sagan</h5>
                            <p class="card-text">Authentic Jogja Food</p>
                            <p class="card-text">Gudeg khas Yogyakarta dari nangka muda (Gori) dimasak lama
                                dengan santan dan rempah.</p>

                            <div class="socmed mt-2">
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-youtube"></i>
                                <i class="bi bi-instagram"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar kanan -->
                    <div class="col-md-6 h-100">
                        <img src="{{ asset('images/tom.png') }}" class="img-fit" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="card card-fixed h-100" style="background-color: #cfbee9ff">
                <div class="row g-0 h-100">

                    <!-- Gambar kiri -->
                    <div class="col-md-6 h-100">
                        <img src="{{ asset('images/jerry.jpg') }}" class="img-fit" alt="">
                    </div>

                    <!-- Teks kanan -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Sushi Cerita</h5>
                            <p class="card-text">Sushi Untuk Mahasiswa</p>
                            <p class="card-text">Restoran Jepang modern di Sleman & Mlati menyediakan sushi,
                                ramen, dan takoyaki.</p>

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

    </div>
</div>

<div class="container text-center mt-4 pb-5">
    <p>Total Franchise : 4</p>
</div>

</body>

</html>
