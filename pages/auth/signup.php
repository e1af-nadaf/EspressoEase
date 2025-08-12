<?php
session_start();
include "../../includes/db.php";

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Insert user into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            $success = "Signed up successfully! Redirecting to login...";
            // Auto redirect after 2 seconds
            echo "<script>
                setTimeout(function() {
                    window.location.href = 'login.php';
                }, 2000);
            </script>";
        } else {
            $error = "Error: " . $conn->error;
        }
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - EspressoEase</title>
    <link rel="stylesheet" href="/EspressoEase/assets/css/style.css">
</head>
<body>
    <?php include "../../includes/navbar.php"; ?>

    <div class="main-content">
        <h1>Sign Up</h1>

        <?php
        if (!empty($success)) {
            echo "<p class='success'>$success</p>";
        }
        if (!empty($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>

        <form action="signup.php" method="POST">
            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="btn-container">
                <button class="btn" type="submit">Sign Up</button>
            </div>
        </form>
        <p class="center-text">Already have an account? <a href="login.php" class="auth-link">Login here</a>.</p>
    </div>

    <?php include "../../includes/footer.php"; ?>
</body>
</html>
