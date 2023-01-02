<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Form tambah data -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"> <i class="fas fa-fw  fa-bed"></i> Form Edit Data Check In Hotel</h6>
    </div>
    <div class="card-body">

        <form action="/checkin/update/<?= $checkin['id']; ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $checkin['id']; ?>">

            <div class="form-group">
                <label for="idtamu">ID Tamu</label>
                <input type="text" class="form-control <?= ($validation->hasError('idtamu')) ? 'is-invalid' : ''; ?>" id="idtamu" name="idtamu" autofocus value="<?= $checkin['idtamu']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('idtamu'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="idkamar">ID Kamar</label>
                <input type="text" class="form-control <?= ($validation->hasError('cheidkamarckin')) ? 'is-invalid' : ''; ?>" id="idkamar" name="idkamar" autofocus value="<?= $checkin['idkamar']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('idkamar'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="checkin">Tanggal Checkin</label>
                <input type="date" class="form-control <?= ($validation->hasError('checkin')) ? 'is-invalid' : ''; ?>" id="checkin" name="checkin" autofocus value="<?= $checkin['checkin']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('checkin'); ?>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="duration">Durasi Inap / Hari</label>
                <input type="number" class="form-control <?= ($validation->hasError('duration')) ? 'is-invalid' : ''; ?>" id="duration" name="duration" autofocus value="<?= $checkin['duration']; ?>">
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