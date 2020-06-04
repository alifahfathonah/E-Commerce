<div class="container mt-3">
    <!-- Section: Products v.3 -->
    <section class="text-center my-3">

        <div class="card shadow-sm border-0 ">
            <div class="card-body">
                <form method="post" action="<?php echo base_url("home/pencarianproduk") ?>">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="acara" class="text-primary font-weight-bold">Acara</label>
                                <select class="form-control" id="id_acara" name="id_acara">
                                    <?php foreach ($acara as $q) : ?>
                                        <option value="<?= $q['id_acara']; ?>"><?= $q['acara']; ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group ">
                                <label for="jenis_produk" class="text-primary font-weight-bold">Jenis Bunga</label>
                                <select class="form-control" id="id_jenis" name="id_jenis">
                                    <?php foreach ($jenis as $q) : ?>
                                        <option value="<?= $q['id_jenis']; ?>"><?= $q['jenis_produk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                                <button type="submit" name="submit" class="btn btn-info btn-block">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?= $this->session->flashdata('message'); ?>

        <div class="row  " id="tampil">

            <!-- Section: Features v.3 -->
            <section class="my-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center ">Detail Product</h2>
                <!-- Section description -->
                <hr><br>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-5 text-center text-lg-left">
                        <img class="img-fluid" src="<?= base_url('assets/imgproduk/') . $produk['gambar']; ?>" alt="Sample image">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-7">

                        <!-- Grid row -->
                        <div class="row mb-3 mt-5">

                            <!-- Grid column -->
                            <div class="col-1">
                                <i class="fa fa-share fa-lg indigo-text"></i>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-xl-10 col-md-11 col-10">
                                <h5 class="font-weight-bold mb-3"><?= $produk['nama_produk']; ?></h5>
                                <p class="text-danger font-weight-bold">Rp. <?= number_format($produk['harga_akhir']); ?></p>
                                <a href="https://api.whatsapp.com/send?phone=6285262222596&text=*HaiMiss%20Apa%20Kabar?*%0A%0AHai%20Mbak%20Joen%20Saya%20Berminat%20untuk%20membeli%20Bunga,%20Mohon%20Infonya,%20berikut%20ini%20data%20pendaftaran%20saya%20%0ANamaSaya%20%3A%0ABungaMerek%20%3A%20<?= $produk['nama_produk']; ?>.%20%3A%0Ahttp://joenflorist.com/joenflorist/home/detailpromo/<?= $produk['id_promo']; ?>" class="btn btn-success">Order Whatsapp</a>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->


                    </div>
                    <!--Grid column-->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Features v.3 -->


        </div>
        <!-- Grid column -->


</div>
<!-- Grid row -->

</section>
<!-- Section: Products v.3 -->
</div>