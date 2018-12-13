<?php ob_start(); ?> 
<?php require_once("includes/connection.php");?>
<?php include("includes/functions.php"); ?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">STUDENT PORTAL / FRESHERS / ACCOUNT</div> 
    <?php 
   // include('Mail.php'); // includes the PEAR Mail class, al

//$username = 'admin@depotterhealthtech.sch.ng'; // your email address
//$password = 'depotter/tech/001'; // your email address password
     global $attestation;
    if(isset($_POST['apply']))
    {
        
    //get form data
    $surname=htmlspecialchars(strip_tags($_POST['surname']));
    $middlename=htmlspecialchars(strip_tags($_POST['middlename'])); 
    $lastname=htmlspecialchars(strip_tags($_POST['lastname'])); 
    $email=htmlspecialchars(strip_tags($_POST['email']));
    $phone=htmlspecialchars(strip_tags($_POST['phone']));
    $address=htmlspecialchars(strip_tags($_POST['address']));
    $state=htmlspecialchars(strip_tags($_POST['state'])); 
    $lga=htmlspecialchars(strip_tags($_POST['lga'])); 
    $gender=htmlspecialchars(strip_tags($_POST['gender'])); 
    $dob=htmlspecialchars(strip_tags($_POST['dob']));
    $religion=htmlspecialchars(strip_tags($_POST['religion']));
    $maritalStatus=htmlspecialchars(strip_tags($_POST['maritalStatus'])); 
    $fullname=htmlspecialchars(strip_tags($_POST['fullname'])); 
    $relationship=htmlspecialchars(strip_tags($_POST['relationship']));
    $sponsoraddress=htmlspecialchars(strip_tags($_POST['sponsoraddress']));
    $sponsorphone=htmlspecialchars(strip_tags($_POST['sponsorphone']));
    $sponsoremail=htmlspecialchars(strip_tags($_POST['sponsoremail'])); 
    $sponsoroccupation=htmlspecialchars(strip_tags($_POST['sponsoroccupation']));
    $hobbies=htmlspecialchars(strip_tags($_POST['hobbies']));  
    $disability=htmlspecialchars(strip_tags($_POST['disability'])); 
    $language=htmlspecialchars(strip_tags($_POST['language'])); 
    $nokname=htmlspecialchars(strip_tags($_POST['nokname']));
    $nokaddress=htmlspecialchars(strip_tags($_POST['nokaddress'])); 
    $nokphone=htmlspecialchars(strip_tags($_POST['nokphone'])); 
    $eduname=htmlspecialchars(strip_tags($_POST['eduname'])); 
    $edudate=htmlspecialchars(strip_tags($_POST['edudate'])); 
    $certificate=htmlspecialchars(strip_tags($_POST['certificate'])); 
    $firstchoice=htmlspecialchars(strip_tags($_POST['firstchoice'])); 
    $secondchoice=htmlspecialchars(strip_tags($_POST['secondchoice'])); 
    $attestation=$_POST['attestation'];
    $paymentcode="depotter".rand(0000000,9999999)."".$surname; 
    $date=date("Y-m-d h:i:sa");
    
     $taget = basename($_FILES['myfile']['name']);
             $tmp_file =  $_FILES['myfile']['tmp_name'];
            $upload_dir = 'images/';
            $file_path = $upload_dir . $taget;
            $result = move_uploaded_file($tmp_file,$file_path);
            $_SESSION['temp'] = $tmp_file ;
            $_SESSION['path'] = $file_path ;  
    
    if(empty($attestation)){
     $failure = "<spand style=''>" ."Accept that you have read the attestation". "</span>"; 
    }elseif( $surname=="" || $middlename=="" || $lastname=="" || $email=="" || $phone=="" || $address=="" || $state=="" 
    || $lga=="" || $gender=="" || $dob=="" || $religion=="" || $maritalStatus=="" || $fullname=="" || $relationship=="" ||
    $sponsoraddress=="" || $sponsorphone=="" || $hobbies=="" || $disability=="" || $language=="" || $nokname=="" || $nokaddress=="" 
    || $nokphone==""|| $eduname=="" || $edudate=="" || $certificate=="" || $firstchoice=="" || $secondchoice=="" || $paymentcode=="" ){
    $failure = "<spand style='color: red;'>" ."please fill out all fields". "</span>";
    }else{
         //check if username has already been taken
         $checkpaycode=mysqli_query($connection,"SELECT * FROM application WHERE code='$paymentcode'");
         if(mysqli_num_rows($checkpaycode) >= 1){
         $failure = "Payment ID already taken";
          }else{
               //check if phone has already been taken
         $checkphone=mysqli_query($connection,"SELECT * FROM application WHERE phone='$phone'");
         if(mysqli_num_rows($checkphone) >= 1){
         $failure = "Phone number already taken";
          }else{
               //check if email has already been taken
         $checkemail=mysqli_query($connection,"SELECT * FROM application WHERE email='$email'");
         if(mysqli_num_rows($checkemail) >= 1){
         $failure = "Email already taken";
          }else{
            //check if phone has already been taken
         $checksponphone=mysqli_query($connection,"SELECT * FROM application WHERE sponsorphone='$sponsorphone'");
         if(mysqli_num_rows($checkphone) >= 1){
         $failure = "Sponsor phone number already taken";
          }else{
           
              if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                $failure = "Your email is not valid.";    
                }else{
                     if(!preg_match('/^[0-9]*$/',$sponsorphone)){
                    $failure = "sponsor phone number is invalide ";  
              }else{
                  if(strlen($sponsorphone)!=11){
                    $failure = "Phone number must be 11 digits "; 
                  }else{
                        $checknextofkingphone=mysqli_query($connection,"SELECT * FROM application WHERE nokphone='$nokphone'");
         if(mysqli_num_rows($checknextofkingphone) >= 1){
         $failure = "Next of king phone already exist";
          }else{
              if(!preg_match('/^[0-9]*$/',$phone)){
                    $failure = "Invalide Phone number ";  
              }else{
                  if(strlen($phone)!=11){
                    $failure = "Your phone number must be 11 digits starting with zero digit "; 
                  }else{
                      if(!preg_match('/^[0-9]*$/',$nokphone)){
                    $failure = "next of king Phone number is invalid";  
              }else{
                    if(strlen($nokphone)!=11){
                    $failure = "next of king Phone number must be 11 digits starting with zero digit "; 
                  }else{
                       if(empty($taget)){
           echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>please choose a profile picture</span>";
         }else{
             
             
                      
            $tmp_file = $_SESSION['temp']; 
            $file_path = $_SESSION['path']; 
            //$phone= $_SESSION['matricno']; 
         
       $apply=mysqli_query($connection, "INSERT INTO application(surname,middlename,lastname,email,phone,address,state,lga,gender,dob,religion,maritalstatus,
       fullname,relationship,sponsoraddress,sponsorphone,sponsoremail,sponsoroccupation,hobbies,disability,language,nokname,nokaddress,nokphone,
       eduname,edudate,certificate,firstchoice,secondchoice,code,date,picture,bankslipno,totalatm,bankname,transdate,paymentitem,transid,processedate)
        VALUES('$surname','$middlename','$lastname','$email','$phone','$address','$state','$lga','$gender','$dob','$religion','$maritalStatus',
        '$fullname','$relationship','$sponsoraddress','$sponsorphone','$sponsoremail','$sponsoroccupation','$hobbies','$disability','$language',
        '$nokname','$nokaddress','$nokphone','$eduname','$edudate','$certificate','$firstchoice','$secondchoice','$paymentcode',now(),'$file_path','n','n','n','n','n','n',now()) ");

;
        if(!$apply){
        $failure = " Application failed ".mysqli_error($connection); 
        }else{
       // $success = "Your application was sent successfully! Print your payment slipe and proceed to any of the //listed bank to make payment"."<br/>"; 
              
          for($i =0; $i< count($_FILES['credentials']['name']); $i++){
                              $filetmp =  $_FILES['credentials']['tmp_name'][$i]; 
                               $filename =  $_FILES['credentials']['name'][$i];
                                 $filetype =  $_FILES['credentials']['type'][$i]; 
                                 $filepath= "uploads/".$filename;
                             move_uploaded_file($filetmp,$filepath); 
                              
                              $uploadfile=mysqli_query($connection,"INSERT INTO credentials (file_name,file_tmp,file_type,phone) VALUES('".'../'.$filepath."','$filetmp','$filetype','$phone')");     
                           if(!$uploadfile){
                             echo "file upload not succesfull".mysqli_error($connection);
                           }else{
                            
                            
         $msg='SURNAME NAME: ' .htmlspecialchars($_POST['surname'] )."\n"
         .'LAST NAME: ' .htmlspecialchars($_POST['middlename'] )."\n"
          .'EMAIL:'     .htmlspecialchars($_POST['email'] )."\n"
         .'PHONE:'      .htmlspecialchars($_POST['phone']) ."\n" 
        .'MESSAGE:'." The user with the above details just applied to depotter College. ";
        $title= " NEW APPLICANT FROM DEPOTTER WEBSITE";
        
        $to="admin@depotterhealthtech.sch.ng";
        $from=$email;
        $body=$msg; 
        $subject=$title;
        
               
$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($to, $headers, $body,$subject); // sending the email

if (PEAR::isError($mail)){
$failure = "<p>" . $mail->getMessage() . "</p>";
}
else {
 $success = "Your application was sent successfully! Print your payment slip and proceed to any of the listed bank to make payment"."<br/>";  
}
                           }
                          }
         ?>
       <a href="paymentslipform.php"><h2>Print Payment Slip</h2></a>
   <?php     
        }
            
           }
             }
         }
       }                   
    }
   } 
}
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
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
    
    echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>   
 </div>
</div>       
   <script>
  $("#dob").datetimepicker();
</script> 
 
<?php require("includes/footer.php"); ?> 