<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h2 clas>Order Detail</h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Data Pesanan
            </div>
            <div class="panel-body">
            <div class="row">   
                <div class="col-md-4 col-sm-4">
                    <p>Pelanggan : <?= $orderdetail[0]['pelanggan']; ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p>Tanggal   : <?= date("d F Y", strtotime($orderdetail[0]['tgl_order'])); ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p>Total     : <b><?= number_format($orderdetail[0]['total']); ?></b></p>
                </div>
            </div><br> 
            <?php if (!empty(session()->getFlashdata('info'))) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('info');?>
                    </div>
            <?php endif; ?>
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Menu</th> 
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; $status = '';?>
                        <?php foreach($orderdetail as $value):?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $value['menu']?></td>
                            <td><?= $value['harga']?></td>
                            <td><?= $value['jumlah']?></td>
                            <td><?= $value['harga_jual'] ?></td>
                            <td>
                                <?= $value['statusorder'] == 0 ? 'Menunggu Konfirmasi' : '' ?>
                                <?= $value['statusorder'] == 1 ? 'Sedang Dimasak' : '' ?>
                                <?= $value['statusorder'] == 2 ? 'Selesai' : '' ?> 
                            </td>
                            <?php $status = $value['statusorder']; ?>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <?php if($status != 2) : ?>
                <a href="<?= base_url('/admin/orderdetail/ubahstatus?idorder=' . $value['id_order']) . '&status=' . $status?>" class="btn btn-primary" >
                    <?= $status == 0 ? 'Konfirmasi Pesanan' : '' ?>
                    <?= $status == 1 ? 'Selesai' : '' ?>
                </a>
                <?php endif; ?>
                <br><br>
            </div>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>