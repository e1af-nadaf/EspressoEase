<?php
session_start();


// Check if the admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: /EspressoEase/pages/admin/login.php");
    exit();
}
?>

<?php include "../../includes/admin_navbar.php"; ?>


<div class="main-content">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['admin']); ?> 👋</h1>
    <p class="center-text">This is your admin dashboard where you can manage the café smoothly and stylishly.</p>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <h2>View Orders</h2>
            <p class="color-text">Check out the latest customer orders placed in the café.</p>
            <a href="/EspressoEase/pages/admin/view_orders.php" class="btn">Orders</a>
        </div>
        <div class="dashboard-card">
            <h2>Customers</h2>
            <p class="color-text">View registered customers and their order history.</p>
            <a href="/EspressoEase/pages/admin/view_customers.php" class="btn">View Customers</a>
        </div>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>
