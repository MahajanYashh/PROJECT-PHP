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
            
                    <button class="cart"><a href="Product2.php">Next</a></button>
                
          
        </div>
        
    </div>
        <!-- <div class="shoppingcart">
            Shopping cart logo
                <img src="img/shopping-cart.gif"  class="logo"alt="shopping cart">
        </div> -->
    <div class="product-grid">
    <table id="mytable" border="5">
        
        <!-- Product 1 -->
        <div class="product">
            <img src="img/carbon fiber spoiler.jpg" alt="Carbon Fibre Spoiler">
            <h2>Carbon Fibre Spoiler</h2>
            <h3>Price:2500</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P1" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button  onclick="addToCart('Carbon Fibre Spoiler', 2500, 'quantity-product1')">Add to
                Cart</button>
        </div>
        
        <!-- Product 2 -->
        <div class="product">
            <img src="img/racing carbonfibre spoiler.jpg" alt=" racing carbonfibre Spoiler">
            <h2> Racing Carbon Fibre Spoiler</h2>
            <h3>Price:5000</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P2" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button  onclick="addToCart(' Racing Carbon Fibre Spoiler', 5000, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 3 -->
        <div class="product">
            <img src="img/spoiler2jpg.jpg" alt="Spoiler">
            <h2> Universal Spoiler</h2>
            <h3>Price:4500</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number"  name="P3" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button onclick="addToCart(' Universal  Spoiler ', 4500, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 4 -->
        <div class="product">
            <img src="img/mini spoiler.jpg" alt=" Mini Spoiler">
            <h2> Mini Spoiler</h2>
            <h3>Price:2000</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P4" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button onclick="addToCart(' Mini Spoiler ', 2000, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 5 -->
        <div class="product">
            <img src="img/spoiler package.jpg" alt="Spoiler package">
            <h2>Spoiler Pack of 3</h2>
            <h3>Price:8000</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number"  name="P5" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button onclick="addToCart('Spoiler Package ', 8000, 'quantity-product1')">Add to Cart</button>
        </div>
        <!-- Product 6 -->
        <div class="product">
            <img src="img/pedestal spoiler.jpg" alt="pedestal spoiler">
            <h2>pedestal spoiler</h2>
            <h3>Price:6000</h3>
            <label for="quantity-product1">Quantity:</label>
            <input type="number" name="P6" id="quantity-product1" value="1" min="1" class="quantity-input">
            <button  onclick="addToCart('pedestal spoiler ', 6000, 'quantity-product1')">Add to Cart</button>
        </div>
    </div>
</table>
   

    
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