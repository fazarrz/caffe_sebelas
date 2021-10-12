<?= $this->extend('template/users') ?>

<?= $this->section('content') ?>
<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="<?= base_url('/bootstrap/images/slide1.jpg')?>" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Selamat Datang <?= session()->get('pelanggan') ?> <br>Di Cafe Sebelas</strong></h1>
                        <p class="m-b-40">Kepercayaan dan Kepuasan Pelanggan Nomor 1.<br> 
                        Kepercayaan dan kepuasan anda sangat kami nanti nantikan.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('/user/pesan')?>">Pesan Sekarang</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-left">
            <img src="<?= base_url('/bootstrap/images/slide2.jpg')?>" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Selamat Datang <?= session()->get('pelanggan') ?> <br>Di Cafe Sebelas</strong></h1>
                        <p class="m-b-40">Menu Berkualitas.<br> 
                        Kami menggunakan bahan makanan yang berkualitas dan aman untuk dikonsumsi.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('/user/pesan')?>">Pesan Sekarang</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-left">
            <img src="<?= base_url('/bootstrap/images/slide3.jpg')?>" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Selamat Datang <?= session()->get('pelanggan') ?> <br>Di Cafe Sebelas</strong></h1>
                        <p class="m-b-40">Hemat Di Dompet<br> 
                        Untuk harga bervariasi dan pastinya hemat didompet.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('/user/pesan')?>">Pesan Sekarang</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Selamat Datang <span>Cafe Sebelas</span></h1>
						<h4>Sejarah Cafe Sebelas</h4>
						<p>Berdirinya Cafe Sebelas diawali dengan permintaan/dukungan siswa-siswi SMKN 11 pada tahun 2030.</p>
						<p>Semenjak itu , Cafe Sebelas dibangun tahun 2031 dengan tujuan agar mempermudah siswa-siswi dalam mencari pekerjaan/pkl khususnya dibidang Bisnis Management dan karyawannya terdiri dari siswa-siswi SMKN 11 Bandung</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?= base_url('/user/about')?>">Selengkapnya</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?= base_url()?>/bootstrap/images/about-img.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
<!-- End About -->
<!-- Start QT -->
<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						"Kepercayaan dan Kepuasan Pelanggan Nomor 1."
					</p>
					<span class="lead">Cafe Sebelas</span>
				</div>
			</div>
		</div>
</div>	
<!-- End QT -->
<!-- Start Gallery -->
<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Foto Kenangan Cafe Sebelas</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="<?= base_url()?>/bootstrap/images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="<?= base_url()?>/bootstrap/images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-03.jpg">
							<img class="img-fluid" src="<?= base_url()?>/bootstrap/images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-04.jpg">
							<img class="img-fluid" src="<?= base_url()?>/bootstrap/images/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-05.jpg">
							<img class="img-fluid" src="<?= base_url()?>/bootstrap/images/gallery-img-05.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-06.jpg">
							<img class="img-fluid" src="<?= base_url()?>/bootstrap/images/gallery-img-06.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Gallery -->
	
    

<?= $this->endSection() ?>