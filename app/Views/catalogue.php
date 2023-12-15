<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- SEARCH BAR -->
			<div class="col-md-6">
				<div class="header-search">
					<form>
						<select class="input-select">
							<option value="0">All Categories</option>
							<option value="1">Category 01</option>
							<option value="1">Category 02</option>
						</select>
						<input class="input" placeholder="Search here">
						<button class="search-btn">Search</button>
					</form>
				</div>
			</div>
			<!-- /SEARCH BAR -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<!-- product -->
								<!-- For each in data -->
								<?php foreach ($data as $row) : ?>
									<div class="product">
										<div class="product-img">
											<img src="<?php echo base_url() ?>/template/img/product01.png" alt="">
										</div>
										<div class="product-body text-truncate d-inline-block">
											<p class="product-category"></p>
											<h3 class="product-name text-truncate"><?= $row['name'] ?></h3>
											<h4 class="product-price">Rp <?= $row['price'] ?></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
										<div class="add-to-cart">
											<a href="#"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Purchase </button></a>
										</div>
									</div>
								<?php endforeach; ?>
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