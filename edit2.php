<?php 
include('Connection.php');
$q = "select * from contact where ID='".$_REQUEST['ID']."'";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res); 
if (isset($_REQUEST['ID'])) {
    $q = "select * from contact where ID='".$_REQUEST['ID']."'";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res);
}
    if(isset($_REQUEST['btnedit']))
    {

        $q="UPDATE contact SET 
        clientname='".$_REQUEST['txtname']."',
    clientemail='".$_REQUEST['txtemail']."',
    clientmessage='".$_REQUEST['txtmsg']."'
    
        WHERE product.ID = '".$_REQUEST['ID']."'";
         mysqli_query($con,$q);
         header("location:Dashboard.php");
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Contact.css">
</head>
<body>
<h2>Contact Form</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="txtname" placeholder=" " required value="<?php echo $row -> clientname?>">
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="txtemail"   placeholder=" " required value="<?php echo $row -> clientemail?>">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="txtmsg" rows="6"   placeholder=" " required><?php echo $row -> clientmessage?></textarea >
                </div>
                <div>
                    <button type="submit" name="submit">Send</button>
                </div>
            </form>    
</body>
</html>

