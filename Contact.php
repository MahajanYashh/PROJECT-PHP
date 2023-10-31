<?php
include('Connection.php');
if(isset($_REQUEST['submit']))
{
    $q="insert into contact set 
    clientname='".$_REQUEST['txtname']."',
    clientemail='".$_REQUEST['txtemail']."',
    clientmessage='".$_REQUEST['txtmsg']."'
    ";
    mysqli_query($con,$q);
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Contact.css">
    <title>Contact</title>
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
                <li><a href="Contact.php">Contact Us</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>
     <main class="contact-page">
        <section class="contact-info">
            <h2>Contact Information</h2>
            <address>
                <p><strong>Custom Cars</strong></p>
                <p><strong>Workshop and Automotive</strong></p>
                <p>Cityville, Vyara </p>
                <p>Phone: +91 7622824573</p>
                <p>Email: Customcars@gmail.com</p>
            </address>
        </section>
        <section class="contact-form">
            <h2>Contact Form</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="txtname" placeholder=" " required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="txtemail"   placeholder=" " required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="txtmsg" rows="6"   placeholder=" " required></textarea>
                </div>
                <div>
                    <button type="submit" name="submit">Send</button>
                </div>
            </form>
        </section> 
    </main>
    <footer>
        <p>&copy; 2023 Custom Cars. All rights reserved.</p>
    </footer>
</body>
</html>
