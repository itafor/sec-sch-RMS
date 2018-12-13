<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">CHANGE PASSWORD</h4> 
         
                       <?php
       if(isset($_POST['change'])){
    $old_password1=md5(addslashes(strip_tags($_POST['old_password'])));
    $new_password=md5(addslashes(strip_tags($_POST['new_password'])));
    
     $username= $_SESSION['username'];
      $sel_user=mysqli_query($connection,"SELECT * FROM admin WHERE username='$username'");
      if(!$sel_user) {
      die("selecting admin failed:".mysqli_error());
      }
       while($data=mysqli_fetch_array($sel_user)){
       $old_password=md5($data['password']);
        
        if(empty($old_password1)  || empty($new_password)){
     echo "please fill the form correctly";
    }elseif($old_password != md5($old_password1)){
         echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>Old password does not match </span>";
    
       }else{
       
       $change_password="UPDATE admin SET password='$new_password'  WHERE username='$username'" ;
     
     $result=mysqli_query($connection,$change_password);
     if($result)
     {
     echo "Password changed successfully";
     }else{
       echo "password change not successful".mysqli_error($connection); 
     }
       }
      }
    
 }     
?>
     <form action="changepassword.php" method="post" id="signup_form">
<h1>Change Password</h1>
<div class="row"> 
      <div class="col-md-4"> 
         <div class="form-group"> 
     Old Password:
      <input type="password" name="old_password" class="form-control">
      </div>  </div>  </div>
      <div class="row"> 
      <div class="col-md-4"> 
         <div class="form-group">   
      New Password:
      <input type="password" name="new_password" class="form-control"> 
        </div>  </div>  </div>  
         <div class="row"> 
      <div class="col-md-4"> 
         <div class="form-group"> 
       <input type="submit" name="change"  value="Change"> 
     </div>  </div>  </div>     
</form>                               

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>