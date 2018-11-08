<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services</title>

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
                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="<?php echo base_url('assets/images/emergency-call.png');?>"> +022 780 1234</a>
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
                    <h1>Services</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="<?php echo base_url('assets/images/service-bg.png');?>" alt="">
    </header><!-- .site-header -->

    <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Layanan Dengan Kualitas Teratas</h2>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Kami disini selalu ada untuk membantu anda dalam menangani berbagai macam layanan kesehatan mengenai sistem dari bpjs, layanan kesehatan terbaik nomor 1 di Indonesia karena telah mempermudah banyak pelanggan</p>
                        </div>

                        <div class="col-12 col-md-6">
                            <p>BPJSku sendiri dibangun untuk mempermudah berbagai macam kalangan agar lebih efisien dan praktis pada saat menggunakan BPJSku</p>
                        </div>
                    </div>

                    <div class="w-100 text-center mt-5">
                        <a class="button gradient-bg" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-tabs">
                    <div class="tabs">
                        <ul class="tabs-nav d-flex flex-wrap">
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_1">Pekerja Tanggap</li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_2">Call Center Ramah</li>
                        </ul>

                        <div class="tabs-container">
                            <div id="tab_1" class="tab-content">
                                <img src="<?php echo base_url('assets/images/service-tab-img.png');?>" alt="">

                                <h4>Pekerja</h4>

                                <p>Pekerja begitu bekerja keras dalam menangani berbagai macam masalah yang sedang dihadapi pelanggan.</p>
                            </div>

                            <div id="tab_2" class="tab-content">
                                <img src="<?php echo base_url('assets/images/callcenter.jpg'); ?>" alt="">

                                <h4>Call Center</h4>

                                <p>Call center kami ramah terhadap customer yang mempunyai berbagai macam masalah mengenai bpjs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
