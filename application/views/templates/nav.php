<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/styleadmin.css">

    <link rel="shortcut icon" href="<?= base_url("assets/"); ?>images/favicon.png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="<?= base_url('menu'); ?>">
                    <img src="<?= base_url("assets/"); ?>images/home.png" alt="<?= "JoenFLorist" ?> " />
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <img src="<?= base_url("assets/"); ?>images/logo-mini.svg" alt="<?= "JoenFLorist" ?> " />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">

                <ul class="navbar-nav navbar-nav-right">


                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text">Hello, <?php echo $this->session->userdata('nama_user'); ?></span>
                            <img class="img-xs rounded-circle" src="<?= base_url("assets/images/home-right.png"); ?>" alt="<?= "JoenFLorist" ?> ">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <a class="dropdown-item p-0">
                                <div class="d-flex border-bottom mb-2">



                                </div>
                            </a>

                            <a href="<?= base_url('dashboard/logout'); ?>" class="dropdown-item">
                                Sign Out
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">