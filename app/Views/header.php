<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title><?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>" />
    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />

    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url()?>layout/img/specific/draw.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url()?>layout/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url()?>public/layout/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url()?>public/layout/css/theme.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/css/theme-elements.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/css/theme-blog.css">
    <link rel="stylesheet" href="<?= base_url()?>public/layout/css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="<?= base_url()?>public/layout/css/skins/skin-corporate-10.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url()?>public/layout/css/custom.css">

    <!-- Head Libs -->
    <script src="<?= base_url()?>public/layout/vendor/modernizr/modernizr.min.js"></script>
    <?php
    $uri = service('uri');
    $url = $uri->getSegment(1)??'';
    ?>
</head>
<body data-plugin-page-transition>
<div class="body">
    <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container container-xl-custom">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="<?= base_url()?>">
                                    <img alt="Porto"  height="50" src="<?= base_url()?>public/layout/img/specific/logo-white.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item  <?=($url == "" )? 'active' : ""?>" href="<?= base_url()?>">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  <?=($url == "about" )? 'active' : ""?>" href="<?= base_url()?>about">
                                                    About us
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  <?=($url == "projects" )? 'active' : ""?>" href="<?= base_url()?>projects">
                                                    Portfolio
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  <?=($url == "blog" )? 'active' : ""?>" href="<?= base_url()?>blog">
                                                    Blog
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle <?=($url == "ioana" || $url == "mihai" )? 'active' : ""?>" href="#">
                                                    Team
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="<?= base_url()?>ioana">
                                                            Ioana
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="<?= base_url()?>mihai">
                                                           Mihai
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item <?=($url == "contact" )? 'active' : ""?>" href="<?= base_url()?>contact">
                                                    Contact
                                                </a>
                                            </li>
<!--                                            <li class="dropdown-submenu">-->
<!--                                                <a class="dropdown-item" href="#">Team</a>-->
<!--                                                <li class="dropdown">-->
<!--                                                    <a class="dropdown-item dropdown-toggle" href="--><?//= base_url()?><!--ioana">-->
<!--                                                        Ioana-->
<!--                                                    </a>-->
<!--                                                </li>-->
<!--                                            <li>-->


                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>