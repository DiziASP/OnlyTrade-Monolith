<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <h1>Detail Barang <?= $data['name'] ?></h1>


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<script>
    function handleSubmit(id) {
        data = {
            id: document.getElementById('id').value,
            name: document.getElementById('name').value,
            price: document.getElementById('price').value,
            stock: document.getElementById('stock').value,
            perusahaan_id: document.getElementById('perusahaan_id').value,
        }

        $.ajax({
            url: 'https://onlytrade-single-service-production.up.railway.app/api/barang/' + id,
            method: 'PUT',
            contentType: 'application/json',
            data: JSON.stringify(data),
            success: function(result) {
                window.location.href = '/';
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }
</script>
<?= $this->endSection(); ?>