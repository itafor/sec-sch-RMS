<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>  

<a href="https://bolsonresult.000webhostapp.com"><?php 
    
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
   <h4 class="page-head-line">ADMIN / STAFF: LOGIN</h4> 
<?php
$msg = " " ;
if(adminloggedin()) {
header("location: index.php");
exit();
}


  if(isset($_POST['login'])){  
    //get form data
     $username=addslashes(strip_tags($_POST['username']));
    $password=addslashes(strip_tags($_POST['password']));
    //$rememberme=addslashes(strip_tags($_POST['rememberme']));
    
    
    if($username == "" || $password == ""){
    $msg = "<div class='alert alert-danger'>Please enter your username and password</div>";  
    }else{
      $login=mysqli_query($connection,"SELECT * FROM admin  WHERE username='$username'");
      if(mysqli_num_rows($login) ==0){
         $msg  = "<div class='alert alert-danger'>The username you entered does not matched any of our record </div>";  
      }else{
         $chkpass=mysqli_query($connection,"SELECT * FROM admin  WHERE password='$password'");
      if(mysqli_num_rows($chkpass) ==0){
         $msg  = "<div class='alert alert-danger'>You entered a wrong password </div>";  
      }else{
         
         $chkpass=mysqli_query($connection,"SELECT * FROM admin  WHERE username='$username' AND user_status='Inactive'");
      if(mysqli_num_rows($chkpass) > 0){
         $msg  = "<div class='alert alert-danger'>Your account has been disabled, please contact the admin </div>";  
      }else{
          
          $chkpass=mysqli_query($connection,"SELECT * FROM admin  WHERE username='$username' AND active=0");
      if(mysqli_num_rows($chkpass) > 0){
         $msg  = "<div class='alert alert-danger'>you haven't activate your account, plesase check your email</div>";  
      }else{
          
    
      $_SESSION['username']=$username; 
      header("location: index.php");
         exit();
        
      
    }
   } 
  } 
  }
  }
  }
?>

 <?php
    echo $msg;
?> 
<form action="adminlogin.php" method="post" role="form">
<div class="controls">
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   USERNAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="username" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  PASSWORD:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="password" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input id="form_name" type="submit" name="login" value="Login" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
       </div>
</form>

<p> 
 <a href="foregotten_pass.php" >Forgot Password?</a>
</p>
</div>

                </div>  
                
          </div>
         <table height="200px"></table>
 <?php require("includes/footer.php"); ?>