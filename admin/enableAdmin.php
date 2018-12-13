<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
<?php 


      $adminid=$_REQUEST['id']; 
    if(!isset($adminid)){
    echo "Admin ID not  supplied";
    }
    else{
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE id='$adminid' AND user_status = 'Active' ");
    if(mysqli_num_rows($check) == 1)
    {
    echo "<div class='alert alert-success'>This staff is already active</div>";   
    }else{
    $activate=mysqli_query($connection,"UPDATE admin SET user_status = 'Active' WHERE  id= '$adminid'")  ;
    
    echo "<div class='alert alert-success'>You have successfully enabled this staff</div><br/>";   
        }
    }
?>
<a href="approveAdmin.php">GO BACK</a>
