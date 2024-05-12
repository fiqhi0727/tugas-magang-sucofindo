<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
    <div class="row">
        <div class="col-lg">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= user()->username; ?></h4>
                                    </li>
                                    <?php if (user()->fullname) :  ?>
                                        <li class="list-group-item">
                                            <?= user()->fullname; ?>
                                        </li>
                                    <?php endif; ?>
                                    <li class="list-group-item"><?= user()->email; ?></li>
                                    <li class="list-group-item">
                                        <button class="btn btn-transparent p-0 border-0"><a href="user/edit/<?= user()->user_id; ?>" class="badge badge-success">edit profil</a></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>
<!-- /.container-fluid -->