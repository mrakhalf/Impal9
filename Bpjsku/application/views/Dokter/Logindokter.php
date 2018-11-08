<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Dokter</title>

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
                         <a class="d-block" href="<?php echo base_url(); ?>" rel="home"><img class="d-block" src="<?php echo base_url("assets/images/logo.png") ?>" alt="logo"></a>
                      </div><!-- .site-branding -->

                      <nav class="site-navigation d-flex justify-content-end align-items-center">
                          <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('Home/about') ?>">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('Home/services') ?>">Services</a></li>
                            <li><a href="<?php echo site_url('Home/news') ?>">Berita</a></li>
                            <li><a href="<?php echo site_url('Home/contact') ?>">Kontak</a></li>
                            <li><a href="<?php echo site_url('Home/daftar') ?>"><span class="fa fa-user-plus"></span> Daftar</a></li>
                            <li><a href="<?php echo site_url('Home/login') ?>"><span class="fa fa-user"></span> Masuk</a></li>
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
            </header><!-- .entry-header -->
          </div><!-- .swiper-wrapper -->
      </div><!-- .hero-slider -->
  </header><!-- .site-header -->



    <div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="border-radius:40%; padding-top:25px;" src="<?php echo base_url('assets/images/Doctor.png');?>" alt="IMG">
      </div>


      <form class="login100-form" role="form" method="POST" action="<?php echo site_url('Login/doLogin') ?>" validate-form>
        <span class="login100-form-title">
          Login Dokter
        </span>
        <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
        <?php } ?>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="username" placeholder="Username">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input class="input100" type="password" name="password" placeholder="Password">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Login
          </button>
        </div>

        <div class="text-center p-t-12">
          <span class="txt1">
            Forgot
          </span>
          <a class="txt2" href="#">
            Username / Password?
          </a>
        </div>

        <div class="text-center p-t-136">
          <a class="txt2" href="#">
            Create your Account
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
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

<script type='text/javascript' src="<?php echo base_url('assets/js/tilt.jquery.js'); ?>"></script>
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
