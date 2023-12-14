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
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo base_url()?>/template/img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">Product Name Goes Here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                            </div>
                            <div class="add-to-cart">
                                <a href="/detail">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Check Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Product -->

                    <!-- Product -->
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo base_url()?>/template/img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">Product Name Goes Here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                            </div>
                            <div class="add-to-cart">
                                <a href="/detail">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Check Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Product -->

                    <!-- Product -->
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo base_url()?>/template/img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">Product Name Goes Here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                            </div>
                            <div class="add-to-cart">
                                <a href="/detail">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Check Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Product -->
					
                    <!-- Product -->
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo base_url()?>/template/img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">Product Name Goes Here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                            </div>
                            <div class="add-to-cart">
                                <a href="/detail">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Check Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
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