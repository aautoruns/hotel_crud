<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Data Profile -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-bed"></i> Data Hotel Pesaing</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Hotel</th>
                        <th>Bintang</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telp</th>
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