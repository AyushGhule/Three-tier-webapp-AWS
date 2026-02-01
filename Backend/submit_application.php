<?php
require_once "db_connect.example.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name  = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $amount = trim($_POST["amount"]);

    if (empty($name) || empty($email) || empty($phone) || empty($amount)) {
        die("All fields are required");
    }

    $stmt = $conn->prepare(
        "INSERT INTO loan_applications (name, email, phone, amount)
         VALUES (?, ?, ?, ?)"
    );

    if (!$stmt) {
        die("Preparation failed");
    }

    $stmt->bind_param("sssd", $name, $email, $phone, $amount);

    if ($stmt->execute()) {
        echo "Application submitted successfully";
    } else {
        echo "Error submitting application";
    }

    $stmt->close();
    $conn->close();
}
?>
