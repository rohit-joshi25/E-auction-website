<?php
$conn = new mysqli("localhost", "root", "", "the_gallery");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, artist, year, description, image_url FROM paintings";
$result = $conn->query($sql);

$paintings = [];

while ($row = $result->fetch_assoc()) {
    $paintings[] = $row;
}

header('Content-Type: application/json');
echo json_encode($paintings);
?>
