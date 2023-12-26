    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css?v=3.2.0">
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
                            <h3 class="card-title">Data Karyawan</h3>
                            <a href="<?= base_url('karyawan/add_karyawan') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                            <a href="<?= base_url('karyawan/cetak') ?>" class="btn btn-primary btn-sm float-right">Cetak</a>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <?= $this->session->flashdata('hapus'); ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Level User</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($karyawan as $row) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->username ?></td>
                                            <td>
                                                <?php if ($row->status_user == '1') {
                                                    echo 'Active';
                                                } else {
                                                    echo 'Non Active';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($row->level_user == '1') {
                                                    echo 'SUPER ADMIN';
                                                } else if ($row->level_user == '2') {
                                                    echo 'ADMIN';
                                                } else {
                                                    echo 'TEKNISI';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('karyawan/edit_karyawan/' . $row->id_user) ?>" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('Karyawan/delete_karyawan/' . $row->id_user) ?>" class="btn btn-danger btn-sm">
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
    <script src="<?= base_url() ?>assets/back/plugins/jquery/jquery.min.js"></script>

    <script src="<?= base_url() ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

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

    <script src="<?= base_url() ?>assets/back/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="<?= base_url() ?>assets/back/dist/js/demo.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>