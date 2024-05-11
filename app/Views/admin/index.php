<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <div class="row">
        <div class="col-lg">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Username</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Role</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($users as $user) :?>
                        <tr>
                            <th scope="col"><?= $i++; ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->name; ?></td>
                            <td>
                                <a class="btn btn-info" href="<?= base_url('admin/' . $user->userid); ?>">Detail</a>
                            </td>
                            
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(''); ?>
<!-- /.container-fluid -->