<?php
require_once("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    $result = $conn->exec($sql);

    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->lastErrorMsg();
    }
}

$conn->close();
?>
