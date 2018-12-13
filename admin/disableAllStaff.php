<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>  
 <?php 
  $diableAll=mysqli_query($connection,"UPDATE admin SET user_status = 'Inactive'");
    if(!$diableAll)
     {
      echo "<div class='alert alert-danger'>Disably staff not successful</div><br/>";       
     }else{
    echo "<div class='alert alert-success'>You have successfully disabled all staff</div><br/>";   
     }
   
   ?> 
<a href="approveAdmin.php">GO BACK</a>   
