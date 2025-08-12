<?php include "../../includes/navbar.php"; ?>

<div class="main-content">
    <h1>Coffee Menu</h1>
    <div class="menu-container">
        <div class="menu-item">
            <img src="../../assets/images/espresso.jpg" alt="Espresso">
            <h2>Espresso</h2>
            <span class="price">₹120</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Espresso">
                <input type="hidden" name="price" value="120">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/cappuccino.jpg" alt="Cappuccino">
            <h2>Cappuccino</h2>
            <span class="price">₹150</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Cappuccino">
                <input type="hidden" name="price" value="150">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/latte.jpg" alt="Latte">
            <h2>Latte</h2>
            <span class="price">₹160</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Latte">
                <input type="hidden" name="price" value="160">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/iced-americano.jpg" alt="Iced Americano">
            <h2>Iced Americano</h2>
            <span class="price">₹140</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Iced Americano">
                <input type="hidden" name="price" value="140">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/mocha.jpg" alt="Mocha">
            <h2>Mocha</h2>
            <span class="price">₹180</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Mocha">
                <input type="hidden" name="price" value="180">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/macchiato.jpg" alt="Caramel Macchiato">
            <h2>Caramel Macchiato</h2>
            <span class="price">₹170</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Caramel Macchiato">
                <input type="hidden" name="price" value="170">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/flat-white.jpg" alt="Flat White">
            <h2>Flat White</h2>
            <span class="price">₹160</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Flat White">
                <input type="hidden" name="price" value="160">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/turkish-coffee.jpg" alt="Turkish Coffee">
            <h2>Turkish Coffee</h2>
            <span class="price">₹190</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Turkish Coffee">
                <input type="hidden" name="price" value="190">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/cold-brew.jpg" alt="Cold Brew">
            <h2>Cold Brew</h2>
            <span class="price">₹200</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Cold Brew">
                <input type="hidden" name="price" value="200">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/irish-coffee.jpg" alt="Irish Coffee">
            <h2>Irish Coffee</h2>
            <span class="price">₹220</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Irish Coffee">
                <input type="hidden" name="price" value="220">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>
    </div>

    <div class="menu-button">
        <a href="/EspressoEase/pages/menu/menu.php">View Categories</a>
    </div>
</div>

<?php include "../../includes/footer.php" ?>