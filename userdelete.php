<?php
    include 'Connection.php';
    if(isset($_REQUEST['ID']))
    {
        $q="Delete from users where ID=".$_REQUEST['ID'];
        mysqli_query($con,$q);
    }
    header("Location:Dashboard.php");
?>