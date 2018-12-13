<?php ob_start(); ?>
 <?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  
<div class="userheader">
<a href="index.php"><img src="students/images/logo.png" class="img-responsive" alt="MY PROFILE" width="150" height="150"></a>
 
</div> 
  <div class="container">
    <div class="admincontent">
   <h4 class="page-head-line">change password form</h4>  
   <?php

if(isset($_POST['change'])){
    
$email=htmlspecialchars($_POST['email']);
$new_pass=md5(htmlspecialchars($_POST['new_password']));
$confirm_pass=md5(htmlspecialchars($_POST['confirm_password']));

if(!$new_pass || !$confirm_pass || !$email){
echo "please all fields are required";
}elseif($new_pass!=$confirm_pass){
    echo "password does not matched";
}elseif(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                echo "Your email is not valid.";    
                }else{
    $chech_mail=mysqli_query($connection,"Select * FROM students WHERE email='$email'");
    if(mysqli_num_rows($chech_mail) ==0){
        echo "Email not found";
    }else{
    $change_pass=mysqli_query($connection,"UPDATE students set password='$new_pass' WHERE email='$email'");
    if($change_pass){
        echo "Password changed successfully";
      }else{
         echo "Password change not successful, try again later".mysqli_error($connection);
      }
   }
}
}
  ?>
<form action="foregotten_pass_op.php" method="POST" >
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   EMAIL:<span style="color:red">*</span>
                    <input  type="text" name="email" class="form-control" placeholder="Please enter your email *"  value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   PASSWORD:<span style="color:red">*</span>
                    <input type="password" name="new_password" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                 CONFIRM  PASSWORD:<span style="color:red">*</span>
                    <input  type="password" name="confirm_password" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input  type="submit" name="change" value="Change Password" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

          </form>
          </div>
  </div>
<?php require("includes/footer.php"); ?> 