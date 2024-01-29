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
                        <?= validation_errors() ?>
                        <form action="<?= base_url('perpindahan/save_perpindahan') ?>" method="POST">
                            <div class="form-group">
                                <label>ID Perpindahan</label>
                                <div class="input-group">
                                    <input type="text" name="id_perpindahan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Perpindahan</label>
                                <div class="input-group">
                                    <input type="date" name="tgl" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Komputer</label>
                                <div class="input-group">
                                    <select name="cadangan_id" class="form-control">
                                        <option value="">--Pilih Komputer--</option>
                                        <?php foreach ($cadangan as $key => $row) { ?>
                                            <option value="<?= $row->nama_cadangan ?>"><?= $row->nama_cadangan ?></option>
                                        <?php  } ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-desktop"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ke Unit</label>
                                <div class="input-group">
                                    <select name="unit_id" class="form-control">
                                        <option value="">--Pilih Unit--</option>
                                        <?php foreach ($unit as $key => $row) { ?>
                                            <option value="<?= $row->jenis_unit ?>"><?= $row->jenis_unit ?></option>
                                        <?php  } ?>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-building"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="input-group">
                                    <input type="text" name="status" class="form-control">
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