<?php include 'session.php'; ?>
<?php include 'products.php';

// Add to cart
if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];
    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = 1;
    } else {
        $_SESSION['cart'][$id]++;
    }
}

// Remove item
if (isset($_GET['remove'])) {
    $removeId = $_GET['remove'];
    unset($_SESSION['cart'][$removeId]);
}
?>

<h2>Your Cart</h2>
<?php if (!empty($_SESSION['cart'])): ?>
    <ul>
        <?php 
        $total = 0;
        foreach ($_SESSION['cart'] as $id => $qty): 
            $item = $products[$id];
            $subtotal = $item['price'] * $qty;
            $total += $subtotal;
        ?>
            <li>
                
    <?= $item['name'] ?> (Qty: <?= $qty ?>) - ₹<?= $subtotal ?>
    <a href="remove.php?id=<?= $id ?>">Remove 1</a> |
    <a href="remove.php?id=<?= $id ?>&all=1">Remove All</a>
</li>
      
        <?php endforeach; ?>
    </ul>
    <h3>Total: ₹<?= $total ?></h3>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

<a href="index.php">Back to Shopping</a>
