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
                        <h3 class="card-title">Data Perpindahan Perangkat</h3>
                        <a href="<?= base_url('perpindahan/cetak_perpindahan') ?>" class="btn btn-sm btn-success mr-1 float-right"><i class="fas fa-print"></i> Cetak Data</a>
                        <a href="<?= base_url('perpindahan/add_perpindahan') ?>" class="btn btn-info btn-sm float-right mr-1" style="margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('hapus'); ?>
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Cadangan</th>
                                    <th>Cadangan Komputer</th>
                                    <th>Tanggal</th>
                                    <th>Ke Unit</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($perpindahan as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->id_perpindahan ?></td>
                                        <td><?= $row->cadangan_id ?></td>
                                        <td><?= $row->tgl ?></td>
                                        <td><?= $row->unit_id ?></td>
                                        <td><?= $row->status ?></td>
                                        <td>
                                            <a href="<?= base_url('perpindahan/edit_perpindahan/' . $row->id_perpindahan) ?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('perpindahan/delete_perpindahan/' . $row->id_perpindahan) ?>" class="btn btn-danger btn-sm">
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