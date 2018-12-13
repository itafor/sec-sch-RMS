<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">MESSAGE</h4> 
  <?php 
                       
                $matricno=$_POST['matricno'];
                $rid=$_POST['id'];
              $mes=htmlspecialchars($_POST['mess']);
                     $usename=$_SESSION['username'];
                          if(!empty($mes)){
               $reply_body=mysqli_query($connection,"INSERT INTO reply_complain (matricno,MES,id,date,adusername) VALUES('$matricno','$mes','$rid',now(),'$usename')");
               if($reply_body){
                $success= "Reply sent";
               }else{
                 $failure= "Reply failed";
               }
               }else{
                $failure= "Please enter your message to continue"; 
               }
                 
             
              
    ?>                 
<?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?> 
<a href="index.php">Back</a>
                       
      
                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>