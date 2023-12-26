    <link rel="stylesheet" href="<?= base_url() ?>asset/animate/animate.css" />
    <div class="content-wrapper animate__animated animate__fadeIn">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark animate__animated animate__fadeInDown">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div id="welcome-message" class="alert alert-success animate__animated animate__fadeInUp">
                    <span class="welcome-icon">&#x1F44B;</span>
                    Selamat Datang, <b><?= $this->session->username; ?></b>
                </div>
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 animate__animated animate__fadeIn">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-clock"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Menunggu Respon</span>
                                <span class="info-box-number"><?= $tiket_wait ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3 animate__animated animate__fadeIn">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-tasks"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Proses Pengerjaan</span>
                                <span class="info-box-number"><?= $tiket_proses ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3 animate__animated animate__fadeIn">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Tiket Sukses</span>
                                <span class="info-box-number"><?= $tiket_tutup ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3 animate__animated animate__fadeIn">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">User</span>
                                <span class="info-box-number"><?= $user ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script>
        // Function untuk menampilkan pesan selamat datang
        function showWelcomeMessage() {
            document.getElementById("welcome-message").style.display = "block";
        }

        // Function untuk menyembunyikan pesan selamat datang
        function hideWelcomeMessage() {
            document.getElementById("welcome-message").style.display = "none";
        }

        // Menampilkan pesan selamat datang secara awal
        showWelcomeMessage();

        // Menetapkan waktu tunggu untuk menyembunyikan pesan selamat datang setelah 2 detik (2000 milidetik)
        setTimeout(function() {
            hideWelcomeMessage();
        }, 2000); // Sesuaikan waktu sesuai kebutuhan (dalam milidetik)
    </script>