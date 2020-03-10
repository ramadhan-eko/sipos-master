<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <h2>Shopping Cart Dengan Ajax dan Codeigniter</h2>
    <hr />
    <div class="row">
        <div class="col-md-8">
            <h4>Produk</h4>
            <div class="row">
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img width="100" src="<?php echo base_url() . 'assets/images/' . $row->produk_image; ?>">
                            <div class="caption">
                                <h4><?php echo $row->produk_nama; ?></h4>
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4><?php echo 'Rp ' . number_format($row->produk_harga); ?></h4>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="number" name="quantity" id="<?php echo $row->produk_id; ?>" value="1" class="quantity form-control">
                                    </div>
                                </div>
                                <button class="add_cart btn btn-success btn-block" data-produkid="<?php echo $row->produk_id; ?>" data-produknama="<?php echo $row->produk_nama; ?>" data-produkharga="<?php echo $row->produk_harga; ?>">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-4">
            <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">

                </tbody>

            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->