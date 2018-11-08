<!DOCTYPE html>
<html lang="en">
<head>
     <title>BPJSku | Layanan Kesehatan</title>
      <meta charset="utf-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>BPJSku | Layanan Kesehatan</title>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/real.ico'); ?>">

      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</head>
<body>
  <header class="site-header">
      <div class="nav-bar">
          <div class="container">
              <div class="row">
                  <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                      <div class="site-branding d-flex align-items-center">
                         <a class="d-block" href="<?php echo base_url(); ?>" rel="home"><img class="d-block" src="<?php echo base_url("assets/images/logo.png") ?>" alt="logo"></a>
                      </div><!-- .site-branding -->

                      <nav class="site-navigation d-flex justify-content-end align-items-center">
                          <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                              <li><a href="<?php echo base_url(); ?>">Home</a></li>
                              <li><a href="<?php echo site_url('Home/about') ?>">Tentang Kami</a></li>
                              <li><a href="<?php echo site_url('Home/services') ?>">Services</a></li>
                              <li><a href="<?php echo site_url('Home/news') ?>">Berita</a></li>
                              <li><a href="<?php echo site_url('Home/contact') ?>">Kontak</a></li>
                              <?php if ($this->session->userdata('logged_in') == null){ ?>
                                <li><a href="<?php echo site_url('Home/daftar') ?>"><span class="fa fa-user-plus"></span> Daftar</a></li>
                                <li><a href="<?php echo site_url('Home/login') ?>"><span class="fa fa-user"></span> Masuk</a></li>
                              <?php } else { ?>
                                <li><p href="<?php echo site_url('Home/login') ?>"><span class="fa fa-user"></span> <?= $this->session->userdata('username')?></p></li>
                                <li><a href="<?php echo site_url('Home/Logout') ?>">Logout</a></li>
                              <?php } ?>
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
                                      <h1>Layanan Kesehatan <br>Terbaik</h1>
                                  </header><!-- .entry-header -->

                                  <div class="entry-content mt-4">
                                      <p style="color:black;">BPJSku memberikan pelayanan dan mempermudah dalam masalah kesehatan, semoga dengan adanya kami dapat terbantu dengan mudah dan efisien dalam masalah kesehatan</p>
                                  </div><!-- .entry-content -->

                              </div><!-- .col -->
                          </div><!-- .row -->
                      </div><!-- .container -->
                  </div><!-- .hero-content-overlay -->
              </div><!-- .hero-content-wrap -->
          </div><!-- .swiper-wrapper -->


  </header><!-- .site-header -->

    <div class="homepage-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Jam Kerja</h2>

                        <ul class="p-0 m-0">
                            <li>Senin - Minggu<span>8.00 - 22.00</span></li>
                            <br>
                            <p>Kami akan melayani anda pada hari yang telah ditentukan saja, selain jam yang ditentukan kami tidak akan tanggapi keluhan.</p>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Call Center</h2>

                        <div class="call-btn button gradient-bg">
                            <a class="d-flex justify-content-center align-items-center" href="#"><img src="<?php echo base_url('assets/images/emergency-call.png');?>"> +022 780 1234</a>
                        </div>

                        <p>Hubungi kami jika anda membutuhkan bantuan darurat, kami akan membantu anda dengan cepat dan tanggap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-departments" style="background: url(<?php echo base_url('assets/images/departments-bg.jpg');?>) no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>Our Departments</h2>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url('assets/images/cardiogram.png');?>" alt="">

                                        <h3>Cardioology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url('assets/images/stomach-2.png');?>" alt="">

                                        <h3>Gastroenterology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url('assets/images/blood-sample-2.png');?>" alt="">

                                        <h3>Medical Lab</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url('assets/images/teeth.png'); ?>" alt="">

                                        <h3>Dental Care</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url('assets/images/stretcher.png'); ?>" alt="">

                                        <h3>Surgery</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>




                            <div class="col-12 col-md-6 col-lg-4 mb-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="<?php echo base_url('assets/images/glasses.png'); ?>" alt="">

                                        <h3>Ophthalmology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
    <div class="subscribe-banner" style="background: url('<?php echo base_url('assets/images/subscribe-bg.png'); ?>') no-repeat center #fff; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2>Berlangganan Berita Dari Kami</h2>

                    <form>
                        <input type="email" placeholder="E-mail address">
                        <input class="button gradient-bg" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer" style="background: url('<?php echo base_url('assets/images/footer-bg.png'); ?>') no-repeat center #fff; background-size: cover;">
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
                                <li><a href="about.html">About us</a></li>
                                <li><a href="#">Departments</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="news.html">FAQ</a></li>
                                <li><a href="services.html">Testimonials</a></li>
                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='<?php echo base_url('assets/js/jquery.js'); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/jquery.collapsible.min.js'); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/swiper.min.js'); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/jquery.countdown.min.js'); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/circle-progress.min.js'); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/jquery.countTo.min.js'); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/jquery.barfiller.js'); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/custom.js'); ?>'></script>

</body>
</html>
