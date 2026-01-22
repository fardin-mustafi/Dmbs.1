
<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db   = "login_system";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
