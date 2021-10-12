<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Karyawan</title>
        <link href="<?=base_url('/template/assets/css/bootstrap.css')?>" rel="stylesheet" />
        <link href="<?=base_url('/template/assets/css/font-awesome.css')?>" rel="stylesheet" />
        <link href="<?=base_url('/template/assets/css/custom.css')?>" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
        <link href="<?=base_url('/template/assets/js/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
    </head>
    <body>
        <div id="wrapper">
                <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= base_url('/admin')?>"><?php
                                if (!empty(session()->get('user'))) {
                                    echo session()->get('level');
                                    $level = session()->get('level');
                                } ?></a> 
                    </div>
        <div style="color: white;
        padding: 15px 50px 5px 50px;
        float: right;
        font-size: 16px;">Pengguna : <?php
                                if (!empty(session()->get('email'))) {
                                    echo session()->get('user');
                                } ?>&nbsp; <a href="<?= base_url('admin/login/logout')?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>  
        <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="<?= base_url()?>/template/assets/img/find_user.png" class="user-image img-responsive"/>
                        </li>
                        <?php if($level === 'Admin'): ?>	
                        <li>
                            <a  href="<?= base_url('/admin/dashboard') ?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                        </li>
                        <li>
                            <a  href="<?= base_url('/admin/kategori')?>"><i class="fa fa-sitemap fa-3x"></i> Kategori</a>
                        </li>
                        <li>
                            <a  href="<?= base_url('/admin/menu')?>"><i class="fa fa-cutlery fa-3x"></i>  Menu</a>
                        </li>
                        <li>
                            <a  href="<?= base_url('/admin/pelanggan')?>"><i class="fa fa-user fa-3x"></i> Pelanggan</a>
                        </li>
                        <li>
                            <a  href="<?= base_url('/admin/order')?>"><i class="fa fa-money fa-3x"></i> Order</a>
                        </li>
                        <li>
                            <a  href="<?= base_url('/admin/orderdetail')?>"><i class="fa fa-edit fa-3x"></i> Order Detail</a>
                        </li>
                        <li>
                            <a  href="<?= base_url('/admin/user')?>"><i class="fa fa-laptop fa-3x"></i> Karyawan</a>
                        </li> 
                        <?php endif; ?>
                        
                        <?php if($level === 'Kasir'): ?>	
                        <li>
                            <a  href="<?= base_url('/admin/order')?>"><i class="fa fa-money fa-3x"></i> Order</a>
                        </li>
                        <?php endif; ?>
                        <?php if($level === 'Koki'): ?>	
                        <li>
                            <a  href="<?= base_url('/admin/orderdetail')?>"><i class="fa fa-edit fa-3x"></i> Order Detail</a>
                        </li>
                        <?php endif; ?>
                    </ul>  
                </div>
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->renderSection('content')?>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?=base_url('/template/assets/js/jquery-1.10.2.js')?>"></script>
        <script src="<?=base_url('/template/assets/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('/template/assets/js/jquery.metisMenu.js')?>"></script>
        <script src="<?=base_url('/template/assets/js/dataTables/jquery.dataTables.js')?>"></script>
        <script src="<?=base_url('/template/assets/js/dataTables/dataTables.bootstrap.js')?>"></script>
        <script src="<?= base_url('/template/assets/js/morris/raphael-2.1.0.min.js')?>"></script>
        <script src="<?= base_url('/template/assets/js/morris/morris.js')?>"></script>
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
        </script>
        <script src="<?=base_url()?>/template/assets/js/custom.js"></script>
    </body>
</html>
