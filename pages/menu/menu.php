<?php 
session_start(); 
include "../../includes/navbar.php"; 

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: /EspressoEase/pages/auth/login.php");
    exit;
}

// Get the logged-in username
$username = $_SESSION["username"];
?>

<div class="main-content">
    <h1>Our Full Menu</h1>
    <p class="center-text">Select a category to explore our delicious offerings.</p>

    <!-- Display "Hello, Username" -->
    <p class="center-text">Hello, <strong><?php echo htmlspecialchars($username); ?></strong>👋</p>

    <div class="category-container">
        <a href="coffee.php" class="category-box">
            <img src="../../assets/images/coffee-category.jpg" alt="Coffee Category">
            <span>Coffee</span>
        </a>

        <a href="tea.php" class="category-box">
            <img src="../../assets/images/tea-category.jpg" alt="Tea Category">
            <span>Tea</span>
        </a>

        <a href="snacks.php" class="category-box">
            <img src="../../assets/images/snacks-category.jpg" alt="Snacks Category">
            <span>Snacks</span> 
        </a>

        <a href="desserts.php" class="category-box">
            <img src="../../assets/images/desserts-category.jpg" alt="Desserts Category">
            <span>Desserts</span>
        </a>

        <a href="healthy.php" class="category-box">
            <img src="../../assets/images/healthy-category.jpg" alt="Healthy Category">
            <span>Healthy-Bites</span>
        </a>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>
