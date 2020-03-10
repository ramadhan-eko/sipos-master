                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <?= $this->session->flashdata('message'); ?>
                                    <h5>Role <?= $subMenu['title']; ?></h5>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?= $subMenu['id']; ?>">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title']; ?>">
                                                <small class="form-text text-danger"><?= form_error('title'); ?></small>
                                            </div>

                                            <div class="form-group">
                                                <select name="menu_id" id="menu_id" class="form-control">
                                                    <option value="">Select Menu</option>
                                                    <?php foreach ($menu as $m) : ?>
                                                        <option value="<?= $m['id']; ?>"><?= $m['menu'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <small class="form-text text-danger"><?= form_error('menu_id'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']; ?>"">
                                                <small class=" form-text text-danger"><?= form_error('icon'); ?></small>
                                            </div>
                                            <div class=" form-group">
                                                <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']; ?>">
                                                <small class="form-text text-danger"><?= form_error('icon'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                                    <label class="form-check-label" for="is_active">
                                                        Active?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->