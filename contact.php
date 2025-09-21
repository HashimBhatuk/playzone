<?php
// Database connection
$servername = "localhost";
$username = "root";   // default XAMPP username
$password = "";       // default XAMPP password is empty
$dbname = "playzone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO contact_form (name, email, phone, message) 
        VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Thank you! Your message has been submitted successfully.</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
