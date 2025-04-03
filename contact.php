<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
// $stmt->execute();

if ($stmt->execute()) {
    // Send email
    $mail = new PHPMailer();
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ndubest56@gmail.com';
    $mail->Password = 'nomo zmbx siysljin'; // Use an App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('ndubest56@gmail.com', 'Website Contact Form');
    $mail->addReplyTo($email, $name); // Allow replies to user
    $mail->addAddress('ndubest56@gmail.com');
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    if ($mail->send()) {
        echo json_encode(["success" => true, "message" => "Message sent successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Email sending failed."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Failed to save data."]);
}

$stmt->close();
$conn->close();
