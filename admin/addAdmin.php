<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Add New Staff</h4> 
  <?php 
     

    if(isset($_POST['create']))
    {
        
    //get form data
    $fullname=htmlspecialchars(strip_tags($_POST['fullname']));
    $phone=htmlspecialchars(strip_tags($_POST['phone'])); 
    $email=htmlspecialchars(strip_tags($_POST['email'])); 
    $usernam=htmlspecialchars(strip_tags($_POST['username']));
    $password=htmlspecialchars(strip_tags($_POST['password']));
    $confirm_pass=htmlspecialchars(strip_tags($_POST['confirmpassword']));
    $date=date("Y-m-d h:i:sa");
     
    if( $fullname=="" || $phone=="" || $usernam=="" || $password=="" || $email=="" || $confirm_pass==""){
    $erro= "please fill out all fields";
    }else{
         //check if username has already been taken
         $checkusername=mysqli_query($connection,"SELECT * FROM admin WHERE username='$usernam'");
         if(mysqli_num_rows($checkusername) >= 1){
          $erro="username already taken";
          }else{
               //check if email has already been taken
         $checkemail=mysqli_query($connection,"SELECT * FROM admin WHERE email='$email'");
         if(mysqli_num_rows($checkemail) >= 1){
         $erro= "Email already taken";
          }else{
            //check if phone has already been taken
         $checkphone=mysqli_query($connection,"SELECT * FROM admin WHERE phone='$phone'");
         if(mysqli_num_rows($checkphone) >= 1){
          $erro= "Phone number already taken";
          }else{
              if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                $erro=  "Your email is not valid.";    
                }else{
                    if($password !=$confirm_pass){
                     $erro=  "passwords don't matched."; 
                    }else{
           
           
        $register=mysqli_query($connection,"INSERT INTO admin(id,fullname,email,username,password,phone,picture,code,active,regdate,user_status,rank)
        VALUES('','$fullname','$email','$usernam','$password','$phone','n','1','1','$date','Active','staff')");
        if(!$register){
        echo " sign up failed".mysqli_error($connection);
}else {
        $success = "you have successfully added a new staff!"; 
}
           
  
           }
         }
       }                   
    }
   } 
}
}  
?>

<?php 
    if(!empty($erro)){
     echo "<span class='btn btn-danger'>" .$erro."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>
<?php 
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_SESSION['username']."' AND rank = 'admin' ");
     if(mysqli_num_rows($check) > 0)
    {
   // echo '<div style="opacity: .5; pointer-events: none">' ; 
    }else{
        echo '<div style="opacity: .5; pointer-events: none;">' ;
   echo "<h3 style='color:red;'>Forbidden Area, Only the admin can access this area</h3>"; 
    }
     
    ?>  
    
    
<form action="addAdmin.php" method="post" role="form">
<div class="controls">  
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   FULL NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="fullname" class="form-control" placeholder="Please enter your full name *"  data-error="Firstname is required." value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   PHONE NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="phone" class="form-control" placeholder="Please enter your full name *"  data-error="Firstname is required." value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
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
                   USER NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="username" class="form-control" placeholder="Please enter your username *"  data-error="Firstname is required." value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   PASSWORD:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="password" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                 CONFIRM  PASSWORD:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="confirmpassword" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="create" value="Create Account" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
     
      </div>
</form>
                                                                                   

                </div>  
                
          </div>
           </div>
     
 <?php require("includes/footer.php"); ?>