                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                    <?= $this->session->flashdata('message'); ?>
                                    <h5>Role <?= $menu['menu']; ?></h5>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                                            <small class="form-text text-danger"><?= form_error('menu'); ?></small>
                                        </div>
                                        <button type="submit" name="ubah" class="btn btn-success float-right">Edit Menu</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->