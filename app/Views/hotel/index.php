<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-6">
        <a href="/hotel/tambah" class="btn btn-primary btn-icon-split mb-3 text-light" style="background: linear-gradient(to bottom, #660033 0%, #990033 100%);">
            <span class="icon text-white-50">
                <i class="fas fa-plus-circle"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>
</div>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success my-2 text-center" role="alert">
        <i class="fas fa-check-circle"></i> <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<!-- Data Profile -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-bed"></i> Data Hotel Pesaing</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Hotel</th>
                        <th>Bintang</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotel as $row) : ?>
                        <tr>
                            <td><?= $row['nama_hotel']; ?></td>
                            <td><?= $row['bintang']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['telp']; ?></td>
                            <td>
                                <a href="/hotel/edit/<?= $row['id']; ?>" class="badge badge-primary">Edit</a>

                                <form action="/hotel/delete/<?= $row['id']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="badge badge-danger btn-sm" onclick="return confirm('Apa Anda Yakin hapus data?.');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>