<?php include "../../includes/navbar.php"; ?>

<div class="main-content">
    <h1>Tea Menu</h1>
    <div class="menu-container">
        <div class="menu-item">
            <img src="../../assets/images/masala-tea.jpg" alt="Masala Tea">
            <h2>Masala Tea</h2>
            <span class="price">₹90</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Masala Tea">
                <input type="hidden" name="price" value="90">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/black-tea.jpg" alt="Black Tea">
            <h2>Black Tea</h2>
            <span class="price">₹80</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Black Tea">
                <input type="hidden" name="price" value="80">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/green-tea.jpg" alt="Green Tea">
            <h2>Green Tea</h2>
            <span class="price">₹100</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Green Tea">
                <input type="hidden" name="price" value="100">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/ginger-tea.jpg" alt="Ginger Tea">
            <h2>Ginger Tea</h2>
            <span class="price">₹95</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Ginger Tea">
                <input type="hidden" name="price" value="95">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/mint-tea.jpg" alt="Mint Tea">
            <h2>Mint Tea</h2>
            <span class="price">₹110</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Mint Tea">
                <input type="hidden" name="price" value="110">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/lemon-tea.jpg" alt="Lemon Tea">
            <h2>Lemon Tea</h2>
            <span class="price">₹90</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Lemon Tea">
                <input type="hidden" name="price" value="90">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/chamomile-tea.jpg" alt="Chamomile Tea">
            <h2>Chamomile Tea</h2>
            <span class="price">₹120</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Chamomile Tea">
                <input type="hidden" name="price" value="120">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/oolong-tea.jpg" alt="Oolong Tea">
            <h2>Oolong Tea</h2>
            <span class="price">₹130</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Oolong Tea">
                <input type="hidden" name="price" value="130">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/hibiscus-tea.jpg" alt="Hibiscus Tea">
            <h2>Hibiscus Tea</h2>
            <span class="price">₹125</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Hibiscus Tea">
                <input type="hidden" name="price" value="125">
                <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                <button type="submit" name="add_to_cart" class="add-to-cart">Add to Cart</button>
            </form>
        </div>

        <div class="menu-item">
            <img src="../../assets/images/darjeeling-tea.jpg" alt="Darjeeling Tea">
            <h2>Darjeeling Tea</h2>
            <span class="price">₹140</span>
            <form action="../cart.php" method="POST">
                <input type="hidden" name="item_name" value="Darjeeling Tea">
                <input type="hidden" name="price" value="140">
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