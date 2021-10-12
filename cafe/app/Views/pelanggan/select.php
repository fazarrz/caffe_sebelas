<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h2 clas><?= $judul ?></h2>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Data Pelanggan
            </div>
            <div class="panel-body">
            <?php
                if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                    <?= session()->getFlashdata('success');?>
                </div>
            <?php } ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pelanggan</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach($pelanggan as $key => $value):?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['pelanggan'] ?></td>
                            <td><?= $value['alamat'] ?></td>
                            <td><?= $value['no_telp'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td>
                                <a href="<?= base_url()?>/admin/pelanggan/find/<?= $value['id']?>" class="btn btn-warning">Ubah</a>
                                <a href="<?= base_url()?>/admin/pelanggan/delete/<?= $value['id']?>" class="btn btn-danger">Hapus</a>
                            </td>
                            <?php
                                if ($value['aktif']==1) {
                                    $aktif = "AKTIF";
                                } else {
                                    $aktif = "NON AKTIF";
                                }
                                
                            ?>
                            <td>
                                <a href="<?= base_url()?>/admin/pelanggan/update/<?= $value['id']?>/<?= $value['aktif']?>" class="btn btn-primary"><?= $aktif ?></a>
                            </td>        
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved.
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>