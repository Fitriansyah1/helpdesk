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
                        <h3 class="card-title">Edit Karyawan <?= $user->username ?></h3>
                        <a href="<?= base_url('karyawan') ?>" class="btn btn-warning btn-sm float-right">Kembali </a>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <form action="<?= base_url('karyawan/update_karyawan') ?>" method="POST">
                            <div class="input-group mb-3">
                                <input type="hidden" name="id_user" value="<?= $user->id_user ?>" class="form-control">
                                <div class="input-group-append">
                                    <div class="">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="username" value="<?= $user->username   ?>" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="email" value="<?= $user->email ?>" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select name="status_user" class="form-control">
                                    <option value="<?= $user->status_user ?>">Status User</option>
                                    <option value="1" <?= $user->status_user ==  '1' ? 'selected' : '' ?>>Active</option>
                                    <option value="0" <?= $user->status_user ==  '0' ? 'selected' : '' ?>>Non Active</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select name="level_user" class="form-control">
                                    <option value="">Level User</option>
                                    <option value="1" <?= $user->level_user ==  '1' ? 'selected' : '' ?>>SUPER ADMIN</option>
                                    <option value="2" <?= $user->level_user ==  '2 ' ? 'selected' : '' ?>>ADMIN</option>
                                    <option value="3" <?= $user->level_user ==  '3 ' ? 'selected' : '' ?>>TEKNISI</option>

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>