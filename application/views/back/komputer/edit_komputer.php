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
                        <h3 class="card-title">Form Komputer</h3>
                        <a href="<?= base_url('komputer') ?>" class="btn btn-warning btn-sm float-right">Kembali </a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('komputer/update_komputer') ?>" method="POST">
                            <div class="form-group">
                                <label>ID Komputer</label>
                                <div class="input-group">
                                    <input type="text" name="id_komputer" value="<?= $kmptr->id_komputer ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-id-card"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Komputer</label>
                                <div class="input-group">
                                    <input type="text" name="komputer" value="<?= $kmptr->komputer ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-desktop"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Komputer</label>
                                <div class="input-group">
                                    <input type="text" name="jenis_komputer" value="<?= $kmptr->jenis_komputer ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-info-circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Baik</label>
                                <div class="input-group">
                                    <input type="text" name="kondisi_baik" value="<?= $kmptr->kondisi_baik ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-info-circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Rusak</label>
                                <div class="input-group">
                                    <input type="text" name="kondisi_rusak" value="<?= $kmptr->kondisi_rusak ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-info-circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Merek</label>
                                <div class="input-group">
                                    <input type="text" name="merek" value="<?= $kmptr->merek ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-tag"></span>
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