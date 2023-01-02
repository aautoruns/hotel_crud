<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>



<!-- Form tambah data -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"> <i class="fas fa-fw  fa-robot"></i> Form Tambah Data Pegawai</h6>
    </div>
    <div class="card-body">

        <form action="/pegawai/simpan" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="nama">Nama </label>
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <select class="form-select <?= ($validation->hasError('posisi')) ? 'is-invalid' : ''; ?>" id="posisi" name="posisi" autofocus value="<?= old('posisi'); ?>">
                    <option selected>-- Pilih Posisi --</option>
                    <option value="1">Valet</option>
                    <option value="2">Porter</option>
                    <option value="3">Resepsionis</option>
                    <option value="4">Chef</option>
                    <option value="5">Maintenance staff</option>
                    <div class="invalid-feedback">
                        <?= $validation->getError('posisi'); ?>
                    </div>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat </label>
                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" autofocus value="<?= old('alamat'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" autofocus value="<?= old('email'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('email'); ?>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="telp">Telp </label>
                <input type="text" class="form-control <?= ($validation->hasError('telp')) ? 'is-invalid' : ''; ?>" id="telp" name="telp" autofocus value="<?= old('telp'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('telp'); ?>
                </div>
            </div>

            <div class="custom-file mb-3">
                <input type="file" class="form-control custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" autofocus value="<?= old('gambar'); ?>" id="gambar" name="gambar">
                <label class="custom-file-label" for="validatedCustomFile">Pilih Gambar...</label>
                <div class="invalid-feedback"> <?= $validation->getError('gambar'); ?></div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Submit</button>

            <a href="/pegawai" class="btn btn-success"><i class="fas fa-undo"></i> Back</a>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>