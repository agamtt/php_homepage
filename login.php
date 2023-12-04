<?php
require_once("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch hashed password from the database
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->querySingle($sql);

    if ($result !== false) {
        // Verify the password
        if (password_verify($password, $result)) {
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}

$conn->close();
?>