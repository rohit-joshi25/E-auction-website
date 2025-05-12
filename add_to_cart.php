<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['item_name'];
    $price = floatval($_POST['item_price']);
    $image = $_POST['item_image'] ?? '';

    $item = [
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'quantity' => 1
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $found = false;
    foreach ($_SESSION['cart'] as &$existing_item) {
        if ($existing_item['name'] === $name) {
            $existing_item['quantity']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = $item;
    }

    echo json_encode(['status' => 'success']);
}
