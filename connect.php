<?php
$servername = "localhost";
$username = "root";  
$password = "Honey@55114";  
$dbname = "omnitranslate";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO contacts (name, phone, email, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $message);

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
