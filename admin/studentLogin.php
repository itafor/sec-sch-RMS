<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>
  
    <?php
 if(isset($_SESSION["email"])){
  header("location: index.php");
  exit();
 } 
?>
<div class="userheader">
<a href="index.php"><img src="images/logo.PNG" class="img-responsive" alt="MY PROFILE" width="150" height="150"></a>
 
</div>
   <?php 
                   $message = "";
                   
                   if(isset($_POST['login'])){
                       $email=htmlspecialchars($_POST['email']);
                       $password=md5(addslashes(strip_tags($_POST['password'])));  
                    if(empty($_POST['email']) || empty($_POST['password'])){
                      $message = "<div class='alert alert-danger'>Both field are required</div>";
                    }else{
                      $query=mysqli_query($connection,"SELECT * FROM admin WHERE email ='$email' " ) ;
                      
                      if(mysqli_num_rows($query) > 0){
                      
                         foreach($query as $row) 
                         {
                             if($row['active']==1)
                             {
                              if(md5($_POST["password"])== $row["password"])
                              {
                                  setcookie("email", $email,time()+7200);
                                   $_SESSION["email"]=$email;
                                  header("location: index.php");
                                  exit();
                              } else
                              {
                                  $message = "<div class='alert alert-danger'>Wrong password</div>"; 
                              }  
                             } else
                             {
                               $message = "<div class='alert alert-danger'>Please activate your account and try again</div>"; 
                             }
                         }
                      }else{
                        $message = "<div class='alert alert-danger'>Wrong email address</div>"; 
                      }
                    }
                   }
                 ?>
               <div class="container">  
                            <div class="admincontent">
                                 <h4 class="page-head-line">STUDENT LOGIN FORM</h4>
                                 <?php echo $message; ?>
  <form action="" method="post" role="form">
<div class="controls">
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                 Email:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" >
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
            </div><div class="col-md-2">
                <div class="form-group">
                   <a href=""> <input id="form_name" type="button"  value="Forgot password?" class="btn btn-success btn-info" class="form-control" ></a>
                    <div class="help-block with-errors"></div>
                </div>
            </div><div class="col-md-2">
                <div class="form-group">
                  <a href="studentRegForm.php">  <input id="form_name" type="button"  value="Create Account" class="btn btn-info btn-" class="form-control" ></a>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
       </div>
</form>
                </div>
        </div>
  <?php require("includes/footer.php"); ?>