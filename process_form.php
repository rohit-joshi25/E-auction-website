<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "the_gallery";  // Ensure this matches your database name

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data exists
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize inputs
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $message);

    // Execute and check
    if ($stmt->execute()) {
        echo "<script>alert('Thank you! Your message has been submitted.'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    // If method isn't POST, block it (fix for 405 error)
    http_response_code(405);
    echo "Method Not Allowed";
}

$conn->close();
?>
