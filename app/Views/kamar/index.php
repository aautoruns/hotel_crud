<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-6">
        <a href="/kamar/tambah" class="btn btn-icon-split mb-3 text-light" style="background: linear-gradient(to bottom, #660033 0%, #990033 100%);">
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

<!-- Data kamar -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-bed"></i> Data Kamar</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No. Kamar</th>
                        <th>ID Kamar</th>
                        <th>ID Tipe Kamar</th>
                        <th>Harga / Malam</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kamar as $row) : ?>
                        <tr>
                            <td><?= $row['nokamar']; ?></td>
                            <td><?= $row['idkamar']; ?></td>
                            <td><?= $row['idtipekamar']; ?></td>
                            <td><?= $row['price']; ?></td>
                            <td>
                                <a href="/kamar/edit/<?= $row['idkamar']; ?>" class="badge badge-primary">Edit</a>

                                <form action="/kamar/delete/<?= $row['idkamar']; ?>" method="POST" class="d-inline">
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