<?php require_once("includes/connection.php");?> 
          <?php
$qry = mysqli_query($connection,"SELECT * from emaillist WHERE email = '".$_POST['email']."'");
$row = mysqli_num_rows($qry);
echo $row;
?>
   
 