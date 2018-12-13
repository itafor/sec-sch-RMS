<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>  
 <?php 
  $diableAll=mysqli_query($connection,"UPDATE students SET user_status = 'Inactive'");
    if(!$diableAll)
     {
      echo "<div class='alert alert-danger'>Disably students not successful</div><br/>";       
     }else{
    echo "<div class='alert alert-success'>You have successfully disabled all students</div><br/>";   
     }
   
   ?> 
<a href="approveStudents.php">GO BACK</a>   
