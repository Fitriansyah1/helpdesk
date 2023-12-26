<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>assets/back/dist/img/baru.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BARUS.COM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/back/dist/img/oyen2.jpeg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->username; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- ... (Bagian lain tetap sama) ... -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php if (is_it()) { ?>
                    <li class="nav-header">DATA MASTER</li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>
                                Master Karyawan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview treeview-menu">

                            <li class="nav-item">
                                <a href="<?= base_url('karyawan') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Karyawan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-ticket-alt"></i> <!-- Mengganti ikon Master Karyawan -->
                            <p>
                                Tiket
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('Datatiket') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Tiket</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('komputer') ?>" class="nav-link">
                            <i class="nav-icon fas fa-desktop"></i>
                            <p>Data Komputer</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('unit') ?>" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Data Unit</p>
                        </a>
                    </li>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('komputer') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Komputer</p>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-header">LAPORAN</li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('laporan') ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i> <!-- Mengganti ikon Laporan -->
                            <p>
                                Laporan
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">PROFILE </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('karyawan/profile/' . $this->session->id_user); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i> <!-- Mengganti ikon Profile User -->
                            <p>
                                Profile User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('menuutama') ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i> <!-- Tetap menggunakan ikon Logout -->
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                <?php } elseif (is_admin()) { ?>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-ticket-alt"></i> <!-- Mengganti ikon Master Karyawan -->
                            <p>
                                Tiket
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item treeview-menu">
                                <a href="<?= base_url('tiket') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Tiket</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('Datatiket') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Tiket</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('komputer') ?>" class="nav-link">
                            <i class="nav-icon fas fa-desktop"></i>
                            <p>Data Komputer</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('unit') ?>" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Data Unit</p>
                        </a>
                    </li>
                    <li class="nav-header">LAPORAN</li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('laporan') ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i> <!-- Mengganti ikon Laporan -->
                            <p>
                                Laporan
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">PROFILE </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('karyawan/profile/' . $this->session->id_user); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i> <!-- Mengganti ikon Profile User -->
                            <p>
                                Profile User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('menuutama') ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i> <!-- Tetap menggunakan ikon Logout -->
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-ticket-alt"></i> <!-- Mengganti ikon Master Karyawan -->
                            <p>
                                Tiket
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('Datatiket') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Tiket</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">PROFILE </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('karyawan/profile/' . $this->session->id_user); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i> <!-- Mengganti ikon Profile User -->
                            <p>
                                Profile User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('menuutama') ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i> <!-- Tetap menggunakan ikon Logout -->
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script>
    // Fungsi untuk menangani peristiwa klik pada menu
    function handleMenuClick(element) {
        // Menghapus kelas "active" dari semua elemen dengan class "nav-link"
        var menuItems = document.querySelectorAll('.nav-link');
        menuItems.forEach(function(item) {
            item.classList.remove('active');
        });

        // Menambahkan kelas "active" pada elemen yang diklik
        element.classList.add('active');

        // Menyimpan status aktif di localStorage
        localStorage.setItem('activeMenu', element.getAttribute('href'));
    }

    // Menetapkan status aktif dari localStorage saat halaman dimuat
    window.onload = function() {
        var activeMenu = localStorage.getItem('activeMenu');
        if (activeMenu) {
            var activeElement = document.querySelector('.nav-link[href="' + activeMenu + '"]');
            if (activeElement) {
                activeElement.classList.add('active');

                // Buka menu treeview induk jika ini submenu
                var parentTreeview = activeElement.closest('.has-treeview');
                if (parentTreeview) {
                    var parentLink = parentTreeview.querySelector('.nav-link');
                    parentLink.classList.add('active');
                }
            }
        }
    };

    // Menambahkan peristiwa klik pada setiap elemen dengan class "nav-link"
    var menuLinks = document.querySelectorAll('.nav-link');
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            handleMenuClick(link);
        });
    });
</script>