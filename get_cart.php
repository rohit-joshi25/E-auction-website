<?php
session_start();

$cart_items = $_SESSION['cart'] ?? [];

$total_items = 0;
foreach ($cart_items as $item) {
    $total_items += $item['quantity'];
}

echo json_encode([
    'cart_items' => $cart_items,
    'total_items' => $total_items
]);
