<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo $title ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="<?= base_url() ?>/assests/image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="<?= base_url() ?>/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?= base_url() ?>/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/assets/css/style.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/ckeditor/contents.css"> -->
    <!-- form wizard .css -->
    <link href="<?= base_url() ?>/assets/form_wizard/wizard.css" rel="stylesheet">
    <!-- <link href="<?= base_url() ?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- //datatbles -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/DataTables/datatables.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/DataTables/datatables.min.css" rel="stylesheet">



</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url() ?>/assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= base_url() ?>/assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->


                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= base_url() ?>/assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Hi,&nbsp;<?php echo $this->session->userdata('nama'); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $this->uri->segment(1) == 'DashboardAdmin' ? 'active' : '' ?>" href="<?= base_url('DashboardAdmin') ?>" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $this->uri->segment(1) == 'CalonSiswa' ? 'active' : '' ?>" href="<?= base_url('CalonSiswa') ?>" aria-expanded="false"><i class="fas fa-users">&nbsp;</i><span class="hide-menu">Data Calon Siswa/i</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $this->uri->segment(1) == 'arsip-data-ppdb' ? 'active' : '' ?>" href="<?= base_url('arsip-data-ppdb') ?>" aria-expanded="false"><i class="fas fa-file">&nbsp;</i><span class="hide-menu">Arsip data PPDB</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $this->uri->segment(1) == 'Gelombang' ? 'active' : '' ?>" href="<?= base_url('Gelombang'); ?>" aria-expanded="false">
                                <i class="fas fa-list">&nbsp;</i><span class="hide-menu">Gelombang PPDB</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $this->uri->segment(1) == 'DataAkun' ? 'active' : '' ?>" href="<?= base_url('DataAkun') ?>" aria-expanded="false">
                                <i class="fas fa-users">&nbsp;</i><span class="hide-menu">Data Akun</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $this->uri->segment(1) == 'Setting-Landing-Pages' ? 'active' : '' ?>" href="<?= base_url('Setting-Landing-Pages') ?>" aria-expanded="false">
                                <i class="fas fa-list">&nbsp;</i><span class="hide-menu">Landing Pages</span>
                            </a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $this->uri->segment(1) == 'PengaturanAkun' ? 'active' : '' ?>" href="<?= base_url('PengaturanAkun') ?>" href="<?= base_url('PengaturanAkun'); ?>" aria-expanded="false">
                                <i class="fas fa-cog fa-spin"></i><span class="hide-menu">Pengaturan</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Logout'); ?>" aria-expanded="false"><i class="fas fa-arrow-alt-circle-right"></i><span class="hide-menu">Keluar</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
        </aside>