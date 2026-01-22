
<?php
include "db.php";

$success = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    // Check duplicate email
    $check = $conn->query("SELECT id FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        $error = "This email is already registered.";
    } else {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name,email,password)
                VALUES ('$name','$email','$hash')";

        if ($conn->query($sql)) {
            $success = true;
        } else {
            $error = "Something went wrong.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Signup Status</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="success-bg">

<?php if($success): ?>

  <div class="confirm-card">
    <div class="check-circle">✓</div>
    <h1>Signup Confirmed</h1>
    <p>Your account has been created successfully.</p>

    <hr>

    <p class="small">You can now login and start using the system</p>
    <a href="index.html" class="login-btn">Login Now</a>
  </div>

<?php else: ?>

  <div class="confirm-card">
    <h1>Signup Failed</h1>
    <p><?php echo $error; ?></p>
    <a href="signup.html" class="login-btn">Go Back</a>
  </div>

<?php endif; ?>

</body>
</html>

