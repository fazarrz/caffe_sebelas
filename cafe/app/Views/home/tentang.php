<?= $this->extend('template/users') ?>

<?= $this->section('content') ?>

<!-- Start header -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Tentang Kami</h1>
            </div>
        </div>
    </div>
</div>
<!-- End header -->
	
<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center">
                <div class="inner-column">
                    <h1>Selamat Datang Di <span>Cafe Sebelas</span></h1>
                    <h4>Sejarah Cafe Sebelas</h4>
                    <p>Cafe Sebelas adalah sebuah cafe yang dibangun oleh SMKN 11 Bandung yang bertujuan untuk membuka lowongan kerja dan tempat pkl bagi siswa/siswi SMKN 11 Bandung.</p>
                    <p>Keberadaan Cafe Sebelas diawali dengan adanya usulan/dukungan dari siswa/siswi SMKN 11 Bandung pada tahun 2030. Waktu itu banyak sekali usulan dari siswa/siswi agar sekolah bisa membuka cafe dekat sekolah akan tetapi usulan tersebut ditolak oleh sekolah. Tapi dengan semangat dan antusias siswa/siswi agar sekolah membangung cafe dekat sekolah , usulan itupun disetujui. </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="<?= base_url()?>/bootstrap/images/about-img.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Our Teams -->
<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Team Pengembang</h2>
						<p>Nama-nama pengembang aplikasi ini.</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('/bootstrap/images/fazar.jpg')?>" width="100px">
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Fazar</h3>
                            <span class="post">Web Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('/bootstrap/images/andre.jpg')?>">
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Andre</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('/bootstrap/images/arialdi1.jpg')?>">
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Arialdi</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
<!-- End -->
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
						<p>Foto Kenangan Cafe Sebelas.</p>
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