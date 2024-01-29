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
                        <h3 class="card-title">Data Unit</h3>
                        <a href="<?= base_url('unit/add_unit') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
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
                                    <th>Jenis Unit</th>
                                    <th>Lokasi</th>
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
                                        <td><?= $row->jenis_unit ?></td>
                                        <td><?= $row->lokasi ?></td>
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
            </div>
        </div>
    </section>
</div>
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