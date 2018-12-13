<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
                            
                       <?php
       if(isset($_POST['change'])){
    $old_password1=addslashes(strip_tags($_POST['old_password']));
    $new_password=addslashes(strip_tags($_POST['new_password']));
    
     $matricno= $_SESSION['matricno'];
      $sel_user=mysqli_query($connection,"SELECT * FROM students WHERE matricno='$matricno'");
      if(!$sel_user) {
      die("selecting user failed:".mysqli_error());
      }
       while($data=mysqli_fetch_array($sel_user)){
       $old_password=$data['password'];
        
        if(empty($old_password1)  || empty($new_password)){
     echo "please fill the form correctly";
    }elseif($old_password != $old_password1){
         echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>Old password does not match </span>";
    
       }else{
       
       $change_password="UPDATE students SET password='$new_password'  WHERE matricno='$matricno'" ;
     
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
     <form action="changepass.php" method="post" id="signup_form">
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