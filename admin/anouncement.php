<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>


   <h4 class="page-head-line">Pass a message across students</h4>      
         
     <?php 
     include('Mail.php'); // includes the PEAR Mail class, already on your server.
        $username = 'admin@depotterhealthtech.sch.ng'; // your email address
        $password = 'depotter/tech/001'; // your email address password   
   if(isset($_POST['send'])){
//$from= 'itaforfrancis@gmail.com';//specify here the address that you want email to be sent from 
$senderEmail=htmlspecialchars($_POST['email']); 
$subject=addslashes(htmlspecialchars( $_POST['subject'])); 
$body=addslashes( htmlspecialchars($_POST['body'])); 
$name=addslashes( htmlspecialchars($_POST['name'])); 
if(empty($name)){
 $failure = 'Please enter sender name'.'<br>';  
}elseif(empty($senderEmail)){ 
  $failure = 'Please enter sender email'.'<br>';  
} elseif(empty($subject)){
 $failure = 'Please enter the subject of the mail'.'<br>';  
} elseif(empty($body)){
 $failure = 'Please enter the mass email content'.'<br>'; 
}elseif(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                $failure = "The sender email is not valid.";    
                }else{
                     $matric=mysqli_query ($connection, "SELECT * FROM  students"); 
                    while($data=mysqli_fetch_array($matric)){
                   $da =  $data['matricno'];
                          $insert=mysqli_query($connection,"INSERT INTO anouncement(mes,subject,date,status,name,matricno) VALUES('$body','$subject',now(),'unread','$name','$da')");
                   
                   } 
$query=mysqli_query ($connection, "SELECT * FROM  students");
if(!$query){
 $failure = " selecting from students record failed".mysqli_error($connection);
} else{
  
while ($row = mysqli_fetch_array($query)) { 

$email= $row['email'];
$firstname= $row['firstname'];
$from="admin@depotterhealthtech.sch.ng";
$msg= "Dear $firstname ($email),\n\n$body"; 


$headers = array ('From' => $from, 'To' => $email, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($email, $headers, $msg ,$subject); // sending the email

if (PEAR::isError($mail)){
$failure = "<p>" . $mail->getMessage() . "</p>";
}
else {
$success = "<p>Announcement has been sent successfully </p>";

}

} 
}
} 
}
?> 
 
       <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$erro."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>                                                                                 
        
                
     
     <form action="anouncement.php" method="post" role="form">
<div class="controls">
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Sender's Name:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Sender Name" required="required" data-error="Firstname is required." value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Sender's Email Address:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Sender Email" required="required" data-error="Firstname is required." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>  
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Message heading:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="subject" class="form-control" placeholder="subject" required="required"  data-error="Firstname is required." value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Message Body:<span style="color:red">*</span>
           <textarea name="body" class="form-control" cols="35" rows="10" required="required"></textarea>  
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="send" value="Send Anouncement" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
     
      </div>
</form>
                                                                                   

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>