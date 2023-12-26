<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Contact us</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="<?= base_url() ?>asset/animate/animate.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        /* Tambahkan style khusus di sini jika diperlukan */
        body {
            font-size: 16px;
        }

        /* Atur lebar tabel agar tetap responsif di ponsel dan PC */
        @media (max-width: 767px) {
            .table-responsive {
                width: 100%;
                margin-bottom: 15px;
                overflow-y: hidden;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #ddd;
            }

            .table-responsive>.table {
                margin-bottom: 0;
            }

            .table-responsive>.table>thead>tr>th,
            .table-responsive>.table>tbody>tr>th,
            .table-responsive>.table>tfoot>tr>th,
            .table-responsive>.table>thead>tr>td,
            .table-responsive>.table>tbody>tr>td,
            .table-responsive>.table>tfoot>tr>td {
                white-space: nowrap;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('menuutama') ?>">Barus.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url('menuutama') ?>">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url('proses_tiket') ?>">Data Perbaikan</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="content">
            <div class="card-body row">
                <div class="col-12 animate__animated animate__fadeInRight">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card card-lightblue">
                        <div class="card-header">
                            <h2 class="card-title">Cari Perbaikan</h2>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example2">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Tiket</th>
                                            <th>Status Tiket</th>
                                            <th>Detail Perbaikan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        // Urutkan array $tiket berdasarkan ID secara descending
                                        usort($tiket, function ($a, $b) {
                                            return $b->id_tiket - $a->id_tiket;
                                        });
                                        foreach ($tiket as $row) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row->no_tiket ?></td>
                                                <td>
                                                    <?php if ($row->status_tiket == '0') {
                                                        echo '<span class="badge badge-warning">Respon Teknisi...</span>';
                                                    } else if ($row->status_tiket == '1') {
                                                        echo '<span class="badge badge-danger">Proses Perbaikan...</span>';
                                                    } else if ($row->status_tiket == '2') {
                                                        echo '<span class="badge badge-info">Telah diperbaiki...</span>';
                                                    } else {
                                                        echo '<span class="badge badge-success">Selesai...</span>';
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('detail_perbaikan/index/' . $row->no_tiket) ?>" class="btn btn-primary btn-sm">
                                                        <span class="badge">Klik Detail...</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </section>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"></div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark"></aside>

    </div>

    <script src="<?= base_url() ?>assets/back/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/back/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="<?= base_url() ?>assets/back/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>asset/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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

        $(document).ready(function() {
            // Inisialisasi DataTable dengan opsi yang diinginkan
            $("#table1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "pagingType": "simple_numbers", // Jenis paginasi sederhana
                "lengthMenu": [5, 10, 25, 50, 100], // Opsi "Show entries"
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false, // Menyembunyikan elemen "entries"
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>