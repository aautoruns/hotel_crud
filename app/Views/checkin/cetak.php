<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Data Pegawai -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-bell"></i> Data Check In Hotel</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Tamu</th>
                        <th>ID Kamar</th>
                        <th>Tanggal Check In</th>
                        <th>Durasi / Hari</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($checkin as $row) : ?>
                        <tr>
                            <td><?= $row['idtamu']; ?></td>
                            <td><?= $row['idkamar']; ?></td>
                            <td><?= $row['checkin']; ?></td>
                            <td><?= $row['duration']; ?></td>
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