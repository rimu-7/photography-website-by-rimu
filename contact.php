<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "fp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Insert data into the database
$sql = "INSERT INTO customers (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
