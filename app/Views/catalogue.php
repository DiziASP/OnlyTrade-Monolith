<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
                    <!-- Product -->
                    <?php foreach ($barang as $b): ?>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="<?php echo base_url()?>/template/img/product01.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Stock : <?= $b['stokBarang']; ?></p>
                                    <h3 class="product-name"><a href="#"><?= $b['namaBarang']; ?></a></h3>
                                    <h4 class="product-price">Rp<?= $b['hargaBarang']; ?></h4>
                                    <p class="product-category"><?= $b['perusahaanBarang']; ?></p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="/detail/<?= $b['idBarang']; ?>">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Check Detail</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- /Product -->
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?= $this->endSection(); ?>