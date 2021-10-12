<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h2 clas><?= $judul ?></h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Data Kategori
            </div>
            <div class="panel-body">
            <a href="<?= base_url('/admin/kategori/create')?>"class = "btn btn-primary">+ Tambah Data</a>
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
                            <th>Kategori</th> 
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach($kategori as $key => $value):?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['kategori'] ?></td>
                            <td>
                                <a href="<?= base_url()?>/admin/kategori/find/<?= $value['id']?>" class="btn btn-warning">Ubah</a>
                                <a href="<?= base_url()?>/admin/kategori/delete/<?= $value['id']?>" class="btn btn-danger">Hapus</a>
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