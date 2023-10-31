<?php 
include ('Connection.php');
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

// For Display
    $sql="SELECT * FROM users ";
    $result=mysqli_query($con,$sql);
    $p="SELECT * FROM product ";
    $res=mysqli_query($con,$p);
    $c="SELECT * FROM contact ";
    $contact=mysqli_query($con,$c);
    $f="SELECT * FROM feedback ";
    $fed=mysqli_query($con,$f);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
        <div class="animated-text">

            <h1>Welcome Admin<!--?php echo $_SESSION['name']; ?--></h1>
            <h1>

                <button><a href="logout.php">Logout</a></button>
            </h1>
            <!-- <button><a href="admin.php">SignOut</a></button>
            <button><a href="home.php">Home</a></button> --> -->
        </div>
    </div>
    <div >
        <form method="post">

            <table border="2">
                <tr>
                    <th colspan="5">RECORDS OF USERS</th>
                    <!-- <th><a href="login.php"><img src="img/wired-flat-49-plus-circle.gif" alt=""></a></th> -->
                </tr>
                <tr>
                    <td>ID:</td>
                    <td>UserName:</td>
                    <td>Password:</td>
                    <td>Name:</td>
                    <!-- <td colspan="2">Action:</td> -->
                </tr>
                <?php
                while($row=mysqli_fetch_object($result))
                { ?>
                <tr>
                    <td><?php echo $row->id;?></td>
                    <td><?php echo $row->user_name;?></td>
                    <td><?php echo $row->password;?></td>
                    <td><?php echo $row->name;?></td>
                    <!-- <td><a href="edituser.php?ID=<!?php echo $row->id;?>" onclick="confirm('Confirm to Edit?')">
                    <img src="img/wired-flat-35-edit.gif" alt="Edit">
                    
                </a></td>
                    <td><button><a href="edit.php ?ID= <!?php echo $row->ID;?>">Edit</a></button></td> -->
                    <!-- <td><a href="userdelete.php?ID=<!?php echo $row->id;?>" onclick="confirm('Confirm to delete?')"><img src="img/wired-lineal-185-trash-bin.gif" alt="Edit"></a></td> -->
                    <!-- <td><button><a href="delete.php?
                    deleteID='.$row->ID.'">Delete</a></button></td> --> -->

                </tr>
                    <?php
            }?>
                
            </table>
        </form>
    </div>
    <div>
        <form method="post">
        <table id="mytable" border="5">
                <tr>
                    <th colspan="8">RECORDS OF PAYMENT</th>
                </tr>
                <tr>
                    <!-- <th colspan="7">    <input type="text" id="myinput" placeholder="Search" onkeyup="search()"> -->
                    <th colspan="7">
                         <!-- <form action="saerch.php"> -->


                        <input type="text" id="myinput" name="search" placeholder="Search"> </th>
                        <!-- <button type="submit">search</button> -->
                            <!-- </form>  -->
                            <th>
                            <a href="payment.php">
                            <img src="img/wired-flat-49-plus-circle.gif" alt="">
                        </a>
                    </th>
                </th>
        </tr>
            <tr>
                    <td>ID:</td>
                    <td>UserName:</td>
                    <td>Card Number:</td>
                    <td>Expiry Date:</td>
                    <td>CVV:</td>
                    <td>Name:</td>
                    <td colspan="2">Action:</td>
                </tr>
                <?php
                while($row=mysqli_fetch_object($res))
                { ?>
                <tr>

                    <td><?php echo $row->ID;?></td>    
                    <td><?php echo $row->uname;?></td>
                    <td><?php echo $row->card_Number;?></td>
                    <td><?php echo $row->expiry_date;?></td>
                    <td><?php echo $row->cvv;?></td>
                    <td><?php echo $row->name_on_card;?></td>
                    <td><a href="edit.php?id=<?php echo $row->ID;?>" onclick="confirm('Confirm to Edit?')">
                    <img src="img/wired-flat-35-edit.gif" alt="Edit">
                    
                </a></td>
                    <!-- <td><button><a href="edit.php ?ID= <?php echo $row->ID;?>">Edit</a></button></td> -->
                    <td><a href="delete.php?id=<?php echo $row->ID;?>" onclick="confirm('Confirm to delete?')"><img src="img/wired-lineal-185-trash-bin.gif" alt="Edit"></a></td>
                    <!-- <td><button><a href="delete.php?
                    deleteID='.$row->ID.'">Delete</a></button></td> -->

                </tr>
                    <?php
            }?>                
                </>
            </form>
    </div>
    <div>
        
    <form method="post">

