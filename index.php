<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EspressoEase - Cafe Management System</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/EspressoEase/assets/css/style.css">


</head>

<body>
    <?php include "includes/navbar.php"; 
    date_default_timezone_set('Asia/Kolkata');
    ?>

    <div class="main-content">

        <div class="hero-section">
            <div class="hero-content">
                <h1>EspressoEase</h1>
                <p>Coffee House & Cafe Experience</p>
                <div class="menu-button">
                    <a href="/EspressoEase/pages/menu/menu.php">Explore Our Delights</a>
                </div>
            </div>
        </div>

        <div class="cafe-info">
            <p>Home Delivery | Take-Out</p>
            <p>Coffee, Tea, Snacks & Desserts</p>
            <p>Xion Mall | Sector 2 | Hinjewadi Phase 1 | Pune, Maharashtra, 411057</p>
            <p>Monday to Friday: 8am - 3pm | Saturday: 8am - 5pm | Sunday: 9am - 5pm</p>
        </div>

        <section class="menu">
            <h1>Our Best-Selling Items</h1>
            <div class="menu-container">
                <div class="menu-item">
                    <img src="assets/images/quinoa-bowl.jpg" alt="Quinoa Bowl">
                    <h2>Quinoa Bowl</h2>
                    <span class="price">₹220</span>
                    <form action="pages/cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Quinoa Bowl">
                        <input type="hidden" name="price" value="220">
                        <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                        <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                    </form>
                </div>

                <div class="menu-item">
                    <img src="assets/images/loaded-nachos.jpg" alt="Loaded Nachos">
                    <h2>Loaded Nachos</h2>
                    <span class="price">₹190</span>
                    <form action="pages/cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Loaded Nachos">
                        <input type="hidden" name="price" value="190">
                        <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                        <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                    </form>
                </div>

                <div class="menu-item">
                    <img src="assets/images/macarons.jpg" alt="French Macarons">
                    <h2>French Macarons</h2>
                    <span class="price">₹220</span>
                    <form action="pages/cart.php" method="POST">
                        <input type="hidden" name="item_name" value="French Macarons">
                        <input type="hidden" name="price" value="220">
                        <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                        <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <div class="menu-button">
                <a href="/EspressoEase/pages/menu/menu.php">View Full Menu</a>
            </div>
        </section>

        <div class="testimonials">
            <h1>What Our Customers Say</h1>
            <div class="testimonial-container">
                <div class="testimonial">
                    <p>"The best coffee in town! The ambiance is amazing, and the staff is super friendly."</p>
                    <h4>- Ayesha Sharma</h4>
                </div>
                <div class="testimonial">
                    <p>"I absolutely love their brunch options. The cappuccino is a must-try!"</p>
                    <h4>- Rahul Mehta</h4>
                </div>
                <div class="testimonial">
                    <p>"EspressoEase has the coziest vibe, perfect for work and relaxation."</p>
                    <h4>- Sneha Kapoor</h4>
                </div>
                <div class="testimonial">
                    <p>"Their pastries are freshly baked and taste heavenly. I can't get enough of their croissants!"</p>
                    <h4>- Varun Khanna</h4>
                </div>
                <div class="testimonial">
                    <p>"A great spot to chill with friends or work peacefully. The WiFi and coffee are both strong!"</p>
                    <h4>- Neha Verma</h4>
                </div>
                <div class="testimonial">
                    <p>"I’m a regular here now. The espresso is rich, and the customer service is top-notch!"</p>
                    <h4>- Aditya Raj</h4>
                </div>
                <div class="testimonial">
                    <p>"Perfect breakfast place! Their avocado toast and latte make my mornings better."</p>
                    <h4>- Riya Malhotra</h4>
                </div>
                <div class="testimonial">
                    <p>"Tried their seasonal specials, and they were fantastic. Can't wait to come back!"</p>
                    <h4>- Kunal Desai</h4>
                </div>
                <div class="testimonial">
                    <p>"A hidden gem! The iced caramel latte was divine, and the atmosphere is just perfect."</p>
                    <h4>- Meera Joshi</h4>
                </div>

            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
</body>

</html>