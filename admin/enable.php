<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
<?php 


      $studentid=$_REQUEST['stdId']; 
    if(!isset($studentid)){
    echo "Student ID not  supplied";
    }
    else{
    $check=mysqli_query($connection,"SELECT * FROM students WHERE stdId='$studentid' AND user_status = 'Active' ");
    if(mysqli_num_rows($check) == 1)
    {
    echo "<div class='alert alert-success'>This student is already active</div>";   
    }else{
    $activate=mysqli_query($connection,"UPDATE students SET user_status = 'Active' WHERE  stdId= '$studentid'")  ;
    
    echo "<div class='alert alert-success'>You have successfully enabled this student</div><br/>";   
        }
    }
?>
<a href="approveStudents.php">GO BACK</a>
