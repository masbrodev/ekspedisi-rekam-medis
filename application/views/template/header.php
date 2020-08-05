<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$atas?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/')?>/images/icon/RSUD.png">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/metisMenu.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/typography.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/default-css.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/styles.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/responsive.css">

    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/datatables.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>/css/dataTables.bootstrap4.css">

    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css'); ?>" /> -->
    <!-- modernizr css -->
    <script src="<?=base_url('assets/')?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="<?=base_url('')?>"><img src="<?=base_url('assets/')?>/images/icon/RSUD.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                <!-- <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li> -->
                                <!-- <li>
                                    <i class="fa fa-sign-out"></i>
                                </li> -->
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('username')?><i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?=base_url('admin')?>">User</a>
                                    <a class="dropdown-item" href="<?=base_url('logout')?>">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="<?=base_url('')?>"><i class="ti-home"></i><span>Beranda</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('pasien')?>"><i class="fa fa-user"></i><span>Pasien</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('ekspedisi')?>"><i class="ti-book"></i><span>Ekpedisi</span></a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0)"><i class="ti-book"></i><span>Ekspedisi</span></a>
                                        <ul class="submenu">
                                            <li><a href="">Peminjaman</a></li>
                                            <li><a href="">Pengembalian</a></li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href="<?=base_url('petugas')?>"><i class="fa fa-user-md"></i><span>Petugas</span></a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('tujuan')?>"><i class="fa fa-map-marker"></i><span>Tujuan</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <!-- <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div> -->
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->