<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2>User</h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Mengubah Data Karyawan
            </div>
            <div class="panel-body">
            <div class="col-md-12 col-sm-12">
                <form role="form" action="<?= base_url('/admin/user/ubah');?>" method="post">
                    <div class="form-group">
                        <input type = "hidden" value="<?= $user['id']?>" class="form-control" name ="id" placeholder="User" required/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type = "email" value="<?= $user['email']?>" class="form-control" name ="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <select class="form-control" name="level" id="id">
                            <?php foreach($level as $key):?>
                            <option <?php if ($user['level'] == $key) {
                                echo "selected";
                            } ?> value="<?= $key?>"><?= $key?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
            <?php
                if (!empty(session()->getFlashdata('info'))) { 
                    echo '<div class="alert alert-danger">';
                    $error = session()->getFlashdata('info');
                    foreach ($error as $key => $value){
                        echo  $value;
                        echo "</br>";
                    }
                }

                echo "</div>";

            ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>