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
                        <h3 class="card-title">Data Tanggapan</h3>
                        <a href="<?= base_url('tanggapan/cetak_tanggapan') ?>" class="btn btn-sm btn-success mr-1 float-right"><i class="fas fa-print"></i> Cetak Data</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->flashdata('hapus'); ?>
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Tiket</th>
                                    <th>Deskripsi Perbaikan</th>
                                    <th>Tanggal Tanggapan</th>
                                    <th>Waktu Pengerjaan</th>
                                    <th>Nama Teknisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tanggapan as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->tiket_no ?></td>
                                        <td><?= $row->tanggapan ?></td>
                                        <td><?= $row->waktu_tanggapan ?></td>
                                        <td><?= $row->waktu_pengerjaan ?></td>
                                        <td><?= $row->nama_teknisi ?></td>
                                        <td>
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('tanggapan/delete_tanggapan/' . $row->id_detail) ?>" class="btn btn-danger btn-sm">
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