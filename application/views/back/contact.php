<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Contact us</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="<?= base_url() ?>asset/animate/animate.css" />

    <script nonce="43f1b0e2-a3e1-40b4-b49e-333a5d9928fb">
        // Your script here
    </script>
</head>

<body class="hold-transition sidebar-mini">

    <section class="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#!">
                    Barus
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

        <div class="card animate__animated animate__fadeIn">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center animate__animated animate__fadeInLeft">
                    <div>
                        <h2>Contact<strong></strong></h2>
                        <p class="lead mb-5">Email : fitriansyahh413@gmail.com<br>
                            Phone: +625751419721
                        </p>
                    </div>
                </div>
                <div class="col-7 animate__animated animate__fadeInRight">
                    <?= $this->session->flashdata('message'); ?>
                    <form action="<?= base_url('contact/save_contact') ?>" method="POST">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="inputTelpon">No Telpon</label>
                            <input type="text" name="telpon" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="inputUnit">Dari Unit</label>
                            <input type="text" name="dari_unit" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea name="message" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
        </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>

    <script src="<?= base_url() ?>assets/back/plugins/jquery/jquery.min.js"></script>

    <script src="<?= base_url() ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>assets/back/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="<?= base_url() ?>assets/back/dist/js/demo.js"></script>

    <script src="<?= base_url() ?>asset/js/scripts.js"></script>
    <script>
        // Script untuk menangani animasi alert
        $(document).ready(function() {
            // Atur waktu tampilan alert (dalam milidetik)
            var alertTimeout = 2000;

            // Tampilkan alert saat halaman dimuat
            $("#alert").alert();

            // Sembunyikan alert setelah beberapa detik
            setTimeout(function() {
                $("#alert").alert('close');
            }, alertTimeout);
        });
    </script>
</body>

</html>