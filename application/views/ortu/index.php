<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Orang Tua</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Orang Tua</li>
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
                                <?=  $this->session->flashdata('message') ?>
                                <?php endif ?>
                                
                            <a href="<?= base_url('ortu/tambah') ?>" class="btn btn-labeled btn-primary">
                                <span class="btn-label">
                                    <i class="fas fa-plus"> </i>
                                </span>
                                Tambah Data
                            </a>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Ibu</th>
                                        <th scope="col">Nama Ayah</th>
                                        <th scope="col">Hubungan</th>
                                        <th scope="col">Telp</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($list_ortu as $ortu) : ?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= $ortu['name_ibu'] ?></td>
                                            <td><?= $ortu['name_ayah'] ?></td>
                                            <td><?= $ortu['hubungan'] ?></td>
                                            <td><?= $ortu['telp'] ?></td>
                                            <td><?= $ortu['alamat'] ?></td>
                                            <td>
                                                <a href="<?= base_url('ortu/edit/') ?><?= $ortu['id_ortu'] ?>"><span class="badge bg-primary">Edit</span></a>
                                                <a href="<?= base_url('ortu/hapus/') ?><?= $ortu['id_ortu'] ?>"><span class="badge bg-danger">Hapus</span></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
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