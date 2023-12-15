<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <h3>History</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $value['created_at']; ?></td>
                            <td><?= $value['amount']; ?></td>
                            <td><?= $value['total']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?= $this->endSection(); ?>