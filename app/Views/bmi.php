<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
    <div class="row">
        <div class="col-lg">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="card">
                    <div class="card-body">
                        <form action="/bmi/hitung" method="get">
                            <div class="form-group">
                                <label for="">Tinggi Badan</label>
                                <input type="number" class="form-control form-control-user" name="tb" required>
                            </div>
                            <div class="form-group">
                                <label for="">Berat Badan</label>
                                <input type="number" class="form-control form-control-user" name="bb" required>
                            </div>
                            <button type="submit" class="btn btn-success" name="hitung">Hitung</button>
                        </form>
                    </div>
                    <?php if (isset($hasil)) {
                        if ($hasil <= 18.5) {
                    ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <div>Hasil BMI : <b><?= number_format($hasil, 1) ?></b></div>
                                <div>Status : <b>Kurang Berat</b></div>
                                <div>Tinggi Badan : <b><?= $tb; ?> Cm</b></div>
                                <div>Berat Badan : <b><?= $bb; ?> Kg</b></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        } else if ($hasil >= 18.5 && $hasil <= 24.9) {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <div>Hasil BMI : <b><?= number_format($hasil, 1) ?></b></div>
                                <div>Status : <b>Normal</b></div>
                                <div>Tinggi Badan : <b><?= $tb; ?> Cm</b></div>
                                <div>Berat Badan : <b><?= $bb; ?> Kg</b></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        } else if ($hasil >= 25 && $hasil <= 29.9) {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <div>Hasil BMI : <b><?= number_format($hasil, 1) ?></b></div>
                                <div>Status : <b>Kelebihan Berat</b></div>
                                <div>Tinggi Badan : <b><?= $tb; ?> Cm</b> </div>
                                <div>Berat Badan : <b><?= $bb; ?> Kg</b></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <div>Hasil BMI : <b><?= number_format($hasil, 1) ?></b></div>
                                <div>Status : <b>Obesitas</b></div>
                                <div>Tinggi Badan : <b><?= $tb; ?> Cm</b></div>
                                <div>Berat Badan : <b><?= $bb; ?> Kg</b></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>
<!-- /.container-fluid -->