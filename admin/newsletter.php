<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
  
    <h4 class="page-head-line">NEWSLETTER</h4> 
                                                <?php 
  include('Mail.php'); // includes the PEAR Mail class, already on your server.
        $username = 'admin@depotterhealthtech.sch.ng'; // your email address
        $password = 'depotter/tech/001'; // your email address password 


    $check=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_SESSION['username']."' AND rank = 'admin' ");
     if(mysqli_num_rows($check) > 0)
    {
   // echo '<div style="opacity: .5; pointer-events: none">' ; 
    }else{
        echo '<div style="opacity: .5; pointer-events: none;">' ;
   echo "<h3 style='color:red;'>Forbidden Area, Only the admin can access this area</h3>"; 
    }
     
    ?> 
     <?php 
   if(isset($_POST['send'])){
 
$senderEmail='admin@depotterhealthtech.sch.ng'; 
$subject=htmlspecialchars( $_POST['subject']); 
$body=addslashes( htmlspecialchars($_POST['body'])); 
 
if(empty($subject)){
 $failure = 'Please enter the subject of the mail'.'<br>';  
} elseif(empty($body)){
 $failure = 'Please enter the mass email content'.'<br>'; 
}else{
                    
$query=mysqli_query ($connection, "SELECT * FROM  emaillist");
if(!$query){
 $failure = " selecting from email list failed".mysqli_error($connection);
} else{
  
while ($row = mysqli_fetch_array($query)) { 

$email= $row['email']; 
 
$msg= "Dear $email,\n $body \n\n click the link below or copy and paste on your browser bar to stop receiving mails from De-potter College\n\n https://depotterhealthtech.sch.ng/unsubscribeuser.php "; 


$headers = array ('From' => $senderEmail, 'To' => $email, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($email, $headers, $msg,$subject); // sending the email

if (PEAR::isError($mail)){
$failure= "<p>" . $mail->getMessage() . "</p>";
}
else {
$success="<p>Message successfully sent!</p>";
// header("Location: http://www.example.com/"); // you can redirect page on successful submission.
}





} 
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
     <form action="newsletter.php" method="post" role="form">
<div class="controls">

  
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Subject of Mail:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="subject" class="form-control" placeholder="subject" required="required"  data-error="Firstname is required." value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Newsletter Content:<span style="color:red">*</span>
           <textarea name="body" class="form-control" cols="35" rows="10" required="required"></textarea>  
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="send" value="Send Mass Email" class="btn btn-success btn-send" class="form-control" >
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