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

        <div class="row my-5 " id="tampil">



            <?php
            if (count($hasil) > 0)

                foreach ($hasil as $q) : ?>
                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Card -->
                    <div class="card border-0 shadow-lg rounded mb-3">
                        <a href="<?= base_url(); ?>home/detailproduk/<?= $q['id_produk']; ?>"> <img src="<?= base_url('assets/imgproduk/') . $q['gambar']; ?>" height="250px" class="card-img-top" alt="<?= $q['nama_produk']; ?> "></a>



                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $q['nama_produk']; ?> </h5>
                            <p class="card-text"> <?= ($q['deskripsi']); ?></p>
                            <p class="card-text text-danger">Rp. <?= number_format($q['harga_produk']); ?></p>
                            <a href="https://api.whatsapp.com/send?phone=6282169822857&text=*HaiMiss%20Apa%20Kabar?*%0A%0AHai%20Mbak%20Joen%20Saya%20Berminat%20untuk%20membeli%20Bunga,%20Mohon%20Infonya,%20berikut%20ini%20data%20pendaftaran%20saya%20%0ANamaSaya%20%3A%0ABungaMerek%20%3A%20<?= $q['nama_produk']; ?>%0AAlamat%20%3A%0ANo%20Hp%20%3A%0AEmail%20%3A%0A" class="btn btn-success">Order Whatsapp</a>

                        </div>
                    </div>


                    <!-- Card -->

                </div>

            <?php endforeach;


            else {
                echo "</div>";
                echo "<div class='alert alert-danger' role='alert'>Data Tidak Ditemukan!</div>";
            } ?>

        </div>
        <!-- Grid column -->


</div>
<!-- Grid row -->

</section>
<!-- Section: Products v.3 -->
</div>