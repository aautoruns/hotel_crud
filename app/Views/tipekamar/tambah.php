<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>



<!-- Form tambah data -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"> <i class="fas fa-fw  fa-bed"></i> Form Tambah Data Kamar</h6>
    </div>
    <div class="card-body">

        <form action="/tipekamar/simpan" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="idtipekamar">ID Tipe Kamar</label>
                <input type="text" class="form-control <?= ($validation->hasError('idtipekamar')) ? 'is-invalid' : ''; ?>" id="idtipekamar" name="idtipekamar" autofocus value="<?= old('idtipekamar'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('idtipekamar'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="namatipe">Tipe Kamar</label>
                <input type="text" class="form-control <?= ($validation->hasError('namatipe')) ? 'is-invalid' : ''; ?>" id="namatipe" name="namatipe" autofocus value="<?= old('namatipe'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('namatipe'); ?>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="ukuran">Ukuran Kamar</label>
                <input type="text" class="form-control <?= ($validation->hasError('ukuran')) ? 'is-invalid' : ''; ?>" id="ukuran" name="ukuran" autofocus value="<?= old('ukuran'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('ukuran'); ?>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Submit</button>

            <a href="/kamar" class="btn btn-success"><i class="fas fa-undo"></i> Back</a>

        </form>
    </div>
</div>





<?= $this->endSection(); ?>