<table border="2">
    <tr>
        <th colspan="5">RECORDS OF CONTACT</th>
        <th><a href="Contact.php"><img src="img/wired-flat-49-plus-circle.gif" alt=""></a></th>
    </tr>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email:</td>
        <td>Message:</td>
        <td colspan="2">Action:</td>
    </tr>
    <?php
    while($row=mysqli_fetch_object($contact))
    { ?>
    <tr>
        <td><?php echo $row->ID;?></td>
        <td><?php echo $row->clientname;?></td>
        <td><?php echo $row->clientemail;?></td>
        <td><?php echo $row->clientmessage;?></td>
        <td><a href="edit2.php?ID=<?php echo $row->ID;?>" onclick="confirm('Confirm to Edit?')">
                    <img src="img/wired-flat-35-edit.gif" alt="Edit">
                    
                </a></td>
                    <!-- <td><button><a href="edit.php ?ID= <?php echo $row->ID;?>">Edit</a></button></td> -->
                    <td><a href="feddelete.php?ID=<?php echo $row->ID;?>" onclick="confirm('Confirm to delete?')"><img src="img/wired-lineal-185-trash-bin.gif" alt="Edit"></a></td>
                    <!-- <td><button><a href="delete.php?
                    deleteID='.$row->ID.'">Delete</a></button></td> -->

    </tr>
        <?php
}?>
    
</table>
</form>
    </div>
   
    <div>

    <form method="post">

<table border="2">
    <tr>
        <th colspan="5">RECORDS OF FEEDBACK</th>
        <th><a href="About.php"><img src="img/wired-flat-49-plus-circle.gif" alt=""></a></th>
    </tr>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email:</td>
        <td>Feedback:</td>
        <td colspan="2">Action:</td>
    </tr>
    <?php
    while($row=mysqli_fetch_object($fed))
    { ?>
    <tr>
        <td><?php echo $row->ID;?></td>
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->email;?></td>
        <td><?php echo $row->feedback;?></td>
        <td><a href="editfeedback.php?id=<?php echo $row->ID;?>" onclick="confirm('Confirm to Edit?')">
                    <img src="img/wired-flat-35-edit.gif" alt="Edit">
                    
                </a></td>
                    <!-- <td><button><a href="edit.php ?ID= <?php echo $row->ID;?>">Edit</a></button></td> -->
                    <td><a href="contactdelete.php?ID=<?php echo $row->ID;?>" onclick="confirm('Confirm to delete?')"><img src="img/wired-lineal-185-trash-bin.gif" alt="Edit"></a></td>
                    <!-- <td><button><a href="delete.php?
                    deleteID='.$row->ID.'">Delete</a></button></td> -->

    </tr>
        <?php
}?>
    
</table>
</form>
    </div>
   


    <script>
        const search=()=>{
            let filter=document.getElementById('myinput').value.toUpperCase();

            let mytable=document.getElementById('mytable');

            let tr= mytable.getElementsByTagName('tr');

            for(var i=0;i<tr.length;i++){
                let td=tr[i].getElementsByTagName('td')[0];
                let td2=tr[i].getElementsByTagName('td')[1];
                if(td){
                    let textvalue=td.textContent || td.innerHTML;
                    if(textvalue.toUpperCase().indexOf(filter)>-1){
                        tr[i].style.display="";
                    }
                    else{
                        tr[i].style.display="none";
                    }
                }
                if(td2){
                    let textvalue1=td2.textContent || td.innerHTML;
                    if(textvalue1.toUpperCase().indexOf(filter)>-1){
                        tr[i].style.display="";
                    }
                    else{
                        tr[i].style.display="none";
                    }
                }
            }
        }
    </script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>