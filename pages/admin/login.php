<?php
session_start();
include '../../includes/db.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE username = ? AND role = 'admin'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $admin = $result->fetch_assoc();

        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin'] = $admin['username'];
            $_SESSION['success_message'] = "Logged in successfully!";
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Admin not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - EspressoEase</title>
    <link rel="stylesheet" href="/EspressoEase/assets/css/style.css">
</head>
<body>

    <div class="main-content">
        <h1>Admin Login</h1>

        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

        <?php
            if (!empty($_SESSION["success_message"])) {
                echo "<p class='success'>" . $_SESSION["success_message"] . "</p>";
                unset($_SESSION["success_message"]);
                echo "<script>
                    setTimeout(function() {
                        window.location.href = '/EspressoEase/pages/admin/dashboard.php';
                    }, 2000);
                </script>";
            }
        ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

</body>
</html>
