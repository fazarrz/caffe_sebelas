<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/form.css')?>">
        <link href="<?=base_url('/template/assets/css/font-awesome.css')?>" rel="stylesheet" />
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="login">
                <div class="avatar">
                    <i class= "fa fa-user"></i>
                </div>
                <h2>Register</h2>
                <form class="form-signin" action="<?= base_url('/user/register/insert');?>" method="post">
                    <div class="box-login">
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Nama" name ="pelanggan">
                    </div>
                    <div class="box-login">
                        <i class="fa fa-map-marker"></i>
                        <input type="text" placeholder="Alamat" name ="alamat">
                    </div>
                    <div class="box-login">
                        <i class="fa fa-phone"></i>
                        <input type="number" placeholder="No. Telepon" name ="no_telp">
                    </div>
                    <div class="box-login">
                        <i class="fa fa-envelope"></i>
                        <input type="email" placeholder="Email" name ="email">
                    </div>
                    <div class="box-login">
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="Password" name ="password">
                    </div>
                    <button type="submit" class="btn-login">
                        Register
                    </button>
                    <div class="bottom">
                        <a href="<?= base_url('/user/login')?>">Login</a>
                    </div>
                </form>
                <?php
                    if (!empty(session()->getFlashdata('info'))) { 
                        echo '<div class="alert alert-danger mt-4" role="alert">';
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
        <script src="<?= base_url()?>/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="<?= base_url()?>/bootstrap/js/popper.min.js"></script>
        <script src="<?= base_url()?>/bootstrap/js/bootstrap.min.js"></script> 
    </body>
</html>