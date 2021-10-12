<?= $this->extend('template/users') ?>

<?= $this->section('content') ?>
 <!-- Start All Pages -->
 <div class="all-page-title page-breadcrumb">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<h1>Terima Kasih Telah Memesan.</h1>
				<br>
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('/user/ripe')?>">Lihat Pesananku</a>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>