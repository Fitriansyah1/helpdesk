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
                            <h3 class="card-title">Data Pesan Contact</h3>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <?= $this->session->flashdata('hapus'); ?>
                            <table class="table table-bordered" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Telpon</th>
                                        <th>Dari Unit</th>
                                        <th>Pesan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($contact as $row) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->name ?></td>
                                            <td><?= $row->telpon ?></td>
                                            <td><?= $row->dari_unit ?></td>
                                            <td><?= $row->message ?></td>
                                            <td>
                                                <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('contact/delete_contact/' . $row->id) ?>" class="btn btn-danger btn-sm">
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