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
                            <h5>Data Pengguna </h5>
                        </div>
                        <div class="col-sm-7">

                            <a href="<?= base_url(''); ?>auth/registration" class="btn btn-primary float-right"><i class="mdi mdi-account"></i> <span>Tambah Admin</span></a>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table_id">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Image </th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($admin as $q) : ?>
                                    <tr class="table-info">
                                        <td> <?= $i; ?></td>
                                        <td><?= $q['nama_user']; ?></td>
                                        <td><?= $q['email']; ?></td>
                                        <td> <img src="<?= base_url('assets/images/home-right.png'); ?>?" alt="" width="200px" height="200px"></td>

                                        <td>
                                            <a href="<?= base_url(); ?>dashboard/hapusadmin/<?= $q['id_user']; ?>" class="badge badge-danger px-2 py-2">Hapus </a>

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