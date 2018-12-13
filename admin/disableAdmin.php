<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>  
 <?php 
   if(isset($_GET['id'])){
     $adminid=$_GET['id'];
  } 
     //$studentid=$_REQUEST['stdId']; 
    if(!isset($adminid)){
    echo "Admin ID not  supplied";
    }
    else{
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE id='$adminid' AND user_status = 'Inactive' ");
    if(mysqli_num_rows($check) == 1) {
    echo "<div class='alert alert-danger'>This staff is already disabled</div>";
    }else{
    $activate=mysqli_query($connection,"UPDATE admin SET user_status = 'Inactive' WHERE  id= '$adminid'")  ;
    echo "<div class='alert alert-danger'>You have successfully disabled this staff</div><br/>";
        }
    }
   
   ?> 
<a href="approveAdmin.php">GO BACK</a>   
