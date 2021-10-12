<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2><?= $judul;?></h2>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Mengubah Data Kategori
            </div>
            <div class="panel-body">
            <?php
                if (!empty(session()->getFlashdata('info'))) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('info');?>
                    </div>
            <?php } ?>
            <form role="form" action="<?= base_url('/admin/kategori/update');?>" method="post">
                <div class="form-group">
                    <label>Nama Kategori :</label>
                    <input class="form-control" name ="kategori" value="<?= $kategori['kategori']?>" required/>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <input type="hidden" name="id" value="<?= $kategori['id']?>">
            </form>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>