<?php 
include('Connection.php');
$q = "select * from users where ID='".$_REQUEST['ID']."'";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res); 
if (isset($_REQUEST['id'])) {
    $q = "select * from user where ID='".$_REQUEST['id']."'";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res);
}
    if(isset($_REQUEST['btnedit']))
    {

        $q="UPDATE users SET 
        user_name='".$_REQUEST['txtname']."',
    password='".$_REQUEST['txtemail']."',
    name='".$_REQUEST['txtmsg']."'
    
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
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<label>User Name</label>
     	<input type="text" name="uname" value="<?php echo $row -> user_name?>" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" value="<?php echo $row -> password?>"placeholder="Password"><br>

     	<button type="submit">UPDATE</button>
		 <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>
