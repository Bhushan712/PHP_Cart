<?php include 'session.php'; ?>
<?php include 'products.php'; ?>

<h2>Product List</h2>
<ul>
    <?php foreach ($products as $id => $product): ?>
        <li>
            <?= $product['name'] ?> - ₹<?= $product['price'] ?>
            <form method="post" action="cart.php" style="display:inline;">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="add_to_cart" value="Add to Cart">
            </form>
        </li>
    <?php endforeach; ?>
</ul>

<a href="cart.php">Go to Cart</a>
