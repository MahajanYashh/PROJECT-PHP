<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your hardcoded username and password
    $correct_username = "admin";
    $correct_password = "admin123";

    // Get the submitted username and password
    $submitted_username = $_POST["username"];
    $submitted_password = $_POST["password"];

    // Check if the submitted credentials are correct
    if ($submitted_username === $correct_username && $submitted_password === $correct_password) {
        // Redirect to the dashboard page on successful login
        header("Location:Dashboard.php");
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/adminportal.css"> -->
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body>
<!-- <header>
        <nav class="navbar">
        <div class="logo">
                <img src="img/Customcarslogo.png" alt="Custom Cars" class="Navlogo">
            </div>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header> -->
    <form method="post">
        <h2>Admin Portal</h2>
        <form action="Post">
            <div class="input">
                <label for="Username">Username</label>
                <input type="text" name="username" id="username" required placeholder=" ">
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required placeholder=" ">
                </div>
                <div class="login">
                    <input type="submit" value="Login">
                </div>
            </form>
    </form>
</body>
</html>
