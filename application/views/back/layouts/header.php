<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Ngapeh | Administrator</title>
    <link href="<?= base_url('back/ngapeh-fav.png') ?>" rel="shortcut icon" type="image/x-icon">
    <link href="<?= base_url('back/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('back/css/sb-admin-2.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('back/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav accordion bg-gradient-warning sidebar sidebar-dark" id="accordionSidebar"><a class="d-flex align-items-center justify-content-center sidebar-brand" href="#">
                <div class="mx-3 sidebar-brand-text">Ngapeh.co</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="<?= site_url('admin/index') ?>"><i class="fa-fw fas fa-tachometer-alt"></i> <span>Beranda Utama</span></a></li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="<?= site_url('welcome') ?>" target="_blank"><i class="fa-fw fas fa-paper-plane"></i> <span>Kunjungi Website</span></a></li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="<?= site_url('admin/index/artikel') ?>"><i class="fa-fw fas fa-newspaper"></i> <span>Menu Artikel</span></a></li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="<?= site_url('admin/index/subscribe') ?>"><i class="fa-fw fas fa-at"></i> <span>Menu Subscribe</span></a></li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="<?= site_url('admin/index/sosmed/1') ?>"><i class="fa-fw fas fa-cogs"></i> <span>Sosial Media</span></a></li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"><a class="nav-link" href="<?= site_url('admin/index/filemanager') ?>"><i class="fa-fw fas fa-desktop"></i> <span>File Manager</span></a></li>
            <hr class="d-none d-md-block sidebar-divider">
            <div class="d-none d-md-inline text-center"><button class="border-0 rounded-circle" id="sidebarToggle"></button></div>
        </ul>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="bg-white mb-4 navbar navbar-expand navbar-light shadow static-top topbar">
                    <div class="d-none d-sm-inline-block form-inline ml-md-3 mr-auto mw-100 my-2 my-md-0 navbar-search">
                        <div id="jam-digital"></div>
                        <script>
                            function waktu() {
                                arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"], arrhari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"], date = new Date, detik = date.getSeconds(), menit = date.getMinutes(), jam = date.getHours(), hari = date.getDay(), tanggal = date.getDate(), bulan = date.getMonth(), tahun = date.getFullYear(), setTimeout("waktu()", 1e3), document.getElementById("jam-digital").innerHTML = arrhari[hari] + " - " + tanggal + " " + arrbulan[bulan] + " " + tahun + " <strong>/</strong> " + jam + " : " + menit + " : " + detik
                            }
                            window.setTimeout("waktu()", 1e3)
                        </script>
                    </div>
                    <ul class="navbar-nav ml-auto">
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow"><a class="nav-link" href="" data-target="#modal-profile" data-toggle="modal"><span class="d-none d-lg-inline mr-2 small text-gray-600"><?= $this->session->userdata('nm_usr') ?></span> <i class="fa fa-user"></i></a></li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow"><a class="nav-link" href="" data-target="#modal-profile" data-toggle="modal"><span class="d-none d-lg-inline mr-2 small text-gray-600"><?= $this->session->userdata('em_usr') ?></span> <i class="fa fa-at"></i></a></li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow"><a class="nav-link" href="" data-target="#modal-logout" data-toggle="modal"><span class="d-none d-lg-inline mr-2 small text-gray-600">Keluar</span> <i class="fa fa-sign-out-alt"></i></a></li>
                    </ul>
                </nav>