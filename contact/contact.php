<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "furniture";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Database connection failed."]);
    exit;
}

// Get form data
$name = $email = $phone = $message = "";

// echo json_encode([
//     "POST data" => $_POST,
//     "Raw input" => file_get_contents("php://input")
// ]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? "";
    $email = $_POST['email'] ?? "";
    $phone = $_POST['phone'] ?? "";
    $message = $_POST['message'] ?? "";
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
    exit;
}

if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    echo json_encode(["success" => false, "message" => "All fields are required."]);
    exit;
}

// Save to database
$stmt = $conn->prepare("INSERT INTO messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $message);
if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Message sent successfully."]);
}

$stmt->close();
$conn->close();
