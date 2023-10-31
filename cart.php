<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torque Turbo Shifter</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
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
    <div class="cart-container">
        <h2>Your Cart:</h2>
        <div id="cart">
            <!-- Cart items will be displayed here -->
        </div>
        <div class=".buttons">

            <a href="payment.php">
                <button>Buy</button>
            </a>
            <a href="product.php">
                <button type="submit">Add  More</button>
            </a>
        </div>
        <div class="total">
            Total: $<span id="cart-total">0.00</span>
        </div>
    </div>

    <script>
        // Function to display the cart
        function displayCart() {
            const cartContainer = document.getElementById("cart");
            const cart = JSON.parse(localStorage.getItem("cart")) || [];
            let cartTotal = 0;

            if (cart.length === 0) {
                cartContainer.innerHTML = "<p>Your cart is empty.</p>";
            } else {
                cartContainer.innerHTML = ""; // Clear the cart container

                for (let i = 0; i < cart.length; i++) {
                    const item = cart[i];
                    const cartItem = document.createElement("div");
                    cartItem.classList.add("cart-item");
                    cartItem.innerHTML = `
                        <div class="product-name">${item.productName}</div>
                        <div class="quantity">
                            <input type="number" class="quantity-input" value="${item.quantity}" min="1" onchange="updateQuantity(${i}, this.value)">
                            <button class="remove-button" onclick="removeFromCart(${i})">Remove</button>
                        </div>
                        <div>$${(item.price * item.quantity).toFixed(2)}</div>
                    `;
                    cartTotal += item.price * item.quantity;
                    cartContainer.appendChild(cartItem);
                }
            }

            // Update the total
            document.getElementById("cart-total").textContent = cartTotal.toFixed(2);
        }

        // Function to update quantity
        function updateQuantity(index, newQuantity) {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            if (newQuantity < 1) {
                removeFromCart(index); // Remove the item if quantity is zero
            } else {
                cart[index].quantity = parseInt(newQuantity);
                localStorage.setItem("cart", JSON.stringify(cart));
                displayCart();
            }
        }

        // Function to remove a product from the cart
        function removeFromCart(index) {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            displayCart();
        }

        displayCart(); // Display the cart when the page loads
    </script>
     <footer>
                <p>
                    <!-- Mahajan Pvt.Ltd  -->
                    &copy; 2023 . All rights reserved.
                </p>            
            </footer>
</body>

</html>