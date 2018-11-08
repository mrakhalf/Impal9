<!DOCTYPE html>
<html lang="en">
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<head>
    <title>Login Petugas RS</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <!--===============================================================================================-->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/real.ico'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
<!--===============================================================================================-->

  <!-- Swiper CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/swiper.min.css'); ?>">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

  <script type='text/javascript' src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
</head>
<body>
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><img class="d-block" src="<?php echo base_url('assets/images/logo.png'); ?>"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                              <li><a href="<?php echo base_url(); ?>">Home</a></li>
                              <li><a href="<?php echo site_url('Home/about') ?>">Tentang Kami</a></li>
                              <li><a href="<?php echo site_url('Home/services') ?>">Services</a></li>
                              <li><a href="<?php echo site_url('Home/news') ?>">Berita</a></li>
                              <li><a href="<?php echo site_url('Home/contact') ?>">Kontak</a></li>
                              <li><p href="<?php echo site_url('Home/login') ?>"><span class="fa fa-user"></span> <?php echo $this->session->userdata('username') ?></p></li>
                              <li><a href="<?php echo site_url('Home/Logout') ?>">Logout</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->

        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('<?php echo base_url('assets/images/hero.jpg') ?>')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Layanan Kesehatan<br>Terbaik</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p style="color:black;">BPJSku memberikan pelayanan dan mempermudah dalam masalah kesehatan, semoga dengan adanya kami dapat terbantu dengan mudah dan efisien dalam masalah kesehatan</p>
                                    </div><!-- .entry-content -->

                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>The Best <br>Medical Services</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    </div><!-- .entry-content -->

                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->
        </div><!-- .hero-slider -->
    </header><!-- .site-header -->

    <div class="limiter">
  <div class="container-login100">

    <div class="col-md-6">
  				<div class="juduldaftar">
                  <h2 align="center">DATA HASIL PEMERIKSAAN</h2>
                  <hr>
  				</div>
              </div>

              <table>
    <tr>
      <th>Nama Pasien</th>
      <th>Keluhan</th>
      <th>Dokter</th>
    </tr>
    <tr>
      <td>Dadang</td>
      <td>Sakit Panas dan Batuk-batuk</td>
      <td>Dokter Yusuf Wibowo</td>
    </tr>
    <tr>
      <td>John Unang</td>
      <td>Sakit Perut</td>
      <td>Dokter Yusuf Wibowo</td>
    </tr>
    <tr>
      <td>Asep Maulid</td>
      <td>Sakit Flu</td>
      <td>Dokter Yusuf Wibowo</td>
    </tr>
    <tr>
      <td>Deden Ninja</td>
      <td>Sakit Asma</td>
      <td>Dokter Yusuf Wibowo</td>
    </tr>
    <tr>
      <td>Ahmad Capung</td>
      <td>Sakit Campak</td>
      <td>Dokter Yusuf Wibowo</td>
    </tr>
  </table>

  	<div class="container">
  	<form>
  		<br>
  	<p>Menu Lain :</p>
  	<input class="call-btn button gradient-bg" type="button" value="Daftar Calon Pasien" onclick="location.href='<?php echo site_url();?>/Home/daftarcalon'" />
  	<input class="call-btn button gradient-bg" type="button" value="Laporan Administrasi Dana Cair" onclick="location.href='<?php echo site_url();?>/Home/LaporanDanaCair'" />
  	<input class="call-btn button gradient-bg" type="button" value="Upload Laporan Administrasi" onclick="location.href='<?php echo site_url();?>/Home/uploadlaporanadministrasi'" />
  	<input class="call-btn button gradient-bg" type="button" value="Daftar Ulang" onclick="location.href='<?php echo site_url();?>/Home/daftaulang'" />
  </form>
  	</div>


    </div>
  </div>




    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></a></h2>

                            <p>BPJSku memberikan pelayanan dan mempermudah dalam masalah kesehatan, semoga dengan adanya kami dapat terbantu dengan mudah dan efisien dalam masalah kesehatan.</p>

                            <p style="color:black;" class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Kontak</h2>

                            <ul class="p-0 m-0">
                                <li><span>Alamat:</span>Jalan Bandung Timur No 125</li>
                                <li><span>Phone:</span>+022 780 1234</li>
                                <li><span>Email:</span>Bpjsku@gmail.com</li>
                            </ul>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Link Pengguna</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Tentang Kami</a></li>
                                <li><a href="#">Departments</a></li>
                                <li><a href="contact.html">Kontak</a></li>
                                <li><a href="news.html">FAQ</a></li>
                                <li><a href="services.html">Testimonials</a></li>
                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

  <!--===============================================================================================-->
  	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/bootstrap/js/popper.js"></script>
  	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/tilt/tilt.jquery.min.js"></script>
  	<script >
  		$('.js-tilt').tilt({
  			scale: 1.1
  		})
  	</script>
  <!--===============================================================================================-->
  	<script src="js/main.js"></script>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>
