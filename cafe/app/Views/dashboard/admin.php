<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <h2>Dashboard</h2>   
    </div>
</div>              
<hr/>
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6">           
		<div class="panel panel-back noti-box">
            <span class="icon-box bg-color-blue set-icon">
                <i class="fa fa-user"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= $jmlpelanggan;?></p>
                <p class="text-muted">Pelanggan</p>
            </div>
        </div>
	</div>
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="fa fa-dollar"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= $jmlorders;?></p>
                <p class="text-muted">Order</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-brown set-icon">
                <i class="fa fa-rocket"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= $statusorders;?></p>
                <p class="text-muted">Panding</p>
            </div>
        </div>
    </div>   
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-cutlery"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"><?= $jmlmenu;?></p>
                <p class="text-muted">Menu</p>
            </div>
        </div>
    </div>    
</div>
<div class="row">                   
    <div class="col-md-9 col-sm-12 col-xs-12">                     
        <div class="panel panel-default">
            <div class="panel-heading">
                Diagram
            </div>
            <div class="panel-body">
                <div id="morris-bar-chart"></div>
            </div>
        </div>            
    </div>
        <div class="col-md-3 col-sm-12 col-xs-12">                       
        <div class="panel panel-primary text-center no-boder bg-color-green">
            <div class="panel-body">
                <i class="fa fa-bar-chart-o fa-5x"></i>
                <h3>Rp. <?= $pemasukan ? $pemasukan : '0' ?></h3>
            </div>
            <div class="panel-footer back-footer-green">
                Pemasukan
        
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder bg-color-red">
            <div class="panel-body">
                <i class="fa fa-rocket fa-5x"></i>
                <h3>Rp. <?= $panding ? $panding : '0' ?></h3>
            </div>
            <div class="panel-footer back-footer-red">
                Order Panding
                
            </div>
        </div>                         
    </div> 
</div>
            
<?= $this->endSection() ?>