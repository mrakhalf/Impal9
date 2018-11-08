<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pilih Dokter</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home_styles.css'); ?>">
      <!-- Bootstrap CSS -->
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/real.ico'); ?>">
  <!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
</head>
<body>
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                              <li><a href="<?php echo base_url(); ?>">Home</a></li>
                              <li><a href="<?php echo site_url('Home/about') ?>">Tentang Kami</a></li>
                              <li><a href="<?php echo site_url('Home/services') ?>">Services</a></li>
                              <li><a href="<?php echo site_url('Home/news') ?>">Berita</a></li>
                              <li><a href="<?php echo site_url('Home/contact') ?>">Kontak</a></li>
                              <li><?php echo $this->session->userdata('username') ?></li>
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

    <div class="limiter" style="background-color:rgba(210,210,210,0.8);padding-top: 1%">
      <div class="container">
        <table class="table" style="text-align:center;">
          <thead class="thead-dark">
            <tr>
              <th>No.</th>
              <th>Nama Rumah Sakit</th>
              <th>Alamat Rumah Sakit</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($data->result_array() as $i):
                $a = 1;
                $nama=$i['namalengkap'];
                $alamat=$i['nomortlp'];
            ?>
            <tr>
              <th><?php echo $a;?></th>
              <td><?php echo $nama;?></td>
              <td><?php echo $alamat;?></td>
              <td><?php echo $i['username'];?></td>
              <td><a href="<?= site_url('Home/isidata/'. $i["username"] )?>"><input type="button" class="btn btn-primary" value="Pilih Dokter  -->"></a></td>
            </tr>
            <?php
                $a++;
              endforeach;?>
          </tbody>
        </table>
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
