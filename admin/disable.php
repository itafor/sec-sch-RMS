<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>  
 <?php 
   if(isset($_GET['stdId'])){
     $studentid=$_GET['stdId'];
  } 
     //$studentid=$_REQUEST['stdId']; 
    if(!isset($studentid)){
    echo "Student ID not  supplied";
    }
    else{
    $check=mysqli_query($connection,"SELECT * FROM students WHERE stdId='$studentid' AND user_status = 'Inactive' ");
    if(mysqli_num_rows($check) == 1) {
    echo "<div class='alert alert-danger'>This student is already disabled</div>";
    }else{
    $activate=mysqli_query($connection,"UPDATE students SET user_status = 'Inactive' WHERE  stdId= '$studentid'")  ;
    echo "<div class='alert alert-danger'>You have successfully disabled this student</div><br/>";
        }
    }
   
   ?> 
<a href="approveStudents.php">GO BACK</a>   
