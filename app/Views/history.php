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
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?php echo base_url()?>/template/img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">-- Purchased on 02/04/2023 --</p>
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00</h4>
									</div>
								</div>
								<!-- /product -->
								
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?php echo base_url()?>/template/img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">-- Purchased on 02/04/2023 --</p>
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00</h4>
									</div>
								</div>
								<!-- /product -->
								
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?php echo base_url()?>/template/img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">-- Purchased on 02/04/2023 --</p>
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00</h4>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?php echo base_url()?>/template/img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">-- Purchased on 02/04/2023 --</p>
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00</h4>
									</div>
								</div>
								<!-- /product -->
								
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?php echo base_url()?>/template/img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">-- Purchased on 02/04/2023 --</p>
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00</h4>
									</div>
								</div>
								<!-- /product -->
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
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