<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2><?= $judul?></h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Data Pembayaran
            </div>
            <div class="panel-body">
            <div class="row">   
                <div class="col-md-4 col-sm-4">
                    <p>Pelanggan : <?= $order['pelanggan'] ?></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p>Tanggal   : <?= date("d F Y", strtotime($order['tgl_order']))?></p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p>Total     : <b><?= number_format($order['total'])?></b></p>
                </div>
            </div><br>
            <?php
                if (!empty(session()->getFlashdata('info'))) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('info');?>
                    </div>
            <?php } ?>
            <form role="form" action="<?= base_url('/admin/order/update');?>" method="post">
                <div class="form-group">
                    <label>Bayar</label>
                    <input type = "number"class="form-control" name ="bayar" placeholder="Bayar" required/>
                </div>
                    <input type = "hidden" class="form-control" value="<?= $order['total'] ?>" name ="total" required/>
                    <input type = "hidden" class="form-control" name ="id" value="<?= $order['id_order'] ?>" required/>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <h3>Rincian Order</h3>
                </div>   
            </div><br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Menu</th> 
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;?>
                        <?php foreach($detail as $value):?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $value['menu']?></td>
                            <td><?= $value['harga']?></td>
                            <td><?= $value['jumlah']?></td>
                            <td><?= $value['harga_jual'] ?></td>
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