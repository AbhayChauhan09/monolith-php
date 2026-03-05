<?php

$host = "db";
$user = "appuser";
$password = "password123";
$database = "monolith_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
