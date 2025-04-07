<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "furniture";

// Connect to DB
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch form values
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$business_name = $_POST['business_name'];
$furniture_type = $_POST['furniture_type'];
$city = $_POST['city'];
$message = $_POST['message'];
$consent = isset($_POST['consent']) ? 1 : 0; // Checkbox

// Prepare and execute query
$sql = "INSERT INTO seller_interest 
        (full_name, email, phone, business_name, furniture_type, city, message, consent)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi", $full_name, $email, $phone, $business_name, $furniture_type, $city, $message, $consent);

if ($stmt->execute()) {
    header("Location: ../sellers.php?success=true");
} else {
    header("Location: ../sellers.php?error=true");
}

$stmt->close();
$conn->close();
