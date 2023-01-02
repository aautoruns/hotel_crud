<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Data Pegawai -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-robot"></i> Data Pegawai</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama Pegawai</th>
                        <th>Posisi</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telpon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pegawai as $row) : ?>
                        <tr>
                            <td>
                                <img src="/img/pegawai/<?= $row['gambar']; ?>" width="100px">
                            </td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['posisi']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['telp']; ?></td>
                            <td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    window.print()
</script>

<?= $this->endSection(); ?>