<?php
session_start();
include "../../includes/db.php";

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Fetch user from database using email
    $sql = "SELECT id, username, password FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashed_password);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashed_password)) {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;

                // Set success message and redirect back to login page
                $_SESSION["success_message"] = "Logged in Successfully";
                header("Location: login.php");
                exit;
            } else {
                $error = "Invalid email or password!";
            }
        } else {
            $error = "Invalid email or password!";
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
    <title>Login - EspressoEase</title>
    <link rel="stylesheet" href="/EspressoEase/assets/css/style.css">
</head>
<body>
    <?php include "../../includes/navbar.php"; ?>

    <div class="main-content">
        <h1>Login</h1>

        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

        <?php
        if (!empty($_SESSION["success_message"])) {
            echo "<p class='success'>" . $_SESSION["success_message"] . "</p>";
            unset($_SESSION["success_message"]);
            echo "<script>
                setTimeout(function() {
                    window.location.href = '/EspressoEase/pages/menu/menu.php';
                }, 2000);
            </script>";
        }
        ?>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="btn-container">
                <button class="btn" type="submit">Login</button>
            </div>
        </form>
        <p class="center-text">Don't have an account? <a href="signup.php" class="auth-link">Sign up here</a>.</p>
    </div>

    <?php include "../../includes/footer.php"; ?>
</body>
</html>
