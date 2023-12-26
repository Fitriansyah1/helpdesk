<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Contact us</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="<?= base_url() ?>asset/animate/animate.css" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('menuutama') ?>">Barus.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url('menuutama') ?>">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url('proses_tiket') ?>">Data Perbaikan</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <h5>No Tiket <?= $tiket->no_tiket ?></h5>
                            </div>

                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <i class="fas fa-ticket-alt"></i> HELPDESK TICKET
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        <b>Waktu mulai :</b> <?= $tiket->waktu_mulai ?> <br>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <b>Selesai :</b>
                                        <?php
                                        if ($tiket->status_tiket == '3') {
                                            echo $tiket->waktu_tanggapan;
                                        } else {
                                            echo "--";
                                        }
                                        ?>
                                    </div>
                                    <div class="col-sm-4 invoice-col">
                                        <b>Status Tiket</b> : <?php if ($tiket->status_tiket == '0') {
                                                                    echo '<span class="badge badge-warning">Menunggu...</span>';
                                                                } else if ($tiket->status_tiket == '1') {
                                                                    echo '<span class="badge badge-info">Menanggapi...</span>';
                                                                } else if ($tiket->status_tiket == '2') {
                                                                    echo '<span class="badge badge-success">Proses...</span>';
                                                                } else {
                                                                    echo '<span class="badge badge-danger">Selesai...</span>';
                                                                }
                                                                ?><br>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Keluhan </label>
                                        <input type="text" value="<?= $tiket->judul_tiket ?>" readonly class="form-control">
                                        <label for="">Keterangan Detail</label>
                                        <textarea rows="6" readonly class="form-control"><?= $tiket->deskripsi ?></textarea>
                                        <label for="">Nama Komputer</label>
                                        <input type="text" value="<?= $tiket->komputer_id ?>" readonly class="form-control">
                                        <label for="">Dari Unit</label>
                                        <input type="text" value="<?= $tiket->unit_id ?>" readonly class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Yang Telah diperbaiki</label>
                                        <textarea rows="10" readonly class="form-control"><?= $tiket->tanggapan ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="lead">Foto Perbaikan : </p>
                                        <img src="<?= base_url('assets/images/tanggapan/' . $tiket->gambar_tanggapan); ?>" class="img-fluid" alt="Foto Perbaikan">
                                    </div>
                                    <div class="col-12">
                                        <p class="lead">Foto Komplain : </p>
                                        <img src="<?= base_url('assets/images/tiket/' . $tiket->gambar_tiket); ?>" class="img-fluid" alt="Foto Komplain">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <script src="<?= base_url() ?>assets/back/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/back/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="<?= base_url() ?>assets/back/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>asset/js/scripts.js"></script>

</body>

</html>