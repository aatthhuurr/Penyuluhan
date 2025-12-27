<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Pengukuran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pengukuran</li>
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
                            <h5 class="card-title">Tambah Pengukuran</h5>

                            <p class="card-text">
                            <form method="post" action="<?= base_url('pengukuran/tambah'); ?>">

                                <div class="mb-3">
                                    <label class="form-label">Kunjungan</label>
                                    <select name="kunjungan_id" class="form-control" required>
                                        <option value="">-- Pilih Kunjungan --</option>
                                        <?php foreach ($kunjungan as $k): ?>
                                            <option value="<?= $k['id_kunjungan']; ?>">
                                                <?= $k['nama_anak']; ?> |
                                                <?= $k['name_ayah']; ?> / <?= $k['name_ibu']; ?> |
                                                <?= date('d-m-Y', strtotime($k['tgl_kunjungan'])); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>


                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tanggal Ukur</label>
                                    <input type="date" name="tgl_ukur" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Berat Badan (BB)</label>
                                    <input type="number" step="0.1" name="bb" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tinggi Badan (TB)</label>
                                    <input type="number" step="0.1" name="tb" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Lingkar Kepala (LK)</label>
                                    <input type="number" step="0.1" name="lk" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Vaksin</label>
                                    <input type="text" name="vaksin" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status Gizi</label>
                                    <select name="status_gizi" class="form-control">
                                        <option value="Baik">Baik</option>
                                        <option value="Kurang">Kurang</option>
                                        <option value="Buruk">Buruk</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('pengukuran'); ?>" class="btn btn-secondary">Kembali</a>

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