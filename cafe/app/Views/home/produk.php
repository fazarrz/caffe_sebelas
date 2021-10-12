<?= $this->extend('template/users') ?>

<?= $this->section('content') ?>
 <!-- Start All Pages -->
 <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Spesial Menu</h1>
				</div>
			</div>
		</div>
</div>
<!-- End All Pages -->
<!-- Start Menu -->
<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Spesial Menu</h2>
						<p>Silahkan pesan menu yang anda inginkan.</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <p class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Kategori</p>
                        <form action="<?= base_url('/user/pesan/read');?>" method="get">
                            <?= view_cell('\App\Controllers\User\Pesan::option')?>   
                        </form>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
                            <?php foreach($menu as $key => $value):?>
								<div class="col-lg-4 col-md-6 special-grid">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="<?= base_url('/upload/'.$value['gambar'].'')?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $value['menu'] ?></h5>
                                            <p class="card-text"><?= $value['deskripsi'] ?></p>
                                            <p class="card-text">Rp.<?= number_format($value['harga'])?></p>
                                            <a href="<?= base_url('/user/beli/tambahkeranjang/' . $value['id'])?>"  class="btn btn-lg btn-circle btn-outline-new-white"> Pesan </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Menu --> 

<?= $this->endSection() ?>