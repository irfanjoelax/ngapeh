<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    $url = $this->uri->segment(1);
    if ($url == "artikel_detail") {
        $this->load->view('front/layouts/_meta_facebook');
    }
    ?>

    <!-- Title -->
    <title>NGAPEH | Wadah Etam Beramean</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('back') ?>/ngapeh-fav.png" type="image/x-icon">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('front') ?>/style.css">
    <link rel="stylesheet" href="<?= base_url('front') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('front') ?>/css/owl.theme.default.css">

    <include expiration=’7d’ path=’*.css’ />
    <include expiration=’7d’ path=’*.js’ />
    <include expiration=’3d’ path=’*.gif’ />
    <include expiration=’3d’ path=’*.jpeg’ />
    <include expiration=’3d’ path=’*.jpg’ />
    <include expiration=’3d’ path=’*.png’ />
    <meta http-equiv=”expires” content=”sat, 02 jun 2020 00:00:00 GMT” />
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?= site_url('/') ?>"><img src="<?= base_url('front') ?>/ngapeh-logo.png" alt=""></a>
                            </div>
                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="<?= site_url('cari') ?>" method="post">
                                        <input type="search" name="inp_cari" class="form-control" placeholder="Pencarian">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?= site_url('/') ?>"><img src="<?= base_url('front') ?>/ngapeh-logo.png" alt=""></a>
                        </div>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?= site_url('/') ?>">Beranda</a></li>
                                    <li><a href="#">Warta</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= site_url('kategori/Berita') ?>">Berita</a></li>
                                            <li><a href="<?= site_url('kategori/Daerah') ?>">Daerah</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kekinian</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= site_url('kategori/Hits') ?>">Hits</a></li>
                                            <li><a href="<?= site_url('kategori/Review') ?>">Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Hiburan</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= site_url('kategori/Cerita') ?>">Cerita</a></li>
                                            <li><a href="<?= site_url('kategori/Tips') ?>">Tips</a></li>
                                            <li><a href="<?= site_url('kategori/Gosip') ?>">Gosip</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= site_url('kategori/Investigasi') ?>">Investigasi</a></li>
                                    <li><a href="#">Pojok Religi</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= site_url('kategori/Riwayat') ?>">Riwayat</a></li>
                                            <li><a href="<?= site_url('kategori/Khutbah') ?>">Khutbah</a></li>
                                            <li><a href="<?= site_url('kategori/Artikel') ?>">Artikel</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->