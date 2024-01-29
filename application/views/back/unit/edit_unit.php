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
                        <h3 class="card-title">Form Unit</h3>
                        <a href="<?= base_url('unit') ?>" class="btn btn-warning btn-sm float-right">Kembali </a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('unit/update_unit') ?>" method="POST">
                            <div class="form-group">
                                <label>ID Unit</label>
                                <div class="input-group">
                                    <input type="text" name="id_unit" value="<?= $unitt->id_unit ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-id-card"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Unit</label>
                                <div class="input-group">
                                    <input type="text" name="unit" value="<?= $unitt->unit ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-building"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Unit</label>
                                <div class="input-group">
                                    <input type="text" name="jenis_unit" value="<?= $unitt->jenis_unit ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-info-circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <div class="input-group">
                                    <input type="text" name="lokasi" value="<?= $unitt->lokasi ?>" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-marker"></span>
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