<!-- <!?php 
include ('Connection.php');

$search=$_GET['search'];
 ?>
<div>
        <form method="post">
        <table id="mytable" border="5">
                <tr>
                    <th colspan="8">RECORDS OF PAYMENT <?php echo $search; ?></th>
                </tr>
                <tr>
                    <!-- <th colspan="7">    <input type="text" id="myinput" placeholder="Search" onkeyup="search()"> 
                    <th colspan="7"> <form action="saerch.php">

                        <input type="text" id="myinput" placeholder="Search"> 
                        <button type="submit">search</button>
                            </form> 
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
                <!?php
                while($row=mysqli_fetch_object($res))
                { ?>
                <tr>

                    <td><!?php echo $row->ID;?></td>    
                    <td><!?php echo $row->uname;?></td>
                    <td><!?php echo $row->card_Number;?></td>
                    <td><!?php echo $row->expiry_date;?></td>
                    <td><!?php echo $row->cvv;?></td>
                    <td><!?php echo $row->name_on_card;?></td>
                    <td><a href="edit.php?id=<!?php echo $row->ID;?>" onclick="confirm('Confirm to Edit?')">
                    <img src="img/wired-flat-35-edit.gif" alt="Edit">
                    
                </a></td>
                    <!-- <td><button><a href="edit.php ?ID= <!?php echo $row->ID;?>">Edit</a></button></td> -->
                    <!-- <td><a href="delete.php?id=<!?php echo $row->ID;?>" onclick="confirm('Confirm to delete?')"><img src="img/wired-lineal-185-trash-bin.gif" alt="Edit"></a></td> -->
                    <!-- <td><button><a href="delete.php?
                    deleteID='.$row->ID.'">Delete</a></button></td>

                </tr>
                    <!?php
            }?>                
                </>
            </form>
    </div> -->