<?php
include "../../includes/navbar.php";
echo "Navbar included successfully";
?>

<div class="main-content">
    <h1>Snacks Menu</h1>
    <div class="menu-container">
        <div class="menu-item">
            <img src="../../assets/images/loaded-nachos.jpg" alt="Loaded Nachos">
            <h2>Loaded Nachos</h2>
            <span class="price">₹190</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Loaded Nachos">
                <input type="hidden" name="price" value="190">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/grilled-sandwich.jpg" alt="Grilled Sandwich">
            <h2>Grilled Sandwich</h2>
            <span class="price">₹120</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Grilled Sandwich">
                <input type="hidden" name="price" value="120">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/paneer-roll.jpg" alt="Panner Roll">
            <h2>Panner Roll</h2>
            <span class="price">₹150</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Panner Roll">
                <input type="hidden" name="price" value="150">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/spring-roll.jpg" alt="Spring Roll">
            <h2>Spring Roll</h2>
            <span class="price">₹140</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Spring Roll">
                <input type="hidden" name="price" value="140">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/french-fries.jpg" alt="French Fries">
            <h2>French Fries</h2>
            <span class="price">₹100</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="French Fries">
                <input type="hidden" name="price" value="100">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/veg-momo.jpg" alt="Veg Momos">
            <h2>Veg Momos</h2>
            <span class="price">₹120</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Veg Momos">
                <input type="hidden" name="price" value="120">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/veg-burger.jpg" alt="Veg Burger">
            <h2>Veg Burger</h2>
            <span class="price">₹130</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Veg Burger">
                <input type="hidden" name="price" value="130">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/mozzarella-sticks.jpg" alt="Mozzarella Sticks">
            <h2>Mozzarella Sticks</h2>
            <span class="price">₹170</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Mozzarella Sticks">
                <input type="hidden" name="price" value="170">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/chilli-potato.jpg" alt="Chilli Potato">
            <h2>Chilli Potato</h2>
            <span class="price">₹140</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Chilli Potato">
                <input type="hidden" name="price" value="140">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/garlic-bread.jpg" alt="Garlic Bread">
            <h2>Garlic Bread</h2>
            <span class="price">₹120</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Garlic Bread">
                <input type="hidden" name="price" value="120">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>
    </div>

    <div class="menu-button">
        <a href="/EspressoEase/pages/menu/menu.php">View Categories</a>
    </div>
</div>

<?php include "../../includes/footer.php"; ?>