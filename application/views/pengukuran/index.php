<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pengukuran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengukuran</li>
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
                            <h5 class="card-title"></h5>
                            <?php if ($this->session->flashdata('message')) : ?>
                                <?= $this->session->flashdata('message') ?>
                            <?php endif ?>

                            <a href="<?= base_url('pengukuran/tambah') ?>" class="btn btn-labeled btn-primary">
                                <span class="btn-label">
                                    <i class="fas fa-plus"> </i>
                                </span>
                                Tambah Data Pengukuran
                            </a>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Anak</th>
                                        <th>Nama Orang Tua</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>Tanggal Ukur</th>
                                        <th>BB</th>
                                        <th>TB</th>
                                        <th>LK</th>
                                        <th>Vaksin</th>
                                        <th>Status Gizi</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($list_pengukuran as $pengukuran): ?>
                                        <tr>
                                            <th><?= $no++; ?></th>
                                            <td><?= $pengukuran['nama_anak']; ?></td>
                                            <td><?= $pengukuran['nama_ortu']; ?></td>
                                            <td><?= $pengukuran['tgl_kunjungan']; ?></td>
                                            <td><?= $pengukuran['tgl_ukur']; ?></td>
                                            <td><?= $pengukuran['bb']; ?></td>
                                            <td><?= $pengukuran['tb']; ?></td>
                                            <td><?= $pengukuran['lk']; ?></td>
                                            <td><?= $pengukuran['vaksin']; ?></td>
                                            <td><?= $pengukuran['status_gizi']; ?></td>
                                            <td>
                                                <a href="<?= base_url('pengukuran/ubah/' . $pengukuran['id_ukur']); ?>" class="badge bg-primary">Ubah</a>
                                                <a href="<?= base_url('pengukuran/hapus/' . $pengukuran['id_ukur']); ?>" class="badge bg-danger"
                                                    onclick="return confirm('Yakin hapus data?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>

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