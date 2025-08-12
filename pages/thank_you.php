<?php
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "../includes/db.php";
include "../includes/navbar.php";

// Check if order data is received
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION["cart"])) {
    // Get customer details
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $total_price = $_POST["total_price"];

    // Insert order into `orders` table
    $query = "INSERT INTO orders (user_name, user_email, phone, address, total_price) 
              VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Query preparation failed: " . $conn->error);
    }

    $stmt->bind_param("ssssd", $name, $email, $phone, $address, $total_price);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $order_id = $stmt->insert_id; // Get last inserted order ID

        // Insert each item into `order_items` table
        foreach ($_SESSION["cart"] as $item) {
            $item_name = $item["name"];
            $quantity = $item["quantity"];
            $price = $item["price"];

            $item_query = "INSERT INTO order_items (order_id, item_name, quantity, price) 
                           VALUES (?, ?, ?, ?)";
            $item_stmt = $conn->prepare($item_query);

            if (!$item_stmt) {
                die("Item query preparation failed: " . $conn->error);
            }

            $item_stmt->bind_param("isid", $order_id, $item_name, $quantity, $price);
            $item_stmt->execute();

            if ($item_stmt->affected_rows <= 0) {
                echo "<p>Failed to insert item: " . $item_stmt->error . "</p>";
            }
        }

        // ✅ Clear the cart **before** redirecting
        unset($_SESSION["cart"]);
        $_SESSION["cart"] = [];

    } else {
        die("Order insertion failed: " . $stmt->error);
    }
}
?>

<div class="main-content">
    <h1>Thank You for Your Order!</h1>
    <p class="center-text">Your order has been placed successfully.</p>

    <h3>Order Details</h3>
    <p class="color-text"><strong>Order ID:</strong> <?= $order_id ?></p>
    <p class="color-text"><strong>Order Date & Time:</strong> <?= date("Y-m-d H:i:s") ?></p>
    <p class="color-text"><strong>Total Price:</strong> ₹<?= $total_price ?></p>

    <div class="menu-button">
        <div class="cart-buttons">
            <a href="/EspressoEase/pages/menu/menu.php" class="add-more-btn">Order More!</a>
        </div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>
