<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url("assets/"); ?>images/favicon.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- My CSS -->
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/lightbox.css">
    <title>Joenflorist - Bunga</title>
</head>

<style type="text/css">
    #navbar {
        display: block;
        transition: top 0.3s;
    }


    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }

    .carousel .item {
        min-height: 330px;
        text-align: center;
        overflow: hidden;
    }

    .carousel .item .img-box {
        height: 160px;
        width: 100%;
        position: relative;
    }

    .carousel .item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }

    .carousel .item h4 {
        font-size: 18px;
        margin: 10px 0;
    }

    .carousel .item .btn {
        color: #333;
        border-radius: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
        line-height: 16px;
    }

    .carousel .item .btn:hover,
    .carousel .item .btn:focus {
        color: #fff;
        background: #000;
        border-color: #000;
        box-shadow: none;
    }

    .carousel .item .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }

    .carousel .thumb-wrapper {
        text-align: center;
    }

    .carousel .thumb-content {
        padding: 15px;
    }

    .carousel .carousel-control {
        height: 100px;
        width: 40px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel .carousel-control i {
        font-size: 30px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -16px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: none;
        font-weight: bold;
    }

    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }

    .carousel .item-price strike {
        color: #999;
        margin-right: 5px;
    }

    .carousel .item-price span {
        color: #86bd57;
        font-size: 110%;
    }

    .carousel .carousel-control.left i {
        margin-left: -3px;
    }

    .carousel .carousel-control.left i {
        margin-right: -3px;
    }

    .carousel .carousel-indicators {
        bottom: -50px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border-color: transparent;
    }

    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }


    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin: 30px 0;
    }

    h2 b {
        color: #ffc000;
    }

    h2::after {
        content: "";
        width: 100px;
        position: absolute;
        margin: 0 auto;
        height: 4px;
        background: rgba(0, 0, 0, 0.2);
        left: 0;
        right: 0;
        bottom: -20px;

    }
</style>

<body style="background-image: url('<?= base_url('assets/images/bg.jpg'); ?>');   ">
    <nav class=" navbar navbar-expand-lg navbar-light fixed-top bg-primary" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url("home"); ?>">
                <img src="<?= base_url('assets/images/favicon.png'); ?>" width="30" height="30" class="d-inline-block align-top" alt="<?= "JoenFLorist" ?> ">
                JoenFlorist
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-primary" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url("home"); ?>">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("home/produkwedding"); ?>">PRODUK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("home/syarat"); ?>">SYARAT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="	background-color: #FFFFFF; ">



        <div class="row">
            <div class="col-lg-12">
                <h2>Trending <b>Products</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->

                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">

                        <?php
                        $counter = 1;

                        foreach ($promo as $q) :
                        ?>

                            <div class="item carousel-item <?php if ($counter <= 1) {
                                                                echo " active ";
                                                            } ?>">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <a href="<?= base_url('home/detailpromo/') . $q['id_promo']; ?>"><img src="<?= base_url('assets/imgproduk/') . $q['gambar']; ?>" class="img-responsive img-fluid" width="350px" alt=""></a>
                                            </div>
                                            <div class="thumb-content">
                                                <h4><?= $q['nama_produk']; ?></h4>
                                                <p class="item-price"><strike>Rp. <?= number_format($q['harga_awal']); ?></strike> <span>Rp. <?= number_format($q['harga_akhir']); ?></span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star" style="color: #ffd54d"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star" style="color: #ffd54d"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star" style="color: #ffd54d"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star" style="color: #ffd54d"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o" style="color: #ffd54d"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="https://api.whatsapp.com/send?phone=6282169822857&text=*HaiMiss%20Apa%20Kabar?*%0A%0AHai%20Mbak%20Joen%20Saya%20Berminat%20untuk%20membeli%20Bunga,%20Mohon%20Infonya,%20berikut%20ini%20data%20pendaftaran%20saya%20%0ANamaSaya%20%3A%0ABungaMerek%20%3A%20<?= $q['nama_produk']; ?>.%20%3A%0Ahttp://joenflorist.com/joenflorist/home/detailpromo/<?= $q['id_promo']; ?>" class="btn btn-success" class=" btn btn-primary">Order Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <?php
                            $counter++;
                            ?>

                        <?php endforeach; ?>




                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>