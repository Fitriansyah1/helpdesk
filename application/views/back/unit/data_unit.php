<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Unit</h3>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('hapus'); ?>
        <?= validation_errors() ?>
        <table class="table table-bordered" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Unit</th>
                    <th>Nama Unit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($unit as $row) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->id_unit ?></td>
                        <td><?= $row->unit ?></td>
                        <td>
                            <a href="<?= base_url('unit/edit_unit/' . $row->id_unit) ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('unit/delete_unit/' . $row->id_unit) ?>" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.card -->
</div>