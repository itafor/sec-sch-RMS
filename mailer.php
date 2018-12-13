<?php require_once("includes/connection.php");?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">MY CONTENT TITLE</div>      
    <div class="container"> 
      
           <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>
                                                             <?php

//require_once "Mail.php"; // PEAR Mail package
require 'PHPMailerAutoload.php';
require 'PHPMailer/src/PHPMailer.php'; // PEAR Mail_Mime packge

$mail = new PHPMailer();
$mail ->Host='smtp.gmail.com';
$mail -> SMTPAuth='true';
$mail-> Username='admin@depotterhealthtech.sch.ng';
$mail->Password='depotter/tech/001';
$mail->SMTPSecure='tls';
$mail->Port='597';
$mail->From='admin@depotterhealthtech.sch.ng';
//$mail->AddAddress('itaforfrancis@gmail.com');
$mail->AddAddress('itaforfrancis@gmail.com');//Adds a "To"
$mail->AddReplyTo('info@depotterhealthtech.sch.ng');
$mail->Subject='Testing SMTP';
$mail->Body='THIS IS TO TEST SMTP MAILING';
if($mail->Send()){
     echo 'mail sent';
}else{
  echo 'mail sending failed';
}

?>
 
 <form action="qservers_mail.php" method="post">
<table border="0" style="background:#ececec" cellspacing="5">
<tr align="left"><td>Name</td><td><input type="text" size="30" name="name"></td></tr>
<tr align="left"><td>Email address</td><td><input type="text" size="30" name="email"></td></tr>
<tr align="left"><td valign="top">Comments</td><td><textarea name="message" rows="6" cols="30"></textarea></td></tr>
<tr align="left"><td>&nbsp;</td><td><input type="submit" value="Send" name='submit'><font face="arial" size="1">&nbsp;&nbsp;<a href="http://www.qservers.net">Qservers.net</a> by Netbuilder Ltd.</font></td></tr>
</table>
</form>

 
                </div>

            </div

            </div>
        </div> <!--content-wraper end-->
 
    
       
    </div>
 </div>

   
<?php require("includes/footer.php"); ?> 