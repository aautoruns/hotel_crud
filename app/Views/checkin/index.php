<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-fw  fa-user-circle"></i> Pegawai</h1>
</div> -->

<div class="row">
    <div class="col-6">
        <a href="/checkin/tambah" class="btn btn-icon-split mb-3 text-light" style="background: linear-gradient(to bottom, #660033 0%, #990033 100%);">
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

<!-- Data Pegawai -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-bell"></i> Data Check In Hotel</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Tamu</th>
                        <th>ID Kamar</th>
                        <th>Tanggal Check In</th>
                        <th>Durasi / Hari</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($checkin as $row) : ?>
                        <tr>
                            <td><?= $row['idtamu']; ?></td>
                            <td><?= $row['idkamar']; ?></td>
                            <td><?= $row['checkin']; ?></td>
                            <td><?= $row['duration']; ?></td>
                            <td>
                                <a href="/checkin/edit/<?= $row['id']; ?>" class="badge badge-primary">Edit</a>

                                <form action="/checkin/delete/<?= $row['id']; ?>" method="POST" class="d-inline">
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