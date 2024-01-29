     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

     <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/fontawesome-free/css/all.min.css">

     <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
     <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

     <link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css?v=3.2.0">
     <?php if (is_it()) { ?>
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
                                 <h3 class="card-title">Data Perbaikan</h3>
                                 <a href="<?= base_url('tiket/add_tiket') ?>" class="btn btn-info btn-sm float-right mr-1" style="margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Data</a>
                             </div>
                             <div class="card-body">
                                 <?= $this->session->flashdata('message'); ?>
                                 <?= $this->session->flashdata('hapus'); ?>
                                 <table class="table table-bordered" id="table2">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>No Tiket</th>
                                             <th>Keluhan</th>
                                             <th>Nama Komputer</th>
                                             <th>Dari Unit</th>
                                             <th>Status Tiket</th>
                                             <th>Action</th>
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
                                                 <td><?= $row->judul_tiket ?></td>
                                                 <td><?= $row->komputer_id ?></td>
                                                 <td><?= $row->unit_id ?></td>
                                                 <td>
                                                     <?php if ($row->status_tiket == '0') {
                                                            echo '<span class="badge badge-warning">Respon Teknisi...</span>';
                                                        } else if ($row->status_tiket == '1') {
                                                            echo '<span class="badge badge-info">Proses Perbaikan...</span>';
                                                        } else if ($row->status_tiket == '2') {
                                                            echo '<span class="badge badge-success">Telah diperbaiki...</span>';
                                                        } else {
                                                            echo '<span class="badge badge-danger">Selesai...</span>';
                                                        }
                                                        ?>
                                                 </td>
                                                 <td>
                                                     <a href="<?= base_url('tiket/detail_tiket/' . $row->no_tiket) ?>" class="btn btn-primary btn-sm">
                                                         <i class="fa fa-eye"></i>
                                                     </a>
                                                     <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('tiket/delete_tiket/' . $row->id_tiket) ?>" class="btn btn-danger btn-sm">
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
     <?php } elseif (is_admin()) { ?>
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
                                 <h3 class="card-title">Data Tiket</h3>
                                 <a href="<?= base_url('tiket/add_tiket') ?>" class="btn btn-info btn-sm float-right mr-1" style="margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Data</a>
                             </div>
                             <div class="card-body">
                                 <?= $this->session->flashdata('message'); ?>
                                 <?= $this->session->flashdata('hapus'); ?>
                                 <table id="table2" class="table table-bordered table-striped">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>No Tiket</th>
                                             <th>Keluhan</th>
                                             <th>Nama Komputer</th>
                                             <th>Dari Unit</th>
                                             <th>Status Tiket</th>
                                             <th>Action</th>
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
                                                 <td><?= $row->judul_tiket ?></td>
                                                 <td><?= $row->komputer_id ?></td>
                                                 <td><?= $row->unit_id ?></td>
                                                 <td>
                                                     <?php
                                                        if ($row->status_tiket == '0') {
                                                            echo '<span class="badge badge-warning">Respon Teknisi...</span>';
                                                        } else if ($row->status_tiket == '1') {
                                                            echo '<span class="badge badge-info">Proses Perbaikan...</span>';
                                                        } else if ($row->status_tiket == '2') {
                                                            echo '<span class="badge badge-success">Telah diperbaiki...</span>';
                                                        } else {
                                                            echo '<span class="badge badge-danger">Selesai...</span>';
                                                        }
                                                        ?>
                                                 </td>
                                                 <td>
                                                     <a href="<?= base_url('tiket/detail_tiket/' . $row->no_tiket) ?>" class="btn btn-primary btn-sm">
                                                         <i class="fa fa-eye"></i>
                                                     </a>
                                                     <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?');" href="<?= base_url('tiket/delete_tiket/' . $row->id_tiket) ?>" class="btn btn-danger btn-sm">
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
     <?php } else { ?>
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
                                 <h3 class="card-title">Data Tiket</h3>
                             </div>
                             <div class="card-body">
                                 <?= $this->session->flashdata('message'); ?>
                                 <?= $this->session->flashdata('hapus'); ?>
                                 <table class="table table-bordered" id="table2">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>No Tiket</th>
                                             <th>Keluhan</th>
                                             <th>Nama Komputer</th>
                                             <th>Status Tiket</th>
                                             <th>Konfirmasi</th>
                                             <th>Detail Tiket</th>
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
                                                 <td><?= $row->judul_tiket ?></td>
                                                 <td><?= $row->komputer_id ?></td>
                                                 <td>
                                                     <?php if ($row->status_tiket == '0') {
                                                            echo '<span class="badge badge-warning">Respon Teknisi...</span>';
                                                        } else if ($row->status_tiket == '1') {
                                                            echo '<span class="badge badge-info">Proses Perbaikan...</span>';
                                                        } else if ($row->status_tiket == '2') {
                                                            echo '<span class="badge badge-success">Telah diperbaiki...</span>';
                                                        } else {
                                                            echo '<span class="badge badge-danger">Selesai...</span>';
                                                        }
                                                        ?>
                                                 </td>
                                                 <td>
                                                     <?php
                                                        if ($row->status_tiket == '0') {
                                                            echo '<a href="javascript:void(0);" data-toggle="modal" data-target="#modal_tiket" id="select_tiket"
                                            data-id_tiket="' . $row->id_tiket . '"
                                            data-status_tiket="' . $row->status_tiket . '"
                                            class="btn btn-success btn-sm">
                                            Konfirmasi
                                            </a>';
                                                        } else if ($row->status_tiket == '1') {
                                                            echo '<a href="javascript:void(0);" data-toggle="modal" data-target="#modal_repl" id="repl-message"
                                            data-tiket_id="' . $row->id_tiket . '"
                                            data-id_tiket_id="' . $row->id_tiket . '"
                                            data-judul_tiket="' . $row->judul_tiket . '"
                                            data-deskripsi="' . $row->deskripsi . '"
                                            class="btn btn-warning btn-sm">
                                            Balasan
                                            </a>';
                                                        } else if ($row->status_tiket == '2') {
                                                            echo '<a href="javascript:void(0);" data-toggle="modal" data-target="#modalClosetiket" id="ctiket"
                                            data-closetiket="' . $row->id_tiket . '"
                                            data-closestatus="' . $row->status_tiket . '"
                                            class="btn btn-primary btn-sm">
                                            Tutup
                                            </a>';
                                                        } else {
                                                            echo '<a href="javascript:void(0);" class="btn btn-danger btn-sm">
                                            Selesai
                                            </a>';
                                                        }
                                                        ?>
                                                 <td>
                                                     <a href="<?= base_url('tiket/detail_tiket/' . $row->no_tiket) ?>" class="btn btn-primary btn-sm">
                                                         <i class="fa fa-eye"></i>
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
     <?php } ?>

     <div class="modal fade" id="modal_tiket">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Yakin Konfirmasi Tiket?</h5>
                     <button class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="<?= base_url('tiket/save_tiket_waiting') ?>" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                             <input type="hidden" name="id_tiket" id="id_tiket" class="form-control">
                             <input type="hidden" name="status_tiket" value="1" class="form-control">
                             <div class="form-group">
                                 <label for="time">Mulai Perbaikan :</label>
                                 <input type="datetime-local" id="time" name="waktu_mulai" class="form-control">
                             </div>
                             <!-- Buttons for Save and Reset -->
                             <button type="submit" class="btn btn-primary btn-sm">Save</button>
                             <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>

     <div class="modal fade" id="modal_repl">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Form Tanggapan</h5>
                     <button class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="<?= base_url('tiket/save_tanggapan') ?>" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                             <input type="hidden" name="id_tiket" id="id_tiket_id" class="form-control">
                             <input type="hidden" name="tiket_id" id="tiket_id" class="form-control">
                             <div class="form-group">
                                 <label for="">Yang Diperbaiki</label>
                                 <textarea name="tanggapan" class="form-control"></textarea>
                             </div>
                             <div class="form-group">
                                 <label>No Tiket</label>
                                 <select name="tiket_no" class="form-control">
                                     <option value="">--Pilih No Tiket--</option>
                                     <?php foreach ($tiket as $key => $row) { ?>
                                         <option value="<?= $row->no_tiket ?>"><?= $row->no_tiket ?></option>
                                     <?php  } ?>

                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="">Oleh Teknisi</label>
                                 <input name="nama_teknisi" class="form-control"></input>
                             </div>
                             <div class="form-group">
                                 <label for="">Waktu Pengerjaan/Jam</label>
                                 <input name="waktu_pengerjaan" class="form-control"></input>
                             </div>
                             <div class="form-group">
                                 <label for="">Gambar Tanggapan</label>
                                 <input type="file" name="gambar_tanggapan" class="form-control"></input>
                             </div>

                             <button type="submit" class="btn btn-primary btn-sm">Reply Message</button>
                             <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>

     <div class="modal fade" id="modalClosetiket">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Yakin Tutup Tiket?</h5>
                     <button class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form action="<?= base_url('tiket/save_close_tiket') ?>" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                             <input type="hidden" name="id_tiket" id="closetiket" class="form-control">
                             <input type="hidden" name="status_tiket" value="3" class="form-control">

                             <button type="submit" class="btn btn-primary btn-sm">Tutup Tiket</button>
                             <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>

     <script>
         $(document).ready(function() {
             $(document).on('click', '#select_tiket', function() {
                 var id_tiket = $(this).data('id_tiket');
                 var status_tiket = $(this).data('status_tiket');

                 $('#id_tiket').val(id_tiket);
                 $('#status_tiket').val(status_tiket);
             });
         });
         $(document).ready(function() {
             $(document).on('click', '#repl-message', function() {
                 var id_tiket = $(this).data('id_tiket');
                 var id_tiket_id = $(this).data('id_tiket_id');
                 var judul_tiket = $(this).data('judul_tiket');
                 var deskripsi = $(this).data('deskripsi');

                 $('#id_tiket').val(id_tiket);
                 $('#id_tiket_id').val(id_tiket_id);
                 $('#judul_tiket').val(judul_tiket);
                 $('#deskripsi').val(deskripsi);
             });
             $(document).on('click', '#ctiket', function() {
                 var closetiket = $(this).data('closetiket');
                 var closestatus = $(this).data('closestatus');

                 $('#closetiket').val(closetiket);
                 $('#closestatus').val(closestatus);

             });
         });
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
             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
             $('#example2').DataTable({
                 "paging": true,
                 "lengthChange": true,
                 "searching": true,
                 "ordering": true,
                 "info": true,
                 "autoWidth": false,
                 "responsive": true,
             });
         });
     </script>