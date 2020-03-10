                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    <?= $this->session->flashdata('message'); ?>
                                    <h5>Role <?= $role['role']; ?></h5>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?= $role['id']; ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
                                            <small class="form-text text-danger"><?= form_error('role'); ?></small>
                                        </div>
                                        <button type="submit" name="ubah" class="btn btn-success float-right">Edit Role</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->