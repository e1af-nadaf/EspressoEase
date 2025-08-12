<?php include "../../includes/navbar.php" ?>

<div class="main-content">
    <div class="menu">
        <h1>Healthy-Bites Menu</h1>
        <div class="menu-container">
            <div class="menu-item">
                <img src="../../assets/images/chickpea-salad.jpg" alt="Chickpea Salad">
                <h2>Chickpea Salad</h2>
                <span class="price">₹170</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Chickpea Salad">
                    <input type="hidden" name="price" value="170">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/greek-salad.jpg" alt="Greek Salad">
                <h2>Greek Salad</h2>
                <span class="price">₹180</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Greek Salad">
                    <input type="hidden" name="price" value="180">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/quinoa-bowl.jpg" alt="Quinoa Bowl">
                <h2>Quinoa Bowl</h2>
                <span class="price">₹220</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Quinoa Bowl">
                    <input type="hidden" name="price" value="220">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/smoothie-bowl.jpg" alt="Smoothie Bowl">
                <h2>Smoothie Bowl</h2>
                <span class="price">₹210</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Smoothie Bowl">
                    <input type="hidden" name="price" value="210">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/oats-porridge.jpg" alt="Oats Porridge">
                <h2>Oats Porridge</h2>
                <span class="price">₹170</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Oats Porridge">
                    <input type="hidden" name="price" value="170">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/avocado-toast.jpg" alt="Avocado Toast">
                <h2>Avocado Toast</h2>
                <span class="price">₹190</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Avocado Toast">
                    <input type="hidden" name="price" value="190">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/granola-parfait.jpg" alt="Granola Parfait">
                <h2>Granola Parfait</h2>
                <span class="price">₹170</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Granola Parfait">
                    <input type="hidden" name="price" value="170">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/fruit-bowl.jpg" alt="Mixed Fruit Bowl">
                <h2>Mixed Fruit Bowl</h2>
                <span class="price">₹160</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Mixed Fruit Bowl">
                    <input type="hidden" name="price" value="160">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/hummus-platter.jpg" alt="Hummus Platter">
                <h2>Hummus Platter</h2>
                <span class="price">₹200</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Hummus Platter">
                    <input type="hidden" name="price" value="200">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/veg-wrap.jpg" alt="Vegetable Wrap">
                <h2>Vegetable Wrap</h2>
                <span class="price">₹180</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Vegetable Wrap">
                    <input type="hidden" name="price" value="180">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="menu-button">
            <a href="/EspressoEase/pages/menu/menu.php">View Categories</a>
        </div>
    </div>
</div>

<?php include "../../includes/footer.php" ?>