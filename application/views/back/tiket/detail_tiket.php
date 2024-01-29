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
                                    <i class="fas fa-ticket-alt"></i> HELPDESK TICKET <a href="<?= base_url('tiket') ?>" class="btn btn-warning btn-sm float-right">Kembali </a>
                                </h4>
                                <br>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Dibuat Oleh : <strong><?= $tiket->username; ?></strong><br>
                                <address>
                                    Email: <?= $tiket->email ?><br>
                                </address>
                            </div>
                            <!-- /.col -->
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
                                <br>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <b>No Tiket : </b><?= $tiket->no_tiket ?>
                                <br>
                                <b>Waktu mulai :</b> <?= $tiket->waktu_mulai ?> <br>
                                <b>Selesai :</b>
                                <?php
                                if ($tiket->status_tiket == '3') {
                                    echo $tiket->waktu_tanggapan;
                                } else {
                                    echo "--";
                                }
                                ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="">Keluhan </label>
                                <input type="text" value="<?= $tiket->judul_tiket ?>" readonly class="form-control">
                                <label for="">Keterangan Detail</label>
                                <textarea rows="6" readonly class="form-control"><?= $tiket->deskripsi ?></textarea>
                                <label for="">Nama Komputer</label>
                                <input type="text" value="<?= $tiket->komputer_id ?>" readonly class="form-control">
                                <label for="">Cadangan</label>
                                <input type="text" value="<?= $tiket->nama_cadangan ?>" readonly class="form-control">
                                <label for="">Dari Unit</label>
                                <input type="text" value="<?= $tiket->unit_id ?>" readonly class="form-control">
                                <label for="">No Telepon</label>
                                <input type="text" value="<?= $tiket->telpon ?>" readonly class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="">Yang Telah diperbaiki</label>
                                <textarea rows="10" readonly class="form-control"><?= $tiket->tanggapan ?></textarea>
                            </div>

                        </div>


                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <p class="lead">Foto Komplain : </p>
                                <img src="<?= base_url('assets/images/tiket/' . $tiket->gambar_tiket); ?>" width="250px">

                            </div>
                            <div class="col-6">
                                <p class="lead">Foto Perbaikan : </p>
                                <img src="<?= base_url('assets/images/tanggapan/' . $tiket->gambar_tanggapan); ?>" width="250px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>