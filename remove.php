<?php
include 'session.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_SESSION['cart'][$id])) {
        // Reduce quantity by 1
        $_SESSION['cart'][$id]--;

        // Remove item completely if quantity is 0 or less
        if ($_SESSION['cart'][$id] <= 0) {
            unset($_SESSION['cart'][$id]);
        }
    }
}

header("Location: cart.php");
exit;
