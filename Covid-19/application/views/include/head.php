<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Covid 19</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/evento'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="<?= base_url('assets/evento'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/evento'); ?>/assets/css/et-line.css" rel="stylesheet">
    <link href="<?= base_url('assets/evento'); ?>/assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="<?= base_url('assets/evento'); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/evento'); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/evento'); ?>/assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/evento'); ?>/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/DataTables/css/jquery.dataTables.min.css">
 
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="<?= base_url(); ?>">
            <h4 class="text-white">CORONA VIRUS DISEASE 2019</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url(); ?>">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Pandemi</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('index.php/world'); ?>">Pandemi Di Dunia</a>
                <a class="dropdown-item" href="<?= base_url('index.php/indonesia'); ?>">Pandemi Di Indonesia</a>
            </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('index.php/indonesia/mapping/Indonesia'); ?>">Pemetaan Di Indonesia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('index.php/indonesia/hospital'); ?>">Rumah Sakit Rujukan</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--header end here-->
