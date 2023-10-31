<?php 
include('Connection.php');
// $q = "select * from product where ID='".$_REQUEST['id']."'";
//     $res = mysqli_query($con, $q);
//     $row = mysqli_fetch_object($res); 
if (isset($_REQUEST['id'])) {
    $q = "select * from product where ID='".$_REQUEST['id']."'";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res);
}
    if(isset($_REQUEST['btnedit']))
    {

        $q="UPDATE product SET 
        uname='".$_REQUEST['username']."',
        card_Number='".$_REQUEST['card-number']."',
        expiry_date='".$_REQUEST['expiry']."',
        cvv='".$_REQUEST['cvv']."',
        name_on_card='".$_REQUEST['name']."'
        WHERE product.ID = '".$_REQUEST['id']."'";
         mysqli_query($con,$q);
         header("location:Dashboard.php");
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <h2>Product Records</h2>
    <form  method="post">
        <table border="7">
            <tr>
                <th>Name</th>
                <th>:</th>
                <!-- <th><input type="text"  name="username" value="<!?php echo $row->uname; ?>"></th> -->
                <th><input type="text" name="username" value="<?php echo $row->uname; ?>" required></th>
            </tr>
            <tr>
                <th>Card Number</th>
                <th>:</th>
                <th><input type="text"  name="card-number" value="<?php echo $row->card_Number; ?>" required></th>
            </tr>
            
            <tr>
                <th>Expiry Date</th>
                <th>:</th>
                <th><input type="date"  name="expiry" value="<?php echo $row->expiry_date; ?>" required></th>
            </tr>
            <tr>
                <th>CVV</th>
                <th>:</th>
                <th><input type="number"  name="cvv"  value="<?php echo $row->cvv; ?>" required></th>
            </tr>

            <tr>
                <th>Name on Card</th>
                <th>:</th>
                <th><input type="text" name="name" value="<?php echo $row->name_on_card; ?>" required></th>
            </tr>
            </tr>
        <tr>
            <th colspan="2"><button type="submit" name="btnedit" >EDIT</button></th>
            <th colspan="2"><button type="submit" name="btnedit" ><a href="Dashboard.php"></a>CANCEL</button></th>
            </tr>
        </table>
        </form>
</body>
</html>