      <!-- jQuery -->
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
          $.widget.bridge('uibutton', $.ui.button)
      </script>
      <style>
          /* Tambahkan blok gaya ini ke file HTML atau file CSS eksternal Anda */
          .main-sidebar.sidebar-dark-primary {
              background-color: #2c3e50;
              /* Warna biru gelap sedikit untuk sidebar */
          }

          .main-sidebar.sidebar-dark-primary a.brand-link,
          .main-sidebar.sidebar-dark-primary a.brand-text {
              color: #ffffff !important;
              /* Warna teks untuk brand menjadi putih */
          }

          .main-sidebar.sidebar-dark-primary .user-panel .info a {
              color: #ffffff !important;
              /* Warna teks untuk user info menjadi putih */
          }

          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item .nav-link {
              color: #ffffff !important;
              /* Warna teks untuk menu menjadi putih */
          }

          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active {
              background-color: #34495e;
              /* Warna latar belakang untuk menu aktif */
          }

          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item.has-treeview .nav-link.active:before {
              background-color: #ffffff;
              /* Warna ikon panah submenu aktif menjadi putih */
          }

          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active {
              background-color: #3c8dbc;
              /* Warna latar belakang untuk menu aktif */
              color: #ffffff !important;
              /* Warna teks untuk menu aktif menjadi putih */
          }

          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active:before {
              background-color: #ffffff;
              /* Warna ikon panah submenu aktif menjadi putih */
          }

          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active>.right {
              color: #ffffff !important;
              /* Warna ikon panah submenu aktif menjadi putih */
          }

          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active>.right,
          .main-sidebar.sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active>.right:before {
              background-color: #ffffff;
              /* Warna ikon panah submenu aktif menjadi putih */
          }
      </style>

      <style>
          /* Tambahkan blok gaya ini ke file HTML atau file CSS eksternal Anda */
          .main-header.navbar {
              background-color: #17a2b8;
              /* Warna biru agak terang untuk navbar */
          }

          .main-header.navbar a.nav-link {
              color: #ffffff !important;
              /* Warna teks untuk link navbar menjadi putih */
          }

          .main-header.navbar form.form-inline .input-group input.form-control-navbar {
              background-color: #ffffff;
              /* Warna latar belakang untuk input search */
              color: #39cccc;
              /* Warna teks untuk input search */
          }

          .main-header.navbar form.form-inline .input-group-append button.btn.btn-navbar {
              background-color: #39cccc;
              /* Warna tombol search */
              color: #ffffff;
              /* Warna teks untuk tombol search */
          }
      </style>

      <!-- Bootstrap 4 -->
      <script src="<?= base_url() ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="<?= base_url() ?>assets/back/plugins/chart.js/Chart.min.js"></script>

      <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <!-- DataTables -->

      <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
      <!-- Sparkline -->
      <script src="<?= base_url() ?>assets/back/plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <!-- jQuery Knob Chart -->
      <script src="<?= base_url() ?>assets/back/plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="<?= base_url() ?>assets/back/plugins/moment/moment.min.js"></script>
      <script src="<?= base_url() ?>assets/back/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="<?= base_url() ?>assets/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

      <!-- overlayScrollbars -->
      <script src="<?= base_url() ?>assets/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?= base_url() ?>assets/back/dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?= base_url() ?>assets/back/dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?= base_url() ?>assets/back/dist/js/demo.js"></script>

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
      <!-- page script -->
      <script>
          $(document).ready(function() {
              // Inisialisasi DataTable dengan opsi yang diinginkan
              $("#table1").DataTable({
                  "responsive": true,
                  "autoWidth": false,
                  "pagingType": "simple_numbers", // Jenis paginasi sederhana
                  "lengthMenu": [5, 10, 25, 50, 100], // Opsi "Show entries"
                  "buttons": ["copy", "csv", "excel", "pdf", "print"]
              }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
              $('#table2').DataTable({
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
      </body>

      </html>