<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Canteen - Menu</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h1>Smart Canteen</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="orders.html">Orders</a></li>
                <li><a href="admin.html">Admin</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="menu">
            <h2>Our Menu</h2>
            <div class="menu-items">

                <div class="item" data-id="1" data-name="IDLY" data-price="5.00" data-stock="20">
                    <h3>🍚 IDLY</h3>
                    <p>Idly with Sambar and Chutney.</p>
                    <p>Price: ₹10.00 | Stock: 20</p>
                    <input type="number" min="1" max="20" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="2" data-name="POORI" data-price="10.00" data-stock="15">
                    <h3>🥟 POORI</h3>
                    <p>Poori with Masala.</p>
                    <p>Price: ₹30.00 | Stock: 15</p>
                    <input type="number" min="1" max="15" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="3" data-name="KUSHKA" data-price="25.00" data-stock="10">
                    <h3>🍛 KUSHKA</h3>
                    <p>Veg Kushka with Kuruma.</p>
                    <p>Price: ₹25.00 | Stock: 10</p>
                    <input type="number" min="1" max="10" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="4" data-name="SAMOSA" data-price="5.00" data-stock="50">
                    <h3>🥟 SAMOSA</h3>
                    <p>Samosa with ketchup.</p>
                    <p>Price: ₹5.00 | Stock: 50</p>
                    <input type="number" min="1" max="50" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="5" data-name="VADA" data-price="5.00" data-stock="50">
                    <h3>🍩 VADA</h3>
                    <p>Vada with sambar.</p>
                    <p>Price: ₹5.00 | Stock: 50</p>
                    <input type="number" min="1" max="50" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="6" data-name="SAMBAR RICE" data-price="25.00" data-stock="40">
                    <h3>🍲 SAMBAR RICE</h3>
                    <p>Sambar Rice with Egg.</p>
                    <p>Price: ₹25.00 | Stock: 40</p>
                    <input type="number" min="1" max="40" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="7" data-name="PONGAL" data-price="30.00" data-stock="40">
                    <h3>🍚 PONGAL</h3>
                    <p>Pongal with sambar.</p>
                    <p>Price: ₹30.00 | Stock: 40</p>
                    <input type="number" min="1" max="40" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="8" data-name="TEA" data-price="15.00" data-stock="70">
                    <h3>🍵 TEA</h3>
                    <p>Tea (with biscuit +₹5).</p>
                    <p>Price: ₹15.00 | Stock: 70</p>
                    <input type="number" min="1" max="70" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="9" data-name="COFFEE" data-price="15.00" data-stock="70">
                    <h3>☕ COFFEE</h3>
                    <p>Coffee.</p>
                    <p>Price: ₹15.00 | Stock: 70</p>
                    <input type="number" min="1" max="70" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="10" data-name="EGG PUFFS" data-price="20.00" data-stock="50">
                    <h3>🥐 EGG PUFFS</h3>
                    <p>Egg Puffs.</p>
                    <p>Price: ₹20.00 | Stock: 50</p>
                    <input type="number" min="1" max="50" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
                <div class="item" data-id="11" data-name="VEG PUFFS" data-price="15.00" data-stock="50">
                    <h3>🥐 VEG PUFFS</h3>
                    <p>Veg Puffs.</p>
                    <p>Price: ₹15.00 | Stock: 50</p>
                    <input type="number" min="1" max="50" value="1" class="quantity">
                    <button class="add-to-cart btn">🛒 Add to Cart</button>
                </div>
            
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Smart Canteen. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>