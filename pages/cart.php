<?php
session_start();
include "../includes/navbar.php";

// Initialize cart if not set
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Add to cart logic
if (isset($_POST["add_to_cart"])) {
    $item = [
        "name" => $_POST["item_name"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"]
    ];
    $_SESSION["cart"][] = $item;
    header("Location: cart.php");
    exit();
}

// Remove item from cart
if (isset($_POST["remove_item"])) {
    $index = $_POST["index"];
    unset($_SESSION["cart"][$index]);
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    header("Location: cart.php");
    exit();
}

// Increase quantity
if (isset($_POST["increase_qty"])) {
    $index = $_POST["index"];
    $_SESSION["cart"][$index]["quantity"] += 1;
    header("Location: cart.php");
    exit();
}

// Decrease quantity (but not below 1)
if (isset($_POST["decrease_qty"])) {
    $index = $_POST["index"];
    if ($_SESSION["cart"][$index]["quantity"] > 1) {
        $_SESSION["cart"][$index]["quantity"] -= 1;
    }
    header("Location: cart.php");
    exit();
}



// Calculate total
$total = 0;
?>

<div class="main-content">
    <h1>Your Cart</h1>

    <?php if (!empty($_SESSION["cart"])): ?>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th></th>
            </tr>
            <?php foreach ($_SESSION["cart"] as $index => $item):
                $itemTotal = $item["price"] * $item["quantity"];
                $total += $itemTotal;
            ?>
                <tr>
                    <td><?php echo $item["name"]; ?></td>
                    <td>₹<?php echo $item["price"]; ?></td>
                    <td class="quantity-column">
                        <form method="POST" class="quantity-form">
                            <input type="hidden" name="index" value="<?php echo $index; ?>">
                            <button type="submit" name="decrease_qty" class="qty-btn">−</button>
                            <span><?php echo $item["quantity"]; ?></span>
                            <button type="submit" name="increase_qty" class="qty-btn">+</button>
                        </form>
                    </td>
                    <td>₹<?php echo $itemTotal; ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="index" value="<?php echo $index; ?>">
                            <button type="submit" name="remove_item" class="remove-btn">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h3>Total: ₹<?php echo $total; ?></h3>
    <?php else: ?>
        <p class="center-text">Your cart is empty.</p>
    <?php endif; ?>

    <div class="menu-button">
        <?php if (empty($_SESSION["cart"])): ?>
            <a href="/EspressoEase/pages/menu/menu.php">Add Something</a>
        <?php else: ?>
            <div class="cart-buttons">
                <a href="/EspressoEase/pages/menu/menu.php" class="add-more-btn">Add More!</a>
                <a href="/EspressoEase/pages/checkout.php" class="order-btn">Order</a>
            </div>
        <?php endif; ?>
    </div>

</div>

<?php include "../includes/footer.php"; ?>