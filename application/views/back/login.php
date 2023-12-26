<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Login</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>asset/assets/favicon.ico" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css">
    <!-- Gantilah path sesuai dengan struktur direktori proyek Anda -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/animate/animate.css" />

    <!-- Custom styles -->
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.8);
            /* Adjust the opacity as needed */
            border-radius: 20px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box animate__animated animate__fadeIn">
        <div class="login-logo">
            <img src="<?= base_url() ?>assets/back/dist/img/baru_login1.png" alt="Logo" style="max-width: 200px; height: 210px;">
        </div>
        <div class="card animate__animated animate__fadeIn">
            <div class="card-body login-card-body" style="text-align: center;">
                <h3 style="margin-bottom: 30px;" class="animate__animated animate__fadeInDown">LOGIN</h3>
                <?= $this->session->flashdata('message') ?>
                <form action="<?= base_url('auth/proses_login') ?>" method="post" class="animate__animated animate__fadeIn">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-15">
                        <button type="submit" class="btn btn-primary btn-block animate__animated animate__fadeInUp">Sign In</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>
        </div>
    </div>
    <!-- /.login-card-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/back/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/back/dist/js/adminlte.min.js"></script>
</body>

</html>