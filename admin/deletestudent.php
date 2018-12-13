<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 

                               
                                 <?php
                                 $id=$_REQUEST['stdId'];
                                 
                    $query=mysqli_query($connection,"DELETE FROM students WHERE  stdId='".$id."'");
        
                    
                    if($query){
                    $success = "Student  deleted successfully";
                    }else{
                     $failure = "Student deletion failed";
                    }
          ?>            
           <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     echo '<a href="updatecourse2.php" ></a>';
     } 
     ?> 
                </div>
        </div>
  <?php require("includes/footer.php"); ?>