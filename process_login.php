<?php
session_start();

$conn = new mysqli("localhost", "root", "", "the_gallery");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect user input
$email = $_POST['email'] ?? '';
$password_input = $_POST['password'] ?? '';

// Find user by email
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // Check password
    if (password_verify($password_input, $user['password'])) {
        $_SESSION["username"] = $user['username']; // Save session
        echo "<script>alert('Login successful'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Incorrect password'); window.location.href='account.html';</script>";
    }
} else {
    echo "<script>alert('No account found with that email'); window.location.href='account.html';</script>";
}

$stmt->close();
$conn->close();
?>
