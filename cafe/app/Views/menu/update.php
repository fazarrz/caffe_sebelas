<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2>Menu</h2>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Mengubah Data Menu
            </div>
            <div class="panel-body">
            <?php
                if (!empty(session()->getFlashdata('info'))) { ?>
                    <div class="alert alert-danger">
                    <?= session()->getFlashdata('info');?>
                    </div>
            <?php } ?>

            <form role="form" action="<?= base_url('/admin/menu/update');?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Menu</label>
                    <input type ="text" class="form-control" value="<?= $menu['menu']?>" name ="menu" placeholder="Menu" required/>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="id_kategori" id="id">
                        <?php foreach($kategori as $key => $value):?>
                        <option <?php if ($value['id']==$menu['id_kategori']) echo"selected"?>value="<?= $value['id'] ?>"><?= $value['kategori'] ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type ="number" class="form-control" value="<?= $menu['harga']?>" name ="harga" placeholder="Harga" required/>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type ="file" class="form-control" name ="gambar"/>
                </div>
                <input type ="hidden" class="form-control" value="<?= $menu['gambar']?>" name ="gambar" required/>
                <input type ="hidden" class="form-control" value="<?= $menu['id']?>" name ="id" required/>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type ="text" class="form-control" value="<?= $menu['deskripsi']?>" name ="deskripsi" placeholder="Deskripsi" required/>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>