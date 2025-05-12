<?php
session_start();
$cart = $_SESSION['cart'] ?? [];

if (empty($cart)) {
    echo "<h2>Your cart is empty!</h2>";
    exit;
}
?>

<h2>Your Order Summary:</h2>
<ul>
<?php
$total = 0;
foreach ($cart as $item) {
    $subtotal = $item['price'] * $item['quantity'];
    $total += $subtotal;
    echo "<li><strong>{$item['name']}</strong> — ₹{$item['price']} x {$item['quantity']} = ₹{$subtotal}</li>";
}
?>
</ul>
<p><strong>Total: ₹<?php echo $total; ?></strong></p>
