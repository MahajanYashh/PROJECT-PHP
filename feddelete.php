<?php
    include 'Connection.php';
    if(isset($_GET['ID']))
    {
        $q="Delete from contact where ID=".$_REQUEST['ID'];
        mysqli_query($con,$q);
    }
    header("Location:Dashboard.php");
?>