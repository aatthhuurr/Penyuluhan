<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Data Orang Tua</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Data Orang Tua</li>
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
                            <h5 class="card-title">Ubah Orang Tua</h5>

                            <p class="card-text">
                            <form method="post">

                                <div class="mb-3">
                                    <label class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" name="nama_ibu"
                                        value="<?= $ortu['nama_ibu']; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" name="nama_ayah"
                                        value="<?= $ortu['nama_ayah']; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Hubungan</label>
                                    <select class="form-control" name="hubungan">
                                        <option value="Kandung" <?= ($ortu['hubungan'] == 'Kandung') ? 'selected' : ''; ?>>
                                            Kandung
                                        </option>
                                        <option value="Bukan Kandung" <?= ($ortu['hubungan'] == 'Bukan Kandung') ? 'selected' : ''; ?>>
                                            Bukan Kandung
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="telp"
                                        value="<?= $ortu['telp']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="3"><?= $ortu['alamat']; ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Ubah</button>
                                <a href="<?= base_url('ortu'); ?>" class="btn btn-secondary">Kembali</a>

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