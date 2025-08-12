<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
                <li><a href="/EspressoEase/pages/admin/dashboard.php">Dashboard</a></li>
                <li><a href="/EspressoEase/pages/admin/view_orders.php">Orders</a></li>
                <li><a href="/EspressoEase/pages/admin/view_customers.php">Customers</a></li>
                <li><a href="/EspressoEase/pages/admin/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>
</body>


