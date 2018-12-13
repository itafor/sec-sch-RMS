<?php require_once("includes/connection.php");?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">CONTACT US</div>  
    
    <div class="container"> 
    <h4 class="page-head-line">Phone and Address</h4>
    <strong>PHONE</strong></br>
    +2348184752559, +2348101197161</br>
    <strong>ADDRESS</strong></br>
    KM2, Oru/Ijebu-Igbo Road, Oru-Ijebu, Ogun State
             <h4 class="page-head-line">Have a question, inquiry, or feedback? Just jot it down below and we'll get back to you as soon as possible </h4> 
                          <br/>          
                       <?php
                       global $success;
        include('Mail.php'); // includes the PEAR Mail class, already on your server.
        $username = 'admin@depotterhealthtech.sch.ng'; // your email address
        $password = 'depotter/tech/001'; // your email address password               
    if(isset($_POST['send'])){
    $msg='FIRST NAME: ' .htmlspecialchars($_POST['firstname'] )."\n"
         .'LAST NAME: ' .htmlspecialchars($_POST['lastname'] )."\n"
          .'EMAIL:'     .htmlspecialchars($_POST['email'] )."\n"
         .'PHONE:'      .htmlspecialchars($_POST['phone']) ."\n" 
        .'MESSSAGE:'." " .htmlspecialchars($_POST['message']);
         $email=htmlspecialchars($_POST['email']);
         $title=htmlspecialchars($_POST['subject']);
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $erro = "Invalid email format"; 
} else{
if(!empty($msg) && !empty($email) && !empty( $title) && !empty( $_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])){

        $from = $email;
        $to="admin@depotterhealthtech.sch.ng";
        $body=$msg; 
        $subject=$title;

        
        
$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($to, $headers, $body,$subject); // sending the email

if (PEAR::isError($mail)){
$erro = "<p>" . $mail->getMessage() . "</p>";
}
else {
$success = "<p>Your message has been sent successfully,Thank you for contacting De Potter College,<br/> you will receive a reply shortly! Please don't resend</p>";
// header("Location: http://www.example.com/"); // you can redirect page on successful submission.
}
                
          
     }else{
$erro = "Please fill all required fields"."<br/>";
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
         <form id="contact-form" method="post" action="contact.php" role="form">
<div class="messages"></div>

    <div class="controls">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                   SUBJECT:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="subject" class="form-control" placeholder="Please enter the title of your message *"  data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   FIRST NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    LAST NAME:<span style="color:red">*</span>
                    <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    EMAIL:<span style="color:red">*</span>
                    <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    PHONE NUMBER:<span style="color:red">*</span>
                    <input id="form_phone" type="text" name="phone" class="form-control" required="required"  placeholder="Please enter your phone">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    MESSAGE:<span style="color:red">*</span>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="send" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong style="color:red;">*</strong> These fields are required.</p>
            </div>
        </div>
    </div>
    
</form>  
  <h4 class="page-head-line">get direction to de-potter college with a map</h4>    
 <div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63364.985414995965!2d3.9586391521380375!3d6.972517958499174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103973ea61414cd5%3A0xab0e1d6b6df9e4b!2sIjebu+Igbo!5e0!3m2!1sen!2sng!4v1524606522101" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
 </div>      
    </div>
 </div>
  
   
<?php require("includes/footer.php"); ?> 