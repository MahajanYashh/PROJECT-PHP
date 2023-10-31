<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torque Turbo Shifter</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
</head>

<body>
    <!-- ====== Header ====== -->
    <header>

        <nav class="navbar">
        <div class="logo">
                <img src="img/Customcarslogo.png" alt="Custom Cars" class="Navlogo">
            </div>
            <ul class="nav-links">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <!-- ====== Header Ends ====== -->
        <div class="add-to-cart-logo">
        <div class="add-to-cart-text">
            <a href="cart.php">
        <button class="cart">View Cart</button>
            </a>
            

        </div>
        <div>
            </div>
            <a href="Product.php">
                    <button class="cart">Back</button>
                </a>
            </div>
        <!-- <div class="shoppingcart">
            Shopping cart logo
                <img src="img/shopping-cart.gif"  class="logo"alt="shopping cart">
        </div> -->
    <div class="product-grid">
        <!-- Product 1 -->
        <div class="product">
            <img src="img/PAINTS/Aerosol-Paint-Complete-Group_A3.jpg" alt="Aerosol Paint">
            <h2>Aerosol-Paint</h2>
            <h3>Price:500</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P1" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button  onclick="addToCart('Aerosol-Paint', 500, 'quantity-product1')">Add to
                Cart</button>
        </div>
        
        <!-- Product 2 -->
        <div class="product">
            <img src="img/PAINTS/RED GLOSS.jpg" alt="RED GLOSS">
            <h2>RED GLOSS</h2>
            <h3>Price:300</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P2" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button  onclick="addToCart(' RED GLOSS', 300, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 3 -->
        <div class="product">
            <img src="img/PAINTS/BLUE.jpg" alt="caliper paint">
            <h2>Caliper Paint </h2>
            <h3>Price:450</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number"  name="P3" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button onclick="addToCart(' Caliper Paint  ', 450, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 4 -->
        <div class="product">
            <img src="img/PAINTS/Silver GLOSS.png" alt="Silver GLOSS">
            <h2> Silver GLOSS</h2>
            <h3>Price:2000</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P4" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button onclick="addToCart(' Silver GLOSS ', 2000, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 5 -->
        <div class="product">
            <img src="img/PAINTS/metallic_automotive_spray_paint_colors COMBO.webp" alt="metallic_automotive_spray_paint">
            <h2>Metallic Paint(15)</h2>
            <h3>Price:8000</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number"  name="P5" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button onclick="addToCart('Metallic Paint(15) ', 8000, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 6 -->
        <div class="product">
            <img src="img/PAINTS/BLACK.webp" alt="BLACK PAINT">
            <h2>BLACK PAINT</h2>
            <h3>Price:6000</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P6" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button  onclick="addToCart('BLACK PAINT ', 6000, 'quantity-product1')">Add to Cart</button>
        </div>
    </div>

   

   
        </main>
        <footer>
                <p>
                    <!-- Mahajan Pvt.Ltd  -->
                    &copy; 2023 . All rights reserved.
                </p>            
            </footer>
            <script>
        // Function to add a product to the cart
        function addToCart(productName, price, quantityId) {
            const quantity = parseInt(document.getElementById(quantityId).value);
            if (isNaN(quantity) || quantity < 1) {
                alert("Please enter a valid quantity.");
                return;
            }

            const newItem = { productName, price, quantity };
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.push(newItem);
            localStorage.setItem("cart", JSON.stringify(cart));
        }
        const addToCartButton = document.getElementById('addToCartButton');
        const cartAlert = document.getElementById('cartAlert');

        // Add a click event listener to the button
        addToCartButton.addEventListener('click', () => {
            // Show the alert when the button is clicked
            cartAlert.style.display = 'block';

            // Hide the alert after a few seconds (e.g., 3 seconds in this example)
            setTimeout(() => {
                cartAlert.style.display = 'none';
            }, 3000); // 3000 milliseconds = 3 seconds
        });
    </script>
</body>

</html>