<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>
  
    <?php
 if(isset($_SESSION["matricno"])){
  header("location: index.php");
  exit();
 } 
?>

<a href="http://localhost/silverbird/index.php"><?php 
    
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
 

   <?php 
                   $message = "";
                   
                    if(isset($_POST['login'])){  
    //get form data
     $matricno=addslashes(strip_tags($_POST['matricno']));
    $password=addslashes(strip_tags($_POST['password']));
    //$rememberme=addslashes(strip_tags($_POST['rememberme']));
    
    
    if($matricno == "" || $password == ""){
    $message = "<div>Please enter your matric number and password</div>";  
    }else{
      $login=mysqli_query($connection,"SELECT * FROM students  WHERE matricno='$matricno' AND user_status='Inactive'");
      if(mysqli_num_rows($login) > 0){
         $message  = "<div>your Account has been disabled, please contact the admin  </div>";  
      }else{
         $chkpass=mysqli_query($connection,"SELECT * FROM students  WHERE password='$password' AND matricno='$matricno'  ");
      if(mysqli_num_rows($chkpass) ==0){
         $message  = "<div>You entered a wrong password or matric number </div>";  
      }else{
      $_SESSION['matricno']=$matricno; 
  
         header("location: index.php");
         exit();
 
   } 
  } 
  }
  }
?>
             
              
               <div class="container"> 
              
                            <div class="admincontent">
                                 <h4 class="page-head-line">STUDENTS / PARENTS: LOGIN FORM</h4>
                                  <?php
              if(!empty($message)){
              echo "<span class='btn btn-danger'>" .$message."</span>";    
              }
              ?>  
  <form action="studentLogin.php" method="post" role="form">
<div class="controls">
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   REG. NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="matricno" class="form-control" >
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
            <div class="col-md-2">
                <div class="form-group">
                    <input id="form_name" type="submit" name="login" value="Login" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                   <a href="../students/foregotten_pass.php"> <input id="form_name" type="button"  value="Forgot password?" class="btn btn-success btn-info" class="form-control" ></a>
                    <div class="help-block with-errors"></div>
                </div>
            </div><div class="col-md-2">
                <div class="form-group">
                  <a href="../studentRegForm.php">  <input id="form_name" type="hidden"  value="Create Account" class="btn btn-info btn-" class="form-control" ></a>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
       </div>
</form>
                </div>
        </div> 
        <table height="100px"></table>
  <?php require("includes/footer.php"); ?>