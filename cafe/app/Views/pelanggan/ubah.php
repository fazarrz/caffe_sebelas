<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2><?= $judul;?></h2>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Mengubah Data Pelanggan
            </div>
            <div class="panel-body">
            <?php
                if (!empty(session()->getFlashdata('info'))) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('info');?>
                    </div>
            <?php } ?>
            <form role="form" action="<?= base_url('/admin/pelanggan/ubah');?>" method="post">
                <div class="form-group">
                    <label>Nama Pelanggan :</label>
                    <input class="form-control" name ="pelanggan" value="<?= $pelanggan['pelanggan']?>" required/>
                </div>
                <div class="form-group">
                    <label>Alamat :</label>
                    <input class="form-control" name ="alamat" value="<?= $pelanggan['alamat']?>" required/>
                </div>
                <div class="form-group">
                    <label>No. Telepon :</label>
                    <input class="form-control" name ="no_telp" value="<?= $pelanggan['no_telp']?>" required/>
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <input class="form-control" name ="email" value="<?= $pelanggan['email']?>" required/>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <input type="hidden" name="id" value="<?= $pelanggan['id']?>">
            </form>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>