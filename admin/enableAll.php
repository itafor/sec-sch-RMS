<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 
<?php 

 

    $activateall=mysqli_query($connection,"UPDATE students SET user_status = 'Active'");
    if(!$activateall)
     {
      echo "<div class='alert alert-danger'>enabling all students not successful</div><br/>";       
     }else{
    echo "<div class='alert alert-success'>You have successfully enabled all students</div><br/>";   
     }
?>
<a href="approveStudents.php">GO BACK</a>
