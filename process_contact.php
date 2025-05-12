<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "gallery_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get and sanitize form data
    $first_name = $conn->real_escape_string($_POST["first_name"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $message = $conn->real_escape_string($_POST["message"]);

    // Insert into database
    $sql = "INSERT INTO contact_messages (first_name, last_name, email, phone, message)
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Show alert and redirect back to homepage
        echo "<script>
            alert('Thank you! Your message has been submitted.');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
