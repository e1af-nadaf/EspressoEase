<?php
session_start();
include '../../includes/db.php';
include "../../includes/admin_navbar.php"; 

// Fetch orders from the database
$query = "SELECT id, user_name, user_email, phone, address, total_price, order_date, status FROM orders ORDER BY order_date DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Orders - EspressoEase</title>
    <link rel="stylesheet" href="/EspressoEase/assets/css/style.css">
</head>

<body>
    <div class="main-content">
        <h1>Customer Orders</h1>

        <?php if (mysqli_num_rows($result) > 0): ?>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>Status</th>
                    </tr>
                    <?php while ($order = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $order['id']; ?></td>
                            <td><?php echo $order['user_name']; ?></td>
                            <td><?php echo $order['user_email']; ?></td>
                            <td><?php echo $order['phone']; ?></td>
                            <td><?php echo $order['address']; ?></td>
                            <td>₹<?php echo $order['total_price']; ?></td>
                            <td><?php echo $order['order_date']; ?></td>
                            <td class="status-cell">
                                <form method="POST" action="update_status.php">
                                    <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                                    <select name="status" onchange="this.form.submit()">
                                        <option value="Pending" <?php if ($order['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                                        <option value="Completed" <?php if ($order['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
                                    </select>
                                </form>
                            </td>

                        </tr>

                    <?php endwhile; ?>
                </table>
            </div>

        <?php else: ?>
            <p class="color-text">No orders found.</p>
        <?php endif; ?>

        <div class="cart-buttons">
            <a href="/EspressoEase/pages/admin/dashboard.php" class="add-more-btn">⬅️ Back</a>
        </div>
    </div>

    <?php include "../../includes/footer.php"; ?>
</body>

</html>