<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="<?=base_url('/template/assets/css/bootstrap.css')?>" rel="stylesheet" />
    <link href="<?=base_url('/template/assets/css/font-awesome.css')?>" rel="stylesheet" />
    <link href="<?=base_url('/template/assets/css/custom.css')?>" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br/>
                <h2>Login</h2>    
                <h5>( Sistem Informasi Pengelolaan Caffe )</h5>
                <br/>
            </div>
        </div>
        <div class="row ">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <strong>   Data Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="<?= base_url('/admin/login')?>" method="post">
                                       <br/>
                                       <?php
                                            if (!empty($info)) {
                                                echo '<div class = "alert alert-danger" role="alert">';
                                                echo $info;
                                                echo '</div>'; 
                                            }
                                        ?>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" class="form-control" name="email" placeholder="Masukan Email"/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Masukan Password"/>
                                        </div> 
                                        <input class = "btn btn-primary" type="submit" name="login" value="Login">
                                </form>
                            </div>
                        </div>
                </div>
        </div>
    </div>
    <script src="<?=base_url('/template/assets/js/jquery-1.10.2.js')?>"></script>
    <script src="<?=base_url('/template/assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('/template/assets/js/jquery.metisMenu.js')?>"></script>
    <script src="<?=base_url('/template/assets/js/custom.js')?>"></script>
</body>
</html>