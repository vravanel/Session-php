<?php
session_start();
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($_COOKIE['cart'] as $product => $quantity):?>
            <tr>
                <td><img src="/assets/img/product-<?= $product ?>.jpg" alt="<?= $product ?>"> </td>
                <td><?= $quantity ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>