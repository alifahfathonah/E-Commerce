<div class="main-panel">
    <div class="content-wrapper">

        <div class="row purchace-popup">
            <div class="col-12">
                <span class="d-block d-md-flex align-items-center bg-info">
                    <p class=" text-white"> Informasi</p>
                </span>
            </div>
        </div>



        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <h5>Data Produk </h5>
                        </div>
                        <div class="col-sm-7">

                            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalContactForm"><i class="mdi mdi-account"></i> <span>Tambah Produk</span></a>

                        </div>
                    </div>

                    <?= $this->session->flashdata('message'); ?>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="table_id">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama produk</th>
                                    <th>Harga</th>
                                    <th>Jenis Produk </th>
                                    <th>Deskripsi </th>
                                    <th>Acara </th>
                                    <th>Image </th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($produk as $q) : ?>
                                    <tr class="table-info">
                                        <td> <?= $i; ?></td>
                                        <td><?= $q['nama_produk']; ?></td>
                                        <td>Rp.<?= number_format($q['harga_produk']); ?> </td>
                                        <td><?= $q['jenis_produk']; ?></td>
                                        <td><?= $q['deskripsi']; ?></td>
                                        <td><?= $q['acara']; ?></td>
                                        <td> <img src="<?= base_url('assets/imgproduk/') . $q['gambar']; ?>?" alt="" width="200px" height="200px">
                                        </td>



                                        <td>
                                            <a href="<?= base_url(); ?>dashboard/hapusproduk/<?= $q['id_produk']; ?>" class="badge badge-danger px-2 py-2">Hapus </a>

                                            <a href="<?= base_url(); ?>dashboard/detailproduk/<?= $q['id_produk']; ?>" class="badge badge-primary px-2 py-2"> Edit </a> &nbsp


                                        </td>
                                    </tr>
                                    <?php $i++ ?>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <!-- content-wrapper ends -->


    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Tambah Produk </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <?= form_open_multipart('dashboard/produk'); ?>
                    <div class="md-form mb-5">
                        <i class="fas fa-at prefix primary-text"></i>
                        <input type="text" id="form34" name="nama_produk" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Nama Produk</label>
                    </div>
                    <div class="md-form mb-3">
                        <i class="fas fa-coins prefix primary-text"></i>
                        <input type="text" name="harga_produk" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="form34">Harga</label>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="mb-5">
                        <div class="form-group">
                            <label for="jenis_produk">Jenis Produk</label>
                            <select class="form-control" id="jenis_produk" name="id_jenis">
                                <?php foreach ($jenis as $q) : ?>
                                    <option value="<?= $q['id_jenis']; ?>"><?= $q['jenis_produk']; ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="form-group">
                            <label for="acara">Acara</label>
                            <select class="form-control" id="acara" name="id_acara">
                                <?php foreach ($acara as $q) : ?>
                                    <option value="<?= $q['id_acara']; ?>"><?= $q['acara']; ?></option>

                                <?php endforeach; ?>
                            </select>
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