<?php
session_start();
include '../../includes/db.php';// adjust the path if needed

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];

    // Simple sanitization
    $order_id = intval($order_id);
    $status = $conn->real_escape_string($status);

    $sql = "UPDATE orders SET status = '$status' WHERE id = $order_id";

    if ($conn->query($sql)) {
        $_SESSION['success'] = "Order status updated successfully.";
    } else {
        $_SESSION['error'] = "Failed to update order status: " . $conn->error;
    }
}

// Redirect back to orders page
header("Location: /EspressoEase/pages/admin/view_orders.php");
exit();
?>
