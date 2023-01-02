<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="ml-5 mt-5 mr-5">
    <h2 class="h1-responsive font-weight-bold my-5" class="w-responsive mx-auto mb-5"><span class="icon text-black">
            <i class="fa fa-print"></i>
        </span>Cetak Data</h2>
    <ul class="list-unstyled"></ul>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background: linear-gradient(to right top, #660033 0%, #990033 100%);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                Data Pegawai Hotel</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-robot fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/pegawai" class="card-link"><i class="fa-solid fa-file"></i>&nbsp&nbsp Lihat Data</a>
                    <a href="/pegawai/cetak" class="card-link"><i class="fa-solid fa-print"></i>&nbsp&nbsp Cetak Data</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background: linear-gradient(to right top, #660033 0%, #990033 100%);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                Data Tamu Hotel</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-user fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/tamu" class="card-link"><i class="fa-solid fa-file"></i>&nbsp&nbsp Lihat Data</a>
                    <a href="/tamu/cetak" class="card-link"><i class="fa-solid fa-print"></i>&nbsp&nbsp Cetak Data</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background: linear-gradient(to right top, #660033 0%, #990033 100%);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                Data Check In Hotel</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bell fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/checkin" class="card-link"><i class="fa-solid fa-file"></i>&nbsp&nbsp Lihat Data</a>
                    <a href="/checkin/cetak" class="card-link"><i class="fa-solid fa-print"></i>&nbsp&nbsp Cetak Data</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background: linear-gradient(to right top, #660033 0%, #990033 100%);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                Data Hotel Pesaing</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-hotel fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/hotel" class="card-link"><i class="fa-solid fa-file"></i>&nbsp&nbsp Lihat Data</a>
                    <a href="/hotel/cetak" class="card-link"><i class="fa-solid fa-print"></i>&nbsp&nbsp Cetak Data</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background: linear-gradient(to right top, #660033 0%, #990033 100%);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                Data Kamar Hotel</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bed fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/kamar" class="card-link"><i class="fa-solid fa-file"></i>&nbsp&nbsp Lihat Data</a>
                    <a href="/kamar/cetak" class="card-link"><i class="fa-solid fa-print"></i>&nbsp&nbsp Cetak Data</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background: linear-gradient(to right top, #660033 0%, #990033 100%);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                Data Tipe Kamar</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bed fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a href="/tipekamar" class="card-link"><i class="fa-solid fa-file"></i>&nbsp&nbsp Lihat Data</a>
                    <a href="/tipekamar/cetak" class="card-link"><i class="fa-solid fa-print"></i>&nbsp&nbsp Cetak Data</a>
                </div>
            </div>
        </div>
    </div>
</div><?= $this->endSection(); ?>