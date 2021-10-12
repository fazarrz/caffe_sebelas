<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h2>User</h2>
<hr>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Menambah Data Karyawan
            </div>
            <div class="panel-body">
                <form role="form" action="<?= base_url('/admin/user/insert');?>" method="post">
                    <div class="form-group">
                        <label>User</label>
                        <input type = "text"class="form-control" name ="user" placeholder="User" required/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type = "email"class="form-control" name ="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type = "password" class="form-control" name ="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <select class="form-control" name="level" id="id">
                            <?php foreach($level as $key):?>
                            <option value="<?= $key?>"><?= $key?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="panel-footer">
                &copy; Caffe11 2021 | All Rights Reserved
            </div>
        </div>
            <?php
                if (!empty(session()->getFlashdata('info'))) { 
                    echo '<div class="alert alert-danger">';
                    $error = session()->getFlashdata('info');
                    foreach ($error as $key => $value){
                        echo $value;
                        echo "<br>";
                    }
                }   
                    echo "</div>";
            ?>
    </div>
</div>

<?= $this->endSection() ?>