<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

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
<body class="single-page blog-page">
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
                    <h1>Berita</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="#">Home</a></li>
                            <li>Berita</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="<?php echo base_url('assets/images/news-bg.png');?>" alt="">
    </header><!-- .site-header -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="the-news">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="<?php echo base_url('assets/images/news-1.png');?>" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>The latest in Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="<?php echo base_url('assets/images/news-2.png');?>" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>All you need to know about pills</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="<?php echo base_url('assets/images/news-6.png');?>" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="<?php echo base_url('assets/images/news-4.png');?>" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="<?php echo base_url('assets/images/news-5.png');?>" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="<?php echo base_url('assets/images/news-3.png');?>" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="button gradient-bg" href="#">Read More</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="pagination d-flex flex-wrap align-items-center p-0">
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                    <div class="search-widget">
                        <form class="flex flex-wrap align-items-center">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="flex justify-content-center align-items-center">Search</button>
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->

                    <div class="sidebar-cats">
                        <h2 class="widget-title">Categories</h2>

                        <ul class="p-0 m-0">
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardiology</a></li>
                            <li><a href="#">Gastroenterology</a></li>
                            <li><a href="#">Neurology</a></li>
                            <li><a href="#">General surgery</a></li>
                        </ul>
                    </div>

                    <div class="popular-posts">
                        <h2 class="widget-title">Latest Posts</h2>

                        <ul class="p-0 m-0">
                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="<?php echo base_url('assets/images/p-1.jpg');?>" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">A big discovery for medicine worldwide</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="<?php echo base_url('assets/images/p-2.jpg');?>" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">Dentistry for everybody under 18</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between">
                                <figure><a href="#"><img src="<?php echo base_url('assets/images/p-3.jpg');?>" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">When it’s time to take pills</a></h3>

                                    <div class="posted-date">Feb 05, 2018</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->

                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Jam Kerja</h2>

                        <ul class="p-0 m-0">
                            <li>Senin - Minggu<span>8.00 - 22.00</span></li>
                            <br>
                            <p>Kami akan melayani anda pada hari yang telah ditentukan saja, selain jam yang ditentukan kami tidak akan tanggapi keluhan.</p>
                        </ul>
                    </div>

                    <div class="emergency-box">
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
