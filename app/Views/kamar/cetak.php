<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Data kamar -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-fw  fa-bed"></i> Data Kamar</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No. Kamar</th>
                        <th>ID Kamar</th>
                        <th>ID Tipe Kamar</th>
                        <th>Harga / Malam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kamar as $row) : ?>
                        <tr>
                            <td><?= $row['nokamar']; ?></td>
                            <td><?= $row['idkamar']; ?></td>
                            <td><?= $row['idtipekamar']; ?></td>
                            <td><?= $row['price']; ?></td>
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