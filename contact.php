<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "contact_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // Secure data to prevent SQL Injection
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $message = $conn->real_escape_string($message);
    // Insert data into database
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Data inserted successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
// Close connection
$conn->close();
?>