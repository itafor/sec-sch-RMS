<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
                                 <h4 class="page-head-line">Drop course</h4>
                                 <?php
                                 $id=$_REQUEST['courseRegId'];
                                 
                    $query=mysqli_query($connection,"DELETE FROM courseregister WHERE  courseRegId='".$id."'");
        
                    
                    if($query){
                    $success = "Course deleted successfully";
                    }else{
                     $failure = "Course deletion failed";
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