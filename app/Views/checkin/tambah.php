<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Form tambah data -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"> <i class="fas fa-fw  fa-bell"></i> Form Tambah Data Check In Hotel</h6>
    </div>
    <div class="card-body">

        <form action="/checkin/simpan" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label for="idtamu">ID Tamu </label>
                <select class="form-control <?= ($validation->hasError('idtamu')) ? 'is-invalid' : ''; ?>" name="idtamu" id="idtamu" autofocus value="<?= old('idtamu'); ?>">
                    <?php foreach ($tamu as $row) : ?>
                        <option><?= $row['idtamu']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('idtamu'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="idkamar">ID Kamar </label>
                <select class="form-control <?= ($validation->hasError('idkamar')) ? 'is-invalid' : ''; ?>" name="idkamar" id="idkamar" autofocus value="<?= old('idkamar'); ?>">
                    <?php foreach ($kamar as $row) : ?>
                        <option><?= $row['idkamar']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('idkamar'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="checkin">Tanggal Checkin</label>
                <input type="date" class="form-control <?= ($validation->hasError('checkin')) ? 'is-invalid' : ''; ?>" id="checkin" name="checkin" autofocus value="<?= old('checkin'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('checkin'); ?>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="duration">Durasi Inap / Hari</label>
                <input type="number" class="form-control <?= ($validation->hasError('duration')) ? 'is-invalid' : ''; ?>" id="duration" name="duration" autofocus value="<?= old('duration'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('duration'); ?>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Submit</button>

            <a href="/checkin" class="btn btn-success"><i class="fas fa-undo"></i> Back</a>

        </form>
    </div>
</div>





<?= $this->endSection(); ?>