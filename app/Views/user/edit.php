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
                            <form action="/user/update/<?= user()->id; ?>" method="post">
                                <input type="text" name="id" value="<?= user()->id; ?>" required>
                                <div class="form-group">
                                    <input type="text" placeholder="username" class="form-control form-control-user" name="username" value="<?= user()->username; ?>">
                                </div>
                                <div class="form-group ">
                                    <input type="text" placeholder="fullname" class="form-control form-control-user" name="fullname" value="<?= user()->fullname; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="email" class="form-control form-control-user" name="email" value="<?= user()->email; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(''); ?>
<!-- /.container-fluid -->