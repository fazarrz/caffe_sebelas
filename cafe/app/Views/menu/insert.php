<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2>Menu</h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Menambah Data Menu
            </div>
            <div class="panel-body">
            <?php
                if (!empty(session()->getFlashdata('info'))) { ?>
                    <div class="alert alert-danger">
                    <?= session()->getFlashdata('info');?>
                        </div>
            <?php } ?>

            <form role="form" action="<?= base_url('/admin/menu/insert');?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Menu</label>
                    <input type ="text" class="form-control" name ="menu" placeholder="Menu" required/>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="id" id="id">
                        <?php foreach($kategori as $key => $value):?>
                        <option value="<?= $value['id'] ?>"><?= $value['kategori'] ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type ="number" class="form-control" name ="harga" placeholder="Harga" required/>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type ="file" class="form-control" name ="gambar" required/>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type ="text" class="form-control" name ="deskripsi" placeholder="Deskripsi" required/>
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