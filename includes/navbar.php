


<?php
// Start session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ensure cart session exists
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Get cart count
$cart_count = count($_SESSION["cart"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EspressoEase</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/EspressoEase/assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <div class="nav-container">
                <div class="logo">EspressoEase</div>
                <ul class="nav-links">
                    <li><a href="/EspressoEase/index.php">Home</a></li>
                    <li><a href="/EspressoEase/pages/menu/menu.php">Menu</a></li>
                    <li><a href="/EspressoEase/pages/about.php">About Us</a></li>
                    <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
                        <li><a href="/EspressoEase/pages/auth/logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="/EspressoEase/pages/auth/signup.php">Sign Up</a></li>
                        <li><a href="/EspressoEase/pages/auth/login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
                <div class="cart-button">
                    <a href="/EspressoEase/pages/cart.php">🛒 View Cart
                        <span class="cart-count"><?php echo $cart_count; ?></span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>
