<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sust_faculty";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$full_name = $_POST['full_name'];
$title = $_POST['title'];
$department = $_POST['department'];
$short_bio = $_POST['short_bio'];
$photo_url = $_POST['photo_url'];

// Insert into database
$sql = "INSERT INTO faculty (full_name, title, department, short_bio, photo_url)
VALUES ('$full_name', '$title', '$department', '$short_bio', '$photo_url')";

if ($conn->query($sql) === TRUE) {
    echo "New faculty member added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
