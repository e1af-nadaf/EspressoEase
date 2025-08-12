<?php include "../../includes/navbar.php" ?>

<div class="main-content">
    <section class="menu">
        <h1>Desserts Menu</h1>
        <div class="menu-container">
            <div class="menu-item">
                <img src="../../assets/images/choco-brownie.jpg" alt="Chocolate Brownie">
                <h2>Chocolate Brownie</h2>
                <span class="price">₹120</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Chocolate Brownie">
                    <input type="hidden" name="price" value="120">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/tiramisu.jpg" alt="Tiramisu">
                <h2>Tiramisu</h2>
                <span class="price">₹180</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Tiramisu">
                    <input type="hidden" name="price" value="180">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/ny-chessecake.jpg" alt="New York Cheesecake">
                <h2>New York Cheesecake</h2>
                <span class="price">₹200</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="New York Cheesecake">
                    <input type="hidden" name="price" value="200">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/pancakes.jpg" alt="Classic Pancakes">
                <h2>Classic Pancakes</h2>
                <span class="price">₹170</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Classic Pancakes">
                    <input type="hidden" name="price" value="170">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/belgian-waffles.jpg" alt="Belgian Waffles">
                <h2>Belgian Waffles</h2>
                <span class="price">₹180</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Belgian Waffles">
                    <input type="hidden" name="price" value="180">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/apple-pie.jpg" alt="Apple Pie">
                <h2>Apple Pie</h2>
                <span class="price">₹160</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Apple Pie">
                    <input type="hidden" name="price" value="180">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/custard.jpg" alt="Caramel Custard">
                <h2>Caramel Custard</h2>
                <span class="price">₹140</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Caramel Custard">
                    <input type="hidden" name="price" value="140">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/macarons.jpg" alt="French Macarons">
                <h2>French Macarons</h2>
                <span class="price">₹220</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="French Macarons">
                    <input type="hidden" name="price" value="220">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/icecream-sundae.jpg" alt="Ice Cream Sundae">
                <h2>Ice Cream Sundae</h2>
                <span class="price">₹150</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Ice Cream Sundae">
                    <input type="hidden" name="price" value="150">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            <div class="menu-item">
                <img src="../../assets/images/choco-lava.jpg" alt="Choco Lava Cake">
                <h2>Choco Lava Cake</h2>
                <span class="price">₹130</span>
                <form action="../cart.php" method="POST">
                    <input type="hidden" name="item_name" value="Choco Lava Cake">
                    <input type="hidden" name="price" value="130">
                    <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                    <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
    </section>

    <div class="menu-button">
        <a href="/EspressoEase/pages/menu/menu.php">View Categories</a>
    </div>
</div>

<?php include "../../includes/footer.php" ?>