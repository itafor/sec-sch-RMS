<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
                                 <h4 class="page-head-line">Applicants</h4>
                                 <?php
                                 $id=$_REQUEST['appId'];
                                 
                    $query=mysqli_query($connection,"DELETE FROM application WHERE  appId='".$id."'");
        
                    
                    if($query){
                    $success = "Applicant  deleted successfully";
                    }else{
                     $failure = "Applicant deletion failed";
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