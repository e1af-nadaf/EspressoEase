<?php
session_start();
include '../../includes/db.php';
include "../../includes/admin_navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registered Customers - Admin</title>
    <link rel="stylesheet" href="/EspressoEase/assets/css/style.css">
</head>
<body>

<div class="main-content">
    <h1>Registered Customers</h1>

    <?php
    $query = "
    SELECT 
        user_email, 
        ANY_VALUE(user_name) AS user_name, 
        ANY_VALUE(phone) AS phone, 
        COUNT(*) AS total_orders, 
        MAX(order_date) AS last_order 
    FROM orders 
    GROUP BY user_email 
    ORDER BY last_order DESC
";

    $result = $conn->query($query);

    // Error check
    if (!$result) {
        echo "<p class='color-text' class='error'>Query failed: " . $conn->error . "</p>";
        exit();
    }

    if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Total Orders</th>
                <th>Last Order Date</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['user_email']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo $row['total_orders']; ?></td>
                    <td><?php echo $row['last_order']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p class="color-text">No registered customers found.</p>
    <?php endif; ?>

    <div class="menu-button" style="margin-top: 20px;">
        <a href="dashboard.php" class="btn">⬅️ Back</a>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
</body>
</html>
