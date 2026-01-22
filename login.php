<?php
include "db.php";

$email = $_POST['email'];
$pass = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        echo "Login Successful. Welcome " . $row['name'];
    } else {
        echo "Wrong Password";
    }
} else {
    echo "User not found";
}
?>
