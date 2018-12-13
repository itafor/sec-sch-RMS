<?php require_once("includes/connection.php");?> 
          <?php
$qry = mysqli_query($connection,"SELECT * from students WHERE phone = '".$_POST['phone']."'");
$row = mysqli_num_rows($qry);
echo $row;
?>
   
 