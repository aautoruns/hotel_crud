<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Data Pegawai -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-user"></i> Data Tamu Hotel</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Tamu</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Nomer Handphone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tamu as $row) : ?>
                        <tr>
                            <td><?= $row['idtamu']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['phone']; ?></td>
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