<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h2 clas><?= $judul ?></h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Data Karyawan
            </div>
            <div class="panel-body">
            <a href="<?= base_url('/admin/user/create')?>"class = "btn btn-primary">+ Tambah Data</a>
            <br><br>
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
                            <th>User</th> 
                            <th>Email</th>
                            <th>Posisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach($user as $key => $value):?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['user'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['level'] ?></td>
                            <?php if($value['aktif']==1)$aktif="Aktif"; else $aktif="Tidak Aktif"; ?>
                            <td>
                                <a href="<?= base_url()?>/admin/user/update/<?= $value['id']?>/<?= $value['aktif']?>" class="btn btn-primary"><?= $aktif ?></a>
                            </td> 
                            <td>
                                <a href="<?= base_url()?>/admin/user/find/<?= $value['id']?>" class="btn btn-warning">Ubah</a>
                                <a href="<?= base_url()?>/admin/user/delete/<?= $value['id']?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>