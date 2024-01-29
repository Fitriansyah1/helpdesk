<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css">
    <style>
        @media print {

            /* Add your custom styles for print here */
            body {
                font-family: Arial, sans-serif;
            }

            .header {
                text-align: center;
            }

            .logo {
                width: 80px;
                /* Adjust the width of your logo */
                height: auto;
                margin-right: 10px;
            }

            h1 {
                font-size: 14pt;
                font-weight: normal;
                text-align: center;
            }

            h2.display-15 {
                font-size: 14pt;
                font-weight: bold;
                text-align: center;
            }

            .address {
                font-size: 9pt;
                text-align: center;
            }

            .title {
                font-size: 13pt;
                font-weight: bold;
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .table-header {
                font-size: 11pt;
                font-weight: bold;
                background-color: #f2f2f2;
                text-align: center;
            }

            .table-cell {
                font-size: 11pt;
                text-align: center;
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <!-- <img class="logo" src="<?= base_url() ?>assets/back/dist/img/mas.jpg" alt="Institution Logo"> -->
        <div>
            <h1>RSUD DR. H. MOCH. ANSARI SALEH BANJARMASIN</h1>
            <p>Jl. Brig Jend. Hasan Basri No.1, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin</p>
            <hr>
        </div>
    </header>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="display-15 text-center">Laporan Perbaikan Perperbaikan</h4>
                <br>
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
        window.print();
    </script>
</body>

</html>