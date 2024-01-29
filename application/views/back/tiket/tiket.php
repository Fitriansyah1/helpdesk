<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-0">
                </div>
                <div class="col-sm-0">
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-lightblue">
                    <div class="card-header">
                        <h2 class="card-title">Buat Tiket</h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('tiket/save_tiket') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Keluhan</label>
                                <input type="hidden" name="no_tiket" value="<?= $no_tiket ?>" class="form-control">
                                <input type="text" name="judul_tiket" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="deskripsi" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nama Komputer</label>
                                <select name="komputer_id" class="form-control">
                                    <option value="">--Pilih Komputer--</option>
                                    <?php foreach ($komputer as $key => $row) { ?>
                                        <option value="<?= $row->komputer ?>"><?= $row->komputer ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Komputer</label>
                                <textarea name="deskripsi_komputer" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Cadangan</label>
                                <select name="nama_cadangan" class="form-control">
                                    <option value="">--Pilih Cadangan--</option>
                                    <?php foreach ($cadangan as $key => $row) { ?>
                                        <option value="<?= $row->nama_cadangan ?>"><?= $row->nama_cadangan ?></option>
                                    <?php  } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Dari Unit</label>
                                <select name="unit_id" class="form-control">
                                    <option value="">--Pilih Unit--</option>
                                    <?php foreach ($unit as $key => $row) { ?>
                                        <option value="<?= $row->unit ?>"><?= $row->unit ?></option>
                                    <?php  } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Telpon</label>
                                <input type="text" name="telpon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label><br>
                                <input type="file" name="gambar_tiket"></input>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

</div>

</div>
</div>
</section>

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
        $(document).on('click', '#reply-message', function() {
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