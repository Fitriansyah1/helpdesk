<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Komputer</h3>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('hapus'); ?>
        <?= validation_errors() ?>
        <table class="table table-bordered" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Komputer</th>
                    <th>Nama Komputer</th>
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