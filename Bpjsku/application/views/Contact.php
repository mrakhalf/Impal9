<!DOCTYPE html>
<html lang="en">
<head>
    <title>BPJSku | Layanan Kesehatan</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/real.ico'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</head>
<body class="single-page">
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

                              <li class="call-btn button gradient-bg mt-3 mt-md-0">
                                  <a class="d-flex justify-content-center align-items-center" href="#"><img src="<?php echo base_url('assets/images/emergency-call.png');?>"> +34 586 778 8892</a>
                              </li>
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

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Kontak</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Home</a></li>
                            <li>Kontak</li>
                        </ul>
                    </div><!-- .breadcrumbs -->

                </div>
            </div>
        </div>

        <img class="header-img" src="<?php echo base_url('assets/images/contact-bg.png');?>" alt="">
    </header><!-- .site-header -->

    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="contact-info h-100">
                        <h2 class="d-flex align-items-center">Info Kontak</h2>

                        <ul class="p-0 m-0">
                            <li><span>Alamat:</span>Jalan Bandung Timur No 125</li>
                            <li><span>Phone:</span>+022 780 1234</li>
                            <li><span>Email:</span>Bpjsku@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="opening-hours h-100">
                        <h2 class="d-flex align-items-center">Jam Kerja</h2>

                        <ul class="p-0 m-0">
                            <li>Senin - Minggu<span>8.00 - 22.00</span></li>
                            <br>
                            <p>Kami akan melayani anda pada hari yang telah ditentukan saja, selain jam yang ditentukan kami tidak akan tanggapi keluhan.</p>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="emergency-box h-100">
                        <h2 class="d-flex align-items-center">Call Center</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="<?php echo base_url('assets/images/emergency-call.png');?>"> +022 780 1234</a>
                        </div>

                        <p>Hubungi kami jika anda membutuhkan bantuan darurat, kami akan membantu anda dengan cepat dan tanggap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Kirim Masukan</h2>
                </div>

                <div class="col-12  col-md-4">
                    <input type="text" placeholder="Name">
                </div><!-- col-4 -->

                <div class="col-12 col-md-4">
                    <input type="email" placeholder="E-mail">
                </div><!-- col-6 -->

                <div class="col-12 col-md-4">
                    <input type="text" placeholder="Subject">
                </div>

                <div class="col-12">
                    <textarea name="name" rows="12" cols="80" placeholder="Message"></textarea>
                </div>

                <div class="col-12">
                    <input type="submit" action="BerhasilUpload.html" name="submityu" value="Send Message" class="button gradient-bg">
                </div>
            </div><!-- row -->
        </div>
    </div><!-- contact-form -->



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
