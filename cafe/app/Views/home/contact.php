<?= $this->extend('template/users') ?>

<?= $this->section('content') ?>
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<h1>Kontak</h1>
			</div>
		</div>
	</div>
</div>
	
<!-- End All Pages -->

<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Hubungi Kami</h2>
                    <p>Jika ada keluhan atau kritikan silahkan hubungi yang tertera dibawah ini.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Maps -->
<div class="map-full" id="googleMap">www</div><br>
<!-- End Maps -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Telepon</h4>
						<p class="lead">
							+022 4920322
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							cafesebelas@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Lokasi</h4>
						<p class="lead">
                        Jl. Budi, Cilember, Bandung.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Contact info -->

<?= $this->endSection() ?>