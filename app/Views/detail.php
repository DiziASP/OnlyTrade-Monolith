<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="/">Catalogue</a></li>
                    <li class="active">Detail</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-3">
                <div class="product-preview">
                    <img src="<?php echo base_url()?>/template/img/product01.png" alt="">
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <p class="product-category">Stok : 10</p>
                    <h2 class="product-name">product name goes here</h2>
                    <div>
                        <h3 class="product-price">$980.00</h3>
                    </div>
                    <p>Perusahaan</p>
                    <p>Alamat</p>
                    <p>No. Telepon</p>

                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> buy</button>
                    </div>
                </div>
            </div>
            <!-- /Product details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?= $this->endSection(); ?>