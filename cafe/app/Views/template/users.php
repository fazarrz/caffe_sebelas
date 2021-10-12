<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Android -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Site -->
        <title>Caffe Sebelas</title>  
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">   
        <!-- Site Icons -->
        <link rel="shortcut icon" href="<?= base_url('/bootstrap/images/icon.png')?>" type="image/x-icon">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/style.css')?>">
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/responsive.css')?>">
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/custom.css')?>">
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/profil.css')?>">
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/teams.css')?>">

        <!-- Maps -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:10,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }
 
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </head>
    <body>
        <!-- Start header -->
        <header class="top-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url('/user/homepage')?>">
                        <img src="<?= base_url('/bootstrap/images/logo2.png')?>" width="170px" height="75px" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbars-rs-food">
                        <ul class="navbar-nav ml-auto">
                        <?php 
                            
                            if (session()->get('pelanggan') != null): ?>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/')?>"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/profil')?>"><i class="fa fa-user"></i> Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/pesan')?>"><i class="fa fa-cutlery"></i> Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/about')?>"><i class="fa fa-exclamation-circle"></i> Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/kontak')?>"><i class="fa fa-phone-square"></i> Kontak</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/ripe')?>"><i class="fa fa-book"></i> Pesanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/beli')?>"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>

                            <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/register')?>"><i class="fa fa-user-plus"></i> Daftar</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/')?>"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/pesan')?>"><i class="fa fa-cutlery"></i> Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/login')?>"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/about')?>"><i class="fa fa-exclamation-circle"></i> Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/user/kontak')?>"><i class="fa fa-phone-square"></i> Kontak</a></li>
                            
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End header -->

        <!-- Start page -->
        <?= $this->renderSection('content')?>
        <!-- End page -->

        
        
        <!-- Start Footer -->
        <footer class="footer-area bg-f">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3>Moto Kami</h3>
                        <p>Kepercayaan dan Kepuasan Pelanggan Nomor 1.</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Ikuti Kami Di :</h3>
                        <ul class="list-inline f-social">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Kontak Info</h3>
                        <p class="lead">Jl. Budi Jl. Raya Cilember, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40153</p>
                        <p class="lead"><a href="#">+022 4920322</a></p>
                        <p><a href="#">caffesebelas@gmail.com</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Dibuka Pada Jam</h3>
                        <p><span class="text-color">Senin: </span>9:Am - 16PM</p>
                        <p><span class="text-color">Sel-Rab :</span> 9:Am - 15PM</p>
                        <p><span class="text-color">Kam-Jum :</span> 8:Am - 13PM</p>
                        <p><span class="text-color">Sab-Ming :</span>Tutup</p>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Cafe Sebelas</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
        <!-- End Footer -->
        
        <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

        <!-- Javascript file -->
        <script src="<?= base_url('/bootstrap/js/jquery-3.2.1.min.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/popper.min.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/bootstrap.min.js')?>"></script>

        <!-- Javascript plugins -->
        <script src="<?= base_url('/bootstrap/js/jquery.superslides.min.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/images-loded.min.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/isotope.min.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/baguetteBox.min.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/form-validator.min.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/contact-form-script.js')?>"></script>
        <script src="<?= base_url('/bootstrap/js/custom.js')?>"></script>
    </body>
</html>