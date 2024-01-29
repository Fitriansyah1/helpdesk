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
                        <h3 class="card-title">Data Cadangan Komputer</h3>
                        <a href="<?= base_url('cadangan/cetak_cadangan') ?>" class="btn btn-sm btn-success mr-1 float-right"><i class="fas fa-print"></i> Cetak Data</a>
                        <a href="<?= base_url('cadangan/add_cadangan') ?>" class="btn btn-info btn-sm float-right mr-1" style="margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('hapus'); ?>
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Cadangan</th>
                                    <th>Nama Komputer</th>
                                    <th>Tipe Komputer</th>
                                    <th>Jumlah</th>
                                    <th>Kondisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($cadangan as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->id_cadangan ?></td>
                                        <td><?= $row->nama_cadangan ?></td>
                                        <td><?= $row->tipe_cadangan ?></td>
                                        <td><?= $row->jumlah ?></td>
                                        <td><?= $row->kondisi ?></td>
                                        <td>
                                            <a href="<?= base_url('cadangan/edit_cadangan/' . $row->id_cadangan) ?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('cadangan/delete_cadangan/' . $row->id_cadangan) ?>" class="btn btn-danger btn-sm">
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