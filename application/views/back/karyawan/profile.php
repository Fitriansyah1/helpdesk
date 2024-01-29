 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Profile</h1>
                 </div>
                 <div class="col-sm-6">
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-4">

                     <!-- Profile Image -->
                     <div class="card card-primary card-outline">
                         <div class="card-body box-profile">
                             <br>
                             <h2 class="text-muted text-center"><?= $this->session->username; ?></h2>
                             <br>
                             <ul class="list-group list-group-unbordered mb-3">
                                 <li class="list-group-item">
                                     <b>Username</b> <a class="float-right"><?= $this->session->username; ?></a>
                                 </li>
                                 <li class="list-group-item">
                                     <b>Email</b> <a class="float-right"><?= $this->session->email; ?></a>
                                 </li>
                                 <li class="list-group-item">
                                     <strong>Level</strong>
                                     <a class="float-right">
                                         <?php
                                            $levelMapping = array(
                                                '1' => 'SUPER ADMIN',
                                                '2' => 'ADMIN',
                                                '3' => 'TEKNISI'
                                            );

                                            $level_user = $this->session->level_user;

                                            echo $levelMapping[$level_user];
                                            ?>
                                         <a />
                                 </li>
                             </ul>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->

                     <!-- About Me Box -->
                     <div class="card card-primary">

                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
                 <div class="col-md-8">
                     <div class="card">
                         <div class="card-header p-2">
                             <ul class="nav nav-pills">
                                 <li class="nav-item"><a class="nav-link">Setting Profile</a></li>
                             </ul>
                         </div><!-- /.card-header -->
                         <div class="card-body">
                             <?= $this->session->flashdata('message'); ?>
                             <?= $this->session->flashdata('hapus'); ?>
                             <form action="<?= base_url('karyawan/update_profile') ?>" method="POST">
                                 <div class="input-group mb-3">
                                     <input type="hidden" name="id_user" value="<?= $karyawan->id_user ?>">
                                     <div class="input-group-append">
                                         <div class="">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="input-group mb-3">
                                     <input type="text" name="username" value="<?= $karyawan->username ?>" class="form-control" placeholder="Username">
                                     <div class="input-group-append">
                                         <div class="input-group-text">
                                             <span class="fas fa-user"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="input-group mb-3">
                                     <input type="text" name="email" value="<?= $karyawan->email ?>" value="<?= set_value('email') ?>" class="form-control" placeholder="Email">
                                     <div class="input-group-append">
                                         <div class="input-group-text">
                                             <span class="fas fa-envelope"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="input-group mb-3">
                                     <input type="password" name="password" class="form-control" placeholder="Password">
                                     <div class="input-group-append">
                                         <div class="input-group-text">
                                             <span class="fas fa-lock"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="input-group mb-3">
                                     <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                     <div class="input-group-append">
                                         <div class="input-group-text">
                                             <span class="fas fa-lock"></span>
                                         </div>
                                     </div>
                                 </div>
                                 <button type="submit" class="btn btn-info btn-sm">Update</button>
                                 <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                             </form>
                         </div>
                         <!-- /.tab-pane -->
                     </div>
                     <!-- /.tab-content -->
                 </div><!-- /.card-body -->
             </div>
             <!-- /.nav-tabs-custom -->
         </div>
         <!-- /.col -->
 </div>
 <!-- /.row -->
 </div><!-- /.container-fluid -->
 </section>
 <!-- /.content -->
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