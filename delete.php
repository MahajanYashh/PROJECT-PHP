<?php
    include 'Connection.php';
    if(isset($_GET['id']))
    {
        $q="Delete from product where ID=".$_REQUEST['id'];
        mysqli_query($con,$q);
    }
    header("Location:Dashboard.php");
?>