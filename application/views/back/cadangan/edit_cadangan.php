<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Cadangan Komputer</h3>
                        <a href="<?= base_url('cadangan') ?>" class="btn btn-warning btn-sm float-right">Kembali </a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('cadangan/update_cadangan') ?>" method="POST">
                            <div class="form-group">
                                <label>ID Cadangan</label>
                                <div class="input-group">
                                    <input type="text" name="id_cadangan" value="<?= $cdkmptr->id_cadangan ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-id-card"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Cadangan</label>
                                <div class="input-group">
                                    <input type="text" name="nama_cadangan" value="<?= $cdkmptr->nama_cadangan ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-desktop"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tipe Cadangan</label>
                                <div class="input-group">
                                    <input type="text" name="tipe_cadangan" value="<?= $cdkmptr->tipe_cadangan ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-info-circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <div class="input-group">
                                    <input type="text" name="jumlah" value="<?= $cdkmptr->jumlah ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-sort-numeric-up"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kondisi</label>
                                <div class="input-group">
                                    <input type="text" name="kondisi" value="<?= $cdkmptr->kondisi ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-check-circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>