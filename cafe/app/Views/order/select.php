<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h2><?= $judul ?></h2>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Data Order
            </div>
            <div class="panel-body">
            <?php if(session()->get('level') != 'Kasir') : ?>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Print PDF</button>
            <?php endif; ?>
            <br><br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Order</th>
                            <th>Pelanggan</th> 
                            <th>Tanggal Order</th>
                            <th>Total</th>
                            <th>Bayar</th>
                            <th>Kembali</th>
                            <th>Status</th>
                        </tr>
                        <tbody>
                            <?php $no=1 ?>
                            <?php foreach($order as $value):?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['id'] ?></td>
                                    <td><?= $value['pelanggan']?></td>
                                    <td><?= date("d F Y", strtotime($value['tgl_order']))?></td>
                                    <td><?= $value['total'] ?></td>
                                    <td><?= $value['bayar'] ?></td>
                                    <td><?= $value['kembalian'] ?></td>
                                        <?php
                                            if ($value['status']==1) {
                                                $status = "Lunas";
                                            } else {
                                                $status = " <a href= '".base_url('/admin/order/find')."/".$value['id_order']."'>Belum Lunas</a>";
                                            }
                                            
                                        ?>
                                    <td><?= $status?></td>
                                </tr>
                            <?php endforeach;?>
                    </tbody>
                    </thead>
                </table>
            </div>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
        </div>
    </div>
</div>

<!-- modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atur Tanggal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('/admin/pdfin/cari');?>" method="post">
            <div class="form-group">
                <label>Awal</label>
                <input type = "date"class="form-control" name ="awal" required/>
            </div>
            <div class="form-group">
                <label>Sampai</label>
                <input type = "date"class="form-control" name ="sampai" required/>
            </div>
            <button type="submit" class="btn btn-danger" name = "cari" value="Cari">Print</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>