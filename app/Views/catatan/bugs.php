<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Bug Reports</h1>
            <ol class="list-group list-group-numbered mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tamu / Edit</div>
                        Duplicate entry '1' for key 'PRIMARY'
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tamu / Tambah</div>
                        Tidak bisa disubmit
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Checkin / Edit</div>
                        Tidak bisa disubmit, idcheckin sudah terdaftar.
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Kamar / Edit</div>
                        foreach() argument must be of type array|object, null given
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Kamar / Delete</div>
                        Data tidak terhapus
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Kamar / Simpan</div>
                        Cannot delete or update a parent row: a foreign key constraint fails (`datahotel`.`tbl_checkin`, CONSTRAINT `tbl_checkin_ibfk_2` FOREIGN KEY (`idkamar`) REFERENCES `kamar` (`idkamar`) ON DELETE SET NULL ON UPDATE SET NULL)
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tipe Kamar / Tambah</div>
                        Button back kembaline ke /kamar
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tipe Kamar / Edit</div>
                        Too few arguments to function App\Controllers\Tipekamar::edit(), 0 passed in C:\xampp\htdocs\STMIK\Pemrograman Berbasis Web_2\respon2_hoteloblivion\vendor\codeigniter4\framework\system\CodeIgniter.php on line 925 and exactly 1 expected cted
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tipe Kamar / hapus</div>
                        Unknown column 'id' in 'where clause'
                    </div>
                    <span class="badge bg-danger rounded-pill text-white">Bug</span>
                </li>
            </ol>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>