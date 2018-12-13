<?php require_once("includes/connection.php");?>
<?php include("includes/functions.php"); ?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">STUDENT PORTAL / FRESHERS / ACCOUNT</div> 
    <?php 
     

    if(isset($_POST['create']))
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
    $faculty=htmlspecialchars(strip_tags($_POST['faculty'])); 
    $dept=htmlspecialchars(strip_tags($_POST['dept']));
    $course=htmlspecialchars(strip_tags($_POST['course']));
    $level=htmlspecialchars(strip_tags($_POST['level']));
    $matricno=htmlspecialchars(strip_tags($_POST['matricno'])); 
    $password=md5(htmlspecialchars(strip_tags($_POST['password'])));
    $confirm_pass=md5(htmlspecialchars(strip_tags($_POST['confirmpassword'])));  
    $nkname=htmlspecialchars(strip_tags($_POST['nkname'])); 
    $nkphone=htmlspecialchars(strip_tags($_POST['nkphone'])); 
    $nkaddress=htmlspecialchars(strip_tags($_POST['nkaddress']));
    $date=date("Y-m-d h:i:sa");
     
    if( $surname=="" || $middlename=="" || $lastname=="" || $email=="" || $phone=="" || $address=="" || $state=="" 
    || $lga=="" || $gender=="" || $dob=="" || $religion=="" || $maritalStatus=="" || $faculty=="" || $dept=="" ||
    $course=="" || $level=="" || $matricno=="" || $password=="" || $confirm_pass=="" || $nkname=="" || $nkphone=="" || $nkaddress=="" ){
    $failure = "<spand style='color: red;'>" ."please fill out all fields". "</span>";
    }else{
         //check if username has already been taken
         $checkmatricno=mysqli_query($connection,"SELECT * FROM students WHERE matricno='$matricno'");
         if(mysqli_num_rows($checkmatricno) >= 1){
         $failure = "Matric. number already taken";
          }else{
               //check if email has already been taken
         $checkemail=mysqli_query($connection,"SELECT * FROM students WHERE email='$email'");
         if(mysqli_num_rows($checkemail) >= 1){
         $failure = "Email already taken";
          }else{
            //check if phone has already been taken
         $checkphone=mysqli_query($connection,"SELECT * FROM students WHERE phone='$phone'");
         if(mysqli_num_rows($checkphone) >= 1){
         $failure = "Phone number already taken";
          }else{
           
              if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])) 
                {
                $failure = "Your email is not valid.";    
                }else{
                    if($password !=$confirm_pass){
                     $failure = "passwords don't matched."; 
                    }else{
                        $checknextofkingphone=mysqli_query($connection,"SELECT * FROM students WHERE nokphone='$nkphone'");
         if(mysqli_num_rows($checknextofkingphone) >= 1){
         $failure = "Next of king phone already exist";
          }else{
              if(!preg_match('/^[0-9]*$/',$phone)){
                    $failure = "Invalide Phone number ";  
              }else{
                  if(strlen($phone)!=11){
                    $failure = "Phone number must be 11 digits starting with zero digit "; 
                  }else{
                      if(!preg_match('/^[0-9]*$/',$nkphone)){
                    $failure = "next of king Phone number is invalid";  
              }else{
                    if(strlen($nkphone)!=11){
                    $failure = "next of king Phone number must be 11 digits starting with zero digit "; 
                  }else{
             
         
       $register=mysqli_query($connection,"INSERT INTO students(stdId,firstname,middlename,lastname,email,phone,stdaddress,state,lga,gender,dob,religion,maritalstatus,
       faculty,dept,discipline,level,matricno,password,nokname,nokphone,nokaddress,user_status,user_type,regdate)
        VALUES('','$surname','$middlename','$lastname','$email','$phone','$address','$state','$lga','$gender','$dob','$religion','$maritalStatus',
        '$faculty','$dept','$course','$level','$matricno','$password','$nkname','$nkphone','$nkaddress','Inactive','user','$date')");
        if(!$register){
        $failure = " Registration failed ".mysqli_error($connection); 
        }else{
        $success = "you have been register successfully! please contact the school admin to activate your account "; 
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
    <div class="container"> 
      <div class="panel panel-info">
    <div class="panel-heading">Fill the following form carefully to create an account</div>
               <div class="content-wrapper">
       
            <div class="row">
                <div class="col-md-12">
                    
   <form action="studentRegForm.php" method="post" role="form">
<div class="controls">   
<?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
    
    echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>
<div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   SURNAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="surname" class="form-control" placeholder="Please enter your surname *"  data-error="Firstname is required." value="<?php echo isset($_POST['surname']) ? $_POST['surname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   MIDDLE NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="middlename" class="form-control" placeholder="Please enter your middlename *"  data-error="Firstname is required." value="<?php echo isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   LAST NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="lastname" class="form-control" placeholder="Please enter your last name*"  data-error="Firstname is required." value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   EMAIL ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Please enter your email address *"  data-error="Firstname is required." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   PHONE NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="phone" class="form-control" placeholder="Please enter your phone number *"  data-error="Firstname is required." value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   CONTACT ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="address" class="form-control" placeholder="Please enter your residential address *"  data-error="Firstname is required." value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
       <div class="row">
                <div class="col-md-4"> 
        <div class="form-group"> 
            <label for="form_message">STATE</label>
                <select  id="state" name="state"  class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required">
    <option value="">Select State</option>
    <?php 
       

 $query =$connection->query("SELECT * FROM states"); 
 $rowCount=$query->num_rows;
  
   
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['state_id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">state not found </option>';
   }
 ?>
  </select> 
  </div>
   </div>
            <div class="col-md-4"> 
            <div class="form-group">  
             <label for="form_message">LGA</label> 
             <select id="lga"  name="lga" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required" >
             <option value="">Select state first </option>
        </select> 
      </div>
   </div> 
            <div class="col-md-4">
                <div class="form-group">
                   GENDER:<span style="color:red">*</span>
                    <select id="gender"  name="gender" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
                        <option value="">Select Gender </option>
                        <option value="Male">Male </option>
                        <option value="Female">Female</option>
                        </select> 
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-sm-4'>
            <div class="form-group">
            DATE OF BIRTH:<span style="color:red">*</span>
                <div class='input-group input-append date' id='datetimepicker1'>
                    <input type='text' id="dob" name="dob"  class="form-control"  value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : '' ?>" />
                    <span class="input-group-addon add-on">
                    </span>
                </div>
            </div>
       </div>
            <div class="col-md-4">
                <div class="form-group">
                   RELIGION:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="religion" class="form-control" placeholder="Please enter your religion *"  data-error="Firstname is required." value="<?php echo isset($_POST['religion']) ? $_POST['religion'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   MARITAL STATUS:<span style="color:red">*</span>
                    <select id="maritalStatus" name="maritalStatus" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
   <option>Select One</option>
   <option value="married">Married</option>
   <option value="single">Single</option>
   <option value="divorced">Divorced</option>
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   FACULTY:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="faculty" class="form-control" placeholder="Please enter your faculty *"  data-error="Firstname is required." value="<?php echo isset($_POST['faculty']) ? $_POST['faculty'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   DEPARTMENT:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="dept" class="form-control" placeholder="Please enter your department *"  data-error="Firstname is required." value="<?php echo isset($_POST['dept']) ? $_POST['dept'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                 COURSE OF STUDY:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="course" class="form-control" placeholder="Please enter your fCOURSE OF STUDY *"  data-error="Firstname is required." value="<?php echo isset($_POST['course']) ? $_POST['course'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   LEVEL:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="level" class="form-control" placeholder="Please enter your current level *"  data-error="Firstname is required." value="<?php echo isset($_POST['level']) ? $_POST['level'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   MATRIC NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="matricno" class="form-control" placeholder="Please enter your matric. number *"  data-error="Firstname is required." value="<?php echo isset($_POST['matricno']) ? $_POST['matricno'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   PASSWORD:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="password" class="form-control" data-error="Firstname is required." >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   CONFIRM Password:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="confirmpassword" class="form-control">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
             NEXT OF KING FULL NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="nkname" class="form-control" placeholder="Please enter your next of king full name *"  data-error="Firstname is required." value="<?php echo isset($_POST['nkname']) ? $_POST['nkname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                NEXT OF KING PHONE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="nkphone" class="form-control" placeholder="Please enter your next of king phone number *"  data-error="Firstname is required." value="<?php echo isset($_POST['nkphone']) ? $_POST['nkphone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                 NEXT OF KING ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="nkaddress" class="form-control" placeholder="Please enter your next of king address *" value="<?php echo isset($_POST['nkaddress']) ? $_POST['nkaddress'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
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
        </div> <!--content-wraper end-->
 
    
       
    </div>
 </div>




</div>
</div>       
   <script>
  $("#dob").datetimepicker();
</script> 
 
<?php require("includes/footer.php"); ?> 