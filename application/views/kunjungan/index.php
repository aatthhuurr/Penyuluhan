<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kunjungan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Kunjungan</li>
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

                            <a href="<?= base_url('kunjungan/tambah') ?>" class="btn btn-labeled btn-primary">
                                <span class="btn-label">
                                    <i class="fas fa-plus"> </i>
                                </span>
                                Tambah Data Kunjungan
                            </a>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Anak</th>
                                        <th scope="col">Nama Orang Tua</th>
                                        <th scope="col">Tanggal Kunjungan</th>
                                        <th scope="col">Fasilitas</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($list_kunjungan as $kunjungan): ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $kunjungan['name']; ?></td>
                                            <td><?= $kunjungan['nama_ortu']; ?></td>
                                            <td><?= $kunjungan['tgl_kunjungan']; ?></td>
                                            <td><?= $kunjungan['fasilitas']; ?></td>
                                            <td>
                                                <a href="<?= base_url('kunjungan/ubah/' . $kunjungan['id_kunjungan']); ?>" class="badge bg-primary">Ubah</a>
                                                <a href="<?= base_url('kunjungan/hapus/' . $kunjungan['id_kunjungan']); ?>" class="badge bg-danger"
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