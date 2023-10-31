<?php
include('connection.php');
if(isset($_REQUEST['register']))
{
    $q="insert into registration set 
    fname='".$_REQUEST['txtfname']."',
    lname='".$_REQUEST['txtlname']."',
    gender='".$_REQUEST['rdogen']."',
    email='".$_REQUEST['email']."',
    password='".$_REQUEST['pwd']."',
    repassword='".$_REQUEST['repwd']."',
    address='".$_REQUEST['txtadd']."',
    city='".$_REQUEST['txtcity']."'
    ";
    mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post">
        <fieldset>

            <pre>
                <label for="fname">First Name:</label> 
        <input type="text" name="txtfname">   
        
        <label for="lname">Last Name:</label> 
        <input type="text" name="txtlname">

        <label for="gender">Gender:</label> 
        <input type="radio" name="rdogen">Male
        <input type="radio" name="rdogen">FeMale
        
        <label for="email">Email-Id:</label> 
        <input type="email" name="email">
    
         <label for="Password">Password</label> 
         <input type="password" name="pwd">
    
        <label for="Password">Re-Password</label> 
        <input type="password" name="repwd">
        
        <label for="address">Addess</label> 
        <textarea name="txtadd" cols="15" rows="5"></textarea>

        <label for="city">City</label> 
        <input type="text" name="txtcity">

        <button type="submit" name="register">Register</button>
    </pre>
</fieldset>
    
</form>
</body>
</html>