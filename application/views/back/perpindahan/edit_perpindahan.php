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
                        <h3 class="card-title">Form Perpindahan Perangkat</h3>
                        <a href="<?= base_url('perpindahan') ?>" class="btn btn-warning btn-sm float-right">Kembali </a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('perpindahan/update_perpindahan') ?>" method="POST">
                            <div class="form-group">
                                <label>ID Perpindahan</label>
                                <input type="text" name="id_perpindahan" value="<?= $prpndhn->id_perpindahan ?>" readonly class="form-control">
                                <div class="form-group">
                                    <label>Tanggal Perpindahan</label>
                                    <input type="date" name="tgl" value="<?= $prpndhn->tgl ?>" class="form-control">
                                    <div class="form-group">
                                        <label>Nama Komputer</label>
                                        <div class="input-group">
                                            <input type="text" name="cadangan_id" value="<?= $prpndhn->cadangan_id ?>" class="form-control">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-desktop"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Dari Unit</label>
                                            <select name="unit_id" class="form-control">
                                                <option value="">--Pilih Unit--</option>
                                                <?php foreach ($perpindahan as $key => $row) { ?>
                                                    <option value="<?= $row->unit_id ?>"><?= $row->unit_id ?></option>
                                                <?php  } ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="input-group">
                                                <input type="text" name="status" value="<?= $prpndhn->status ?>" class="form-control">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-info-circle"></span>
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