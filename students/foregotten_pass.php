<?php ob_start(); ?>
 <?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  
<div class="userheader">
<a href="index.php"><img src="students/images/logo.png" class="img-responsive" alt="MY PROFILE" width="150" height="150"></a>
 
</div> 
<div class="container">
    <div class="admincontent">
   <h4 class="page-head-line">password RECOVERY</h4>        
  <?php
  //include('Mail.php'); // includes the PEAR Mail class, already on your server.
//$username = 'admin@depotterhealthtech.sch.ng'; // your email address // your
//$password = 'depotter/tech/001'; // your email address password
if(isset($_POST['change'])){
$email=htmlspecialchars($_POST['email']);
if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                echo "Your email is not valid.";    
                }else{
if(!empty($email)){
$check_email=mysqli_query($connection,"SELECT * FROM students WHERE email='$email'");
    if(mysqli_num_rows($check_email)==0){
        echo "This email address ".$email." does not exist in our records";
    }else{
          $link=' please click the link below  to change your password or copy and paste on your browser bar   http://www.depotterhealthtech.sch.ng/students/foregotten_pass_op.php';
          $to=$email;
           $admin="admin@depotterhealthtech.sch.ng";
          $body=$link;
          $subject="PASSWORD RESET LINK FROM DEPOTTER COLLEGE";
                
          $headers = array ('From' =>  $admin, 'To' => $email, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($email, $headers, $body, $subject); // sending the email

if (PEAR::isError($mail)){
 $failure = "<p>" . $mail->getMessage() . "</p>";
}
else {
$success = "<p>We just send you a password reset link"."\n"."kindly login to your email to change your password</p>";
}

        
        
        
    }
    
}else{
    echo "Pls enter your email address"; 
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
<form action="foregotten_pass.php" method="POST">
  <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  FORGOTTEN PASSWORD:<span style="color:blue">Contact the principal to reccover your password</span>
                 <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">

 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  EMAIL:<span style="color:red">*</span>
                    <input  type="text" disabled="" name="email" class="form-control" placeholder="Please enter your email address here to continue" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="hidden" name="change" value="proceed to change password" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
</form>

  </div>
  </div>
 <?php require("includes/footer.php"); ?> 