<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Kunjungan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Kunjungan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Kunjungan</h5>

                            <p class="card-text">
                            <form method="post" action="<?= base_url('kunjungan/tambah'); ?>">

                                <select name="anak_id" id="anak_id" class="form-control" required>
                                    <option value="">-- Pilih Nama Anak --</option>
                                    <?php foreach ($anak as $a): ?>
                                        <option value="<?= $a['id_anak']; ?>">
                                            <?= $a['name']; ?>
                                        </option>
                                    <?php endforeach; ?>

                                </select>

                                <div class="mb-3">
                                    <label class="form-label">Nama Orang Tua</label>
                                    <input type="text" id="nama_ortu" class="form-control" readonly>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Tanggal Kunjungan</label>
                                    <input type="date" class="form-control" name="tgl_kunjungan">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Fasilitas</label>
                                    <select name="fasilitas" class="form-control">
                                        <option value="vaksin">Vaksin</option>
                                        <option value="konsultasi">Konsultasi</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('kunjungan'); ?>" class="btn btn-secondary">Kembali</a>

                            </form>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->