<?php 
    include('Connection.php');
    if(isset($_REQUEST['submit']))
{
    $q="insert into feedback set 
    name='".$_REQUEST['name']."',
    email='".$_REQUEST['email']."',
    feedback='".$_REQUEST['feedback']."'
    ";
    mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
<header>
        <nav class="navbar">
        <div class="logo">
            
                <img src="img/Customcarslogo.png" alt="Custom Cars" class="Navlogo">
            </div>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <div class="about">
            <h1>About Us</h1>
            <img src="garage-image.jpg" alt="Garage Image" class="garage-image">
            <p>Welcome to our garage! We are a dedicated team of automotive enthusiasts who provide top-notch car repair and maintenance services. With years of experience and a passion for automobiles, we ensure that your vehicle is in safe hands.</p>
            <p>Our mission is to keep your car running smoothly, ensuring your safety on the road. Whether it's routine maintenance or complex repairs, we have you covered. We pride ourselves on quality workmanship and exceptional customer service.</p>
        </div>
        <div class="container-about">
            <form method="POST">
            <h2>Customer Feedback</h2>
            <p>We value your feedback. Please share your thoughts and suggestions with us:</p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="feedback">Feedback:</label>
            <textarea id="message" name="feedback" rows="4" required></textarea>
            
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</main>
<footer>
                <p>
                    <!-- Mahajan Pvt.Ltd  -->
                    &copy; 2023 . All rights reserved.
                </p>            
            </footer>
</body>
</html>
