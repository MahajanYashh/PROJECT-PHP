<?php 
include('Connection.php');
$q = "select * from feedback where ID='".$_REQUEST['id']."'";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res); 
if (isset($_REQUEST['id'])) {
    $q = "select * from feedback where ID='".$_REQUEST['id']."'";
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
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
<form method="POST">
            <h2>Customer Feedback</h2>
            <p>We value your feedback. Please share your thoughts and suggestions with us:</p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  value="<?php echo $row -> name?>"required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  value="<?php echo $row -> email?>"required>
            
            <label for="feedback">Feedback:</label>
            <textarea id="message" name="feedback" rows="4" required><?php echo $row -> feedback?></textarea>
            
            <input type="submit" value="Submit" name="submit">
        </form>
</body>
</html>