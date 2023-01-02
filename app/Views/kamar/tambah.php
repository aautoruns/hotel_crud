<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Form tambah data -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"> <i class="fas fa-fw fa-bed"></i> Form Tambah Data Kamar</h6>
    </div>
    <div class="card-body">

        <form action="/kamar/simpan" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="nokamar">No. Kamar</label>
                <input type="text" class="form-control <?= ($validation->hasError('nokamar')) ? 'is-invalid' : ''; ?>" id="nokamar" name="nokamar" autofocus value="<?= old('nokamar'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nokamar'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="idkamar">ID Kamar</label>
                <input type="text" class="form-control <?= ($validation->hasError('idkamar')) ? 'is-invalid' : ''; ?>" id="idkamar" name="idkamar" autofocus value="<?= old('idkamar'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('idkamar'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="idtipekamar">ID Tipe Kamar </label>
                <select class="form-control <?= ($validation->hasError('idtipekamar')) ? 'is-invalid' : ''; ?>" name="idtipekamar" id="idtipekamar" autofocus value="<?= old('idtipekamar'); ?>">
                    <?php foreach ($tipekamar as $row) : ?>
                        <option><?= $row['idtipekamar']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= $validation->getError('idtipekamar'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="price">Harga /Malam</label>
                <input type="text" class="form-control <?= ($validation->hasError('price')) ? 'is-invalid' : ''; ?>" id="price" name="price" autofocus value="<?= old('price'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('price'); ?>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Submit</button>

            <a href="/kamar" class="btn btn-success"><i class="fas fa-undo"></i> Back</a>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>