<?php
$db_path = __DIR__ . "/mydb.db";

$conn = new SQLite3($db_path);

if (!$conn) {
    die("Connection failed: " . $conn->lastErrorMsg());
}
?>