<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2>Kategori</h2>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Menambah Data Kategori
            </div>
            <div class="panel-body">
            <?php
                if (!empty(session()->getFlashdata('info'))) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('info');?>
                    </div>
            <?php } ?>

            <form role="form" action="<?= base_url('/admin/kategori/insert');?>" method="post">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type = "text"class="form-control" name ="kategori" placeholder="Nama Kategori" required/>
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