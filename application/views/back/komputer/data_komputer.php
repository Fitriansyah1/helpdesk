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
                        <h3 class="card-title">Data Komputer</h3>
                        <a href="<?= base_url('komputer/cetak_komputer') ?>" class="btn btn-sm btn-success mr-1 float-right"><i class="fas fa-print"></i> Cetak Data</a>
                        <a href="<?= base_url('komputer/add_komputer') ?>" class="btn btn-info btn-sm float-right mr-1" style="margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('hapus'); ?>
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Komputer</th>
                                    <th>Komputer</th>
                                    <th>Jenis Komputer</th>
                                    <th>Jumlah Baik</th>
                                    <th>Jumlah Rusak</th>
                                    <th>Merek</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($komputer as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->id_komputer ?></td>
                                        <td><?= $row->komputer ?></td>
                                        <td><?= $row->jenis_komputer ?></td>
                                        <td><?= $row->kondisi_baik ?></td>
                                        <td><?= $row->kondisi_rusak ?></td>
                                        <td><?= $row->merek ?></td>
                                        <td>
                                            <a href="<?= base_url('komputer/edit_komputer/' . $row->id_komputer) ?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('komputer/delete_komputer/' . $row->id_komputer) ?>" class="btn btn-danger btn-sm">
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