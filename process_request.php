<?php
$conn = new mysqli("localhost", "root", "", "the_gallery");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$stmt = $conn->prepare("INSERT INTO general_requests (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "<script>alert('Thank you! Your request has been submitted.'); window.location.href='request_info.html';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
