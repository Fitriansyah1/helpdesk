<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Menu Utama - Barus</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>asset/assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>asset/css/styles.css" rel="stylesheet" />
    <!-- Gantilah path sesuai dengan struktur direktori proyek Anda -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/animate/animate.css" />

</head>

<body>
    <!-- Responsive navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#!">
                Barus.com
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('menuutama') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('auth/login') ?>">Login</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('contact') ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline -->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5 animate__animated animate__fadeInUp">
                <h1 class="fw-bolder">Welcome to Barus.com</h1>
                <p class="lead mb-0">Pengaduan Kerusakan Komputer</p>
            </div>
        </div>
    </header>
    <!-- Page content -->
    <div class="container">
        <div class="row">
            <!-- Blog entries -->
            <div class="col-lg-8 animate__animated animate__fadeInLeft">
                <!-- Featured blog post -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Pengaduan Kerusakan</h2>
                        <h2 class="card-title">Bisa Datang Langsung Ke Instalasi IT</h2>
                        <p class="card-text">Atau Bisa dengan Hubungi dan Kontak Kami ada Tertera di Website ini!</p>
                        <a class="btn btn-success" href="<?= base_url('contact') ?>">Contact</a>
                    </div>
                </div>
            </div>
            <!-- Side widgets -->
            <div class="col-lg-4 animate__animated animate__fadeInRight">
                <div class="card mb-4">
                    <div class="card-header">Cek Perbaikan</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a class="btn btn-info" href="<?= base_url('proses_tiket') ?>">Proses Perbaikan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Fitriansyah | Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="<?= base_url() ?>asset/js/scripts.js"></script>
</body>

</html>