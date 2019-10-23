<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ngapeh | Administrator</title>

    <link rel="shortcut icon" href="<?= base_url('back') ?>/ngapeh-fav.png" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('back/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('back/css/sb-admin-2.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('back/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-text mx-3">Ngapeh.co</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('admin/index') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i> 
                <span>Beranda Utama</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('welcome') ?>" target="_blank">
                <i class="fas fa-fw fa-paper-plane"></i>
                <span>Kunjungi Website</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('admin/index/artikel') ?>">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Menu Artikel</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('admin/index/subscribe') ?>">
                <i class="fas fa-fw fa-at"></i>
                <span>Menu Subscribe</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('admin/index/sosmed/1') ?>">
                <i class="fas fa-fw fa-cogs"></i>
                <span>Sosial Media</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('admin/index/filemanager') ?>">
                <i class="fas fa-fw fa-desktop"></i>
                <span>File Manager</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- jam digital  -->
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div id="jam-digital"></div>
                        <script>
                            window.setTimeout("waktu()",1000); 
                            function waktu() {
                                arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                                arrhari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"];
                                date = new Date();
                                detik = date.getSeconds();
                                menit = date.getMinutes();
                                jam = date.getHours();
                                hari = date.getDay();
                                tanggal = date.getDate();
                                bulan = date.getMonth();
                                tahun = date.getFullYear();
                                setTimeout("waktu()",1000);
                                // document.write(tanggal+" "+arrbulan[bulan]+" "+tahun+" | "+jam+" : "+menit+" : "+detik);
                                document.getElementById("jam-digital").innerHTML = arrhari[hari]+" - "+tanggal+" "+arrbulan[bulan]+" "+tahun+" <strong>/</strong> "+jam+" : "+menit+" : "+detik;
                            }
                        </script>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- <hr> horizontal -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a href="" class="nav-link" data-toggle="modal" data-target="#modal-profile">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= 
                                $this->session->userdata('nm_usr') ?></span>
                                &nbsp; <i class="fa fa-user"></i>
                            </a>
                        </li>
                        
                        <!-- <hr> horizontal -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a href="" class="nav-link" data-toggle="modal" data-target="#modal-profile">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= 
                                $this->session->userdata('em_usr') ?></span>
                                &nbsp; <i class="fa fa-at"></i>
                            </a>
                        </li>

                        <!-- <hr> horizontal -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a href="" class="nav-link" data-toggle="modal" data-target="#modal-logout">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Keluar</span>
                                &nbsp; <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->