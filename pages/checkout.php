<?php
date_default_timezone_set('Asia/Kolkata');
session_start();
include "../includes/navbar.php";

// Ensure cart is set before using it
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Remove item from cart
if (isset($_POST["remove_item"])) {
    $index = $_POST["index"];
    unset($_SESSION["cart"][$index]); // Remove item
    $_SESSION["cart"] = array_values($_SESSION["cart"]); // Reindex array

    // Redirect to refresh the checkout page
    header("Location: checkout.php");
    exit();
}

// If cart is empty, redirect to menu page
if (empty($_SESSION["cart"])) {
    header("Location: menu.php");
    exit();
}

$total = 0;
?>

<div class="main-content">
    <h1>Checkout</h1>

    <h2>Review Your Order</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th></th> <!-- Remove Button Column -->
        </tr>

        <?php
        foreach ($_SESSION["cart"] as $index => $item): 
            $itemTotal = $item["price"] * $item["quantity"];
            $total += $itemTotal;
        ?>
            <tr>
                <td><?php echo htmlspecialchars($item["name"]); ?></td>
                <td>₹<?php echo number_format($item["price"], 2); ?></td>
                <td><?php echo (int) $item["quantity"]; ?></td>
                <td>₹<?php echo number_format($itemTotal, 2); ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit" name="remove_item" class="remove-btn">Remove</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Total: ₹<?php echo number_format($total, 2); ?></h3>

    <h2>Enter Your Details</h2>
    <form action="thank_you.php" method="POST" class="checkout-form">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Delivery Address" required></textarea>
        <input type="hidden" name="total_price" value="<?php echo $total; ?>">
        <button type="submit">Place Order</button>
    </form>
</div>

<?php include "../includes/footer.php"; ?>
