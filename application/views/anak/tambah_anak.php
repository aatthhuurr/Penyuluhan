<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Anak</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Anak</li>
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
                            <h5 class="card-title">Tambah Anak</h5>

                            <p class="card-text">
                            <form method="post" action="<?= base_url('anak/tambah'); ?>">

                                <div class="mb-3">
                                    <label class="form-label">Nama Anak</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NIK</label>
                                    <input type="text" class="form-control" name="nik" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Orang Tua</label>
                                    <select name="ortu_id" class="form-control" required>
                                        <option value="">-- Pilih Orang Tua --</option>
                                        <?php foreach ($ortu as $o): ?>
                                            <option value="<?= $o['id_ortu']; ?>">
                                                <?= $o['name_ibu']; ?> / <?= $o['name_ayah']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Berat Badan Lahir (kg)</label>
                                    <input type="number" step="0.01" class="form-control" name="bb_lahir">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tinggi Badan Lahir (cm)</label>
                                    <input type="number" class="form-control" name="tb_lahir">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir">
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('anak'); ?>" class="btn btn-secondary">Kembali</a>

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