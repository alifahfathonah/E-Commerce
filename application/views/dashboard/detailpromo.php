<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <!--isi disini  -->

        <div class="container">

            <div class="card">
                <div class="card-body">
                    <form class="form" method="post" action="<?= base_url('dashboard/editpromo'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id_promo" value="<?= $produk['id_promo']; ?>">

                        <div class="md-form mb-5">
                            <i class="fas fa-at prefix primary-text"></i>
                            <input type="text" id="form34" name="nama_produk" value="<?= $produk['nama_produk']; ?>" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="form34">Nama Produk</label>
                        </div>
                        <div class="md-form mb-3">
                            <i class="fas fa-coins prefix primary-text"></i>
                            <input type="text" name="harga_awal" value="<?= $produk['harga_awal']; ?>" class=" form-control validate">
                            <label data-error="wrong" data-success="right" for="form34">Harga Awal</label>
                        </div>
                        <div class="md-form mb-3">
                            <i class="fas fa-coins prefix primary-text"></i>
                            <input type="text" name="harga_akhir" value="<?= $produk['harga_akhir']; ?>" class=" form-control validate">
                            <label data-error="wrong" data-success="right" for="form34">Harga Jual</label>
                        </div>

                        <div class="mb-5">
                            <div class="form-group">
                                <label for="acara">Gambar Produk</label>
                                <img src="<?= base_url('assets/imgproduk/') . $produk['gambar']; ?>" alt="" width="200px" height="200px">
                            </div>
                        </div>

                        <div class="md-form mb-5">

                            <input type="file" name="berkas" class="form-control-file" id="exampleFormControlFile1">

                        </div>



                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="submit">Send <i class="mdi mdi-send ml-1"></i></button>
                </div>

                </form>
            </div>
        </div>





    </div>
    <!-- content-wrapper ends -->