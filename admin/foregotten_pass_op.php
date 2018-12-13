 <?php ob_start(); ?>
 <?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  

<a href="index.php"><?php 
    
    $select_profile="SELECT * FROM headersetting";
    $headerdisplay=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($headerdisplay)){
    $logo=$data['logo'];
    $schname=$data['schname']; 
     $schaddress=$data['schaddress']; 
     $phone=$data['phone'];
     $email=$data['email'];
     $website=$data['website'];
    echo "<br/>";
    echo '<table width="100%" class="resultsheetlogin">';
     echo '<tr class="resultrow">';
  echo "<td class='resultheaderimage'><img src='$logo' alt=\"My profile picture\" ></td>";
   echo '<td align="center">'.'<p class="schname">'.$schname.'</p>'.'</td>';
 }
?>  
</tr>
</table></a>
 

  <div class="container">
    <div class="admincontent">
   <h4 class="page-head-line">change password form</h4>  
   <?php

if(isset($_POST['change'])){
    
$email=$_POST['email'];
$new_pass=md5($_POST['new_password']);
$confirm_pass=md5($_POST['confirm_password']);


if($new_pass!=$confirm_pass){
    echo "password does not matched";
}elseif(empty($email)){
echo "please enter your email address";
}else if(empty($new_pass)){
echo "please enter new password";
}elseif(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                echo "Your email is not valid.";    
                }elseif(empty($confirm_pass)){
echo "please enter confirmation password";
}else{
    $chech_mail=mysqli_query($connection,"Select * FROM admin WHERE email='$email'");
    if(mysqli_num_rows($chech_mail) ==0){
        echo "Email not found";
    }else{
    $change_pass=mysqli_query($connection,"UPDATE admin set password='$new_pass' WHERE email='$email'");
    if($change_pass){
        echo "Password changed successfully";
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
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Please enter your email *"  data-error="Firstname is required." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   PASSWORD:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="new_password" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                 CONFIRM  PASSWORD:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="confirm_password" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="change" value="Change Password" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

          </form>
          </div>
  </div>
<?php require("includes/footer.php"); ?> 