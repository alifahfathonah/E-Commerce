<div class="col-9 mt-2 ">



    <!-- Grid row -->
    <div class="row mb-2 mt-2">

        <!--Fetch data dari database-->
        <?php foreach ($data->result() as $row) : ?>
            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 ">
                <!-- Card -->
                <div class="card mb-2 border-0 shadow-lg rounded">
                    <a href="<?= base_url('home/detailproduk/') . $row->id_produk; ?>"> <img src="<?= base_url('assets/imgproduk/') . $row->gambar; ?>" height="200px" class="card-img-top" alt=""></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $row->nama_produk; ?></h5>
                        <p class="card-text"> <?= $row->deskripsi; ?></p>
                        <p class="card-text text-danger">Rp. <?= number_format($row->harga_produk); ?></p>
                        <a href="https://api.whatsapp.com/send?phone=6282169822857&text=*HaiMiss%20Apa%20Kabar?*%0A%0AHai%20Mbak%20Joen%20Saya%20Berminat%20untuk%20membeli%20Bunga,%20Mohon%20Infonya,%20berikut%20ini%20data%20pendaftaran%20saya%20%0ANamaSaya%20%3A%0ABungaMerek%20%3A%20<?= $row->nama_produk; ?>%0AAlamat%20%3A%0ANo%20Hp%20%3A%0AEmail%20%3A%0A" class="btn btn-success">Order Whatsapp</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
        <?php endforeach; ?>

        <!-- Grid column -->




        <!-- Card -->
    </div>
    <?php echo $pagination; ?>
    <!-- Grid column -->
    <!-- Grid row -->

    <!-- Grid column -->

</div>
<!-- Section: Products v.3 -->
</div>




</div>