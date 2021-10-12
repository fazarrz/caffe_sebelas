<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h2 clas><?= $judul ?></h2>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                DATA ORDER DETAIL
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
                            <th>Tanggal Order</th>
                            <th>Pelanggan</th>
                            <th>Status Pesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; 
                    ?>
                    <?php foreach($orderdetail as $value):?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= date("d F Y", strtotime($value['tgl_order']))?></td>
                            <td><?= $value['pelanggan'] ?></td>
                            <td>
                                <?= $value['status'] == 0 ? 'Belum Dibayar' : '' ?>
                                <?= $value['status'] == 1 ? 'Lunas' : '' ?>
                            </td>
                            <td>
                                <?php if($value['status'] != 1) : ?>
                                    <a href="<?= base_url('/admin/orderdetail/update?idorder=' . $value['id_order']) ?>">Lihat Detail</a>
                                <?php else: ?>
                                    <?php echo'Selesai'?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>

            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved.
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>