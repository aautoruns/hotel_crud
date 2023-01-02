<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Note Reports</h1>
            <ol class="list-group list-group-numbered mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Ekspor PDF</div>
                        Belum ditambahkan
                    </div>
                    <span class="badge bg-primary rounded-pill text-white">Notes</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Hosting Web</div>
                        Belum dilakukan
                    </div>
                    <span class="badge bg-primary rounded-pill text-white">Notes</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Hitung Jumlah Data Suatu Tabel</div>
                        Belum ditambahkan (Opsi)
                    </div>
                    <span class="badge bg-primary rounded-pill text-white">Notes</span>
                </li>
            </ol>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>