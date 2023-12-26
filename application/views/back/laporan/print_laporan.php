    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css">
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="display-4 text-center">Laporan IT</h2>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>No Tiket</th>
                    <th>Keluhan</th>
                    <th>Waktu Daftar</th>
                    <th>Waktu Selesai</th>
                    <th>Status </th>
                </tr>
                <?php
                $no = 1;
                foreach ($get_laporan as $row) {

                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->no_tiket ?></td>
                        <td><?= $row->judul_tiket ?></td>
                        <td><?= $row->tgl_daftar ?></td>
                        <td><?= $row->waktu_tanggapan ?></td>
                        <td>
                            <?php
                            if ($row->status_tiket == '0') {
                                echo 'Respon...';
                            } else if ($row->status_tiket == '1') {
                                echo 'Proses...';
                            } else if ($row->status_tiket == '2') {
                                echo 'Diperbaiki...';
                            } else {
                                echo 'Solved';
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        window.print()
    </script>