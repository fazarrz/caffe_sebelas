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
                <h2>Berhasil Daftar.</h2>
                <form action="<?= base_url('/user/login')?>" method="get">
                    <button type="submit" class="btn-login">
                        Lanjut Login
                    </button>
                </form>
            </div>
        </div>
        <script src="<?= base_url()?>/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script src="<?= base_url()?>/bootstrap/js/popper.min.js"></script>
        <script src="<?= base_url()?>/bootstrap/js/bootstrap.min.js"></script> 
    </body>
</html>