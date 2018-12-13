<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
                                 <h4 class="page-head-line">UPLOAD STUDENTS' RESULT</h4>
                      <?php   
      if(isset($_POST['edit'])) {
      
         $matricno=$_SESSION['username'];
          $fullname=$_POST['fullname']; 
          $email=$_POST['email'];
          $phone=$_POST['phone'];
           if(empty($fullname)){
             $failure = "pls enter your full name";
           }elseif(empty($email)){
               $failure = "pls enter your email address";
           }elseif(empty($phone)){
             $failure = "Please enter phone number";
           }elseif(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])){
                 $failure = "INVALID EMAIL";       
              }else{
              $selEmail=mysqli_query($connection,"SELECT * FROM admin WHERE email='$email'");
                if(mysqli_num_rows($selEmail) > 0){
                   $failure = "Email already exist";
                }else{
                 $updateemail=mysqli_query($connection,"UPDATE admin SET email='".$email."' WHERE username='".$_SESSION['username']."'");
                 if($updateemail){
                   $success = "email updated  successfully!";
                    }else{
                       $failure = "Email update failed"; 
                    } 
                     } 
              $selphone=mysqli_query($connection,"SELECT * FROM admin WHERE phone='$phone'");
                if(mysqli_num_rows($selphone) > 0){
                   $failure = "phone number already exist";
                }else{      
     $query=mysqli_query($connection,"UPDATE admin SET phone='".$phone."' WHERE username='".$_SESSION['username']."'");
         if(!$query)
          {
        $failure =  "An unexpected error occured while updating phone number";
          }else
         {
            $success = "phone number updated  successfully!";    
              }
           } 
             $query=mysqli_query($connection,"UPDATE admin SET fullname='".$fullname."' WHERE username='".$_SESSION['username']."'");
             if($query){
         $success = "name updated successfully!";
         }else{
           $failure =  "An unexpected error occured while updating name"; 
         }
     
    }
    }
     ?>                                                              
         <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
  
     } 
     ?> 
                </div>
        </div>
  <?php require("includes/footer.php"); ?>