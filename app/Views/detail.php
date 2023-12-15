<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <h1>Detail Barang</h1>
            <div class="product">
                <div class="product-img">
                    <img src="<?php echo base_url() ?>/template/img/product01.png" alt="">
                </div>
                <div class="product-body text-truncate d-inline-block">
                    <p class="product-category"><?= $data['perusahaan'] ?></p>
                    <h3 class="product-name text-truncate"><?= $data['name'] ?></h3>
                    <h4 class="product-price">Rp <?= $data['price'] ?></h4>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form method="post" action="/api/buy">
                <input type="hidden" id="price" name="price" value="<?= $data['price'] ?>">
                <input type="text" id="amount" name="amount" placeholder="<?= $data['stock'] ?>">
                <button class="add-to-cart-btn" type="submit">Buy Now</button>
            </form>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- <script>
    function handleSubmit(id) {
        data = {
            id: id,
            amount: document.getElementById('stock').value,
        }

        $.ajax({
            url: '/api/buy',
            method: 'POST',
            contentType: 'application/json',
            data: data,
            success: function(result) {
                alert('Berhasil membeli barang');
                window.location.href = '/';
            },
            error: function(xhr, status, error) {
                alert('error anjg');
            }
        });
    }
</script> -->
<?= $this->endSection(); ?>