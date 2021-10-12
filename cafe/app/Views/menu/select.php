<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h2><?= $judul ?></h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Data Menu
            </div>
            <div class="panel-body">
            <div class="row">   
                <div class="col-md-2 col-sm-1"> 
                    <a href="<?= base_url('/admin/menu/create')?>"class = "btn btn-primary">+ Tambah Data</a>
                </div>
                <div class="col-md-2 col-sm-2">
                    <form action="<?= base_url('/admin/menu/read');?>" method="get">
                        <?= view_cell('\App\Controllers\Admin\Menu::option')?>   
                    </form>
                </div>
            </div> <br>
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
                            <th>Menu</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Deskripsi</th> 
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach($menu as $key => $value):?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['menu'] ?></td>
                            <td><img style="width:70px;" src="<?= base_url('/upload/'.$value['gambar'].'')?>" alt=""></td>
                            <td><?= number_format($value['harga'])?></td>
                            <td><?= $value['deskripsi'] ?></td>
                            <td>
                                <a href="<?= base_url()?>/admin/menu/find/<?= $value['id']?>" class="btn btn-warning">Ubah</a>
                                <a href="<?= base_url()?>/admin/menu/delete/<?= $value['id']?>" class="btn btn-danger">Hapus</a>
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