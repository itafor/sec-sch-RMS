<?php require_once("includes/connection.php");?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">UNSUBSCRIBE FROM NEWSLETTER</div>      
    <div class="container"> 
      
           <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">enter the email for which you want to unsubscribe</h4>
                          <?php 
if(isset($_POST['Unsubscribe'])){
$email=htmlspecialchars($_POST['email']);
if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                $failure ="Your email is not valid.";    
                }else{
if(!empty($email)){
$check_email=mysqli_query($connection,"SELECT * FROM emaillist WHERE email='$email'");
    if(mysqli_num_rows($check_email)==0){
         $failure = "This email address ".$email." does not exist in our mail list";
    }else{
     $query=mysqli_query($connection,"DELETE FROM emaillist WHERE email='$email'");
     if($query){
       $success = "You have successfully unsubscribed from this newsletter "."\n"."Click the link below to subscribe again \n\n\n "."<a href='http://www.depotterhealthtech.sch.ng/index.php'>Subscribe</a>";
     }else{
         $failure = "Oops! something went wrong while trying to unsubscribed,. Try again"; 
     }
    }
}else{
     $failure = "Please enter the email for which you want to unsubscribe";
}
}
}
?>

<form action="unsubscribeuser.php" method="POST">
 <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
          echo "<span class='btn btn-success'>" .$success."</span>";    
     } 
     ?> 
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  EMAIL:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Please enter the email for which you want to unsubscribe" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="Unsubscribe" value="proceed to unsubscribe" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
</form>

 
                </div>

            </div

            </div>
        </div> <!--content-wraper end-->
 
    
       
    </div>
 </div>

   
<?php require("includes/footer.php"); ?> 