<?php
$ip_sv = "localhost";
$dbname_sv = "nro";
$user_sv = "root";
$pass_sv = "";

//GMT +7
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Create connection
$conn = new mysqli( $_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME'], $_ENV['DB_PORT'] );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>