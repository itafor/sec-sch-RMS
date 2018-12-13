<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
<?php 
     

    if(isset($_POST['create']))
    {
        
    //get form data
    $surname=htmlspecialchars(strip_tags($_POST['surname']));
    $middlename=htmlspecialchars(strip_tags($_POST['middlename'])); 
    $lastname=htmlspecialchars(strip_tags($_POST['lastname'])); 
    $address=htmlspecialchars(strip_tags($_POST['address'])); 
    $gender=htmlspecialchars(strip_tags($_POST['gender'])); 
    $class=htmlspecialchars(strip_tags($_POST['class']));    
    $dept=htmlspecialchars(strip_tags($_POST['dept']));        
    $password=htmlspecialchars(strip_tags($_POST['password']));
    $confirm_pass=htmlspecialchars(strip_tags($_POST['confirmpassword']));
    $regno=htmlentities($_POST['regno']);      
    // $regno="GWSC/".rand(0000,9999)."/".$surname; 
    $date=date("Y-m-d h:i:sa");


     $taget = basename($_FILES['myfile']['name']);
             $tmp_file =  $_FILES['myfile']['tmp_name'];
            $upload_dir = '../students/images/';
            $file_path = $upload_dir . $taget;
            $result = move_uploaded_file($tmp_file,$file_path);
            $_SESSION['temp'] = $tmp_file ;
            $_SESSION['path'] = $file_path ;

     
    if( $surname=="" || $lastname=="" || $address==""
    || $gender=="" || $class=="" || $dept=="" ||
    $address=="" || $password=="" || $confirm_pass=="" || $regno==""){
    $failure = "<spand style='color: red;'>" ."please fill out all fields". "</span>";
    }else{
        if($password!=$confirm_pass){
            $failure = "<spand style='color: red;'>" ."Password don't matched". "</span>";
        }else{
         //check if username has already been taken
         $checkmatricno=mysqli_query($connection,"SELECT * FROM students WHERE matricno='$regno'");  
         if(mysqli_num_rows($checkmatricno) >= 1){
         $failure = "Regno. number already taken";
          }else{ 
       $register=mysqli_query($connection,"INSERT INTO students(stdId,firstname,middlename,lastname,stdaddress,gender,class,
       dept,matricno,password,user_status,user_type,regdate,picture)
        VALUES('','$surname','$middlename','$lastname','$address','$gender','$class',
        '$dept','$regno','$password','Inactive','user','$date','$file_path')");
        if(!$register){
        $failure = " Registration failed ".mysqli_error($connection); 
        }else{
        $success = "you have successfully added a new student!"; 
            }
           }
             }
         }
       }
?>     
    <div class="container"> 
           <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Fill the following form carefully to create an account</h4>
                    
   <form action="registerstudents.php" method="post" enctype="multipart/form-data" role="form">
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
                   PASSWORD:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="password" class="form-control" data-error="Firstname is required." >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   CONFIRM Password:<span style="color:red">*</span>
                    <input id="form_name" type="password" name="confirmpassword" class="form-control">
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
                   CLASS:<span style="color:red">*</span>
                    <select id="class" name="class" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
   <option value="0">Select One</option>
    <option value="BASIC1">BASIC1</option>
   <option value="BASIC2">BASIC2</option>
   <option value="BASIC3">BASIC3</option>  
   <option value="BASIC4">BASIC4</option>
   <option value="BASIC5">BASIC5</option>
   <option value="BASIC6">BASIC6</option> 
   <option value="JSS1">JSS1</option>
   <option value="JSS2">JSS2</option>
   <option value="JSS3">JSS3</option>
   <option value="SS1">SS1</option>
   <option value="SS2">SS2</option>
   <option value="SS3">SS3</option>
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
       
         <div class="col-md-4">
                <div class="form-group">
                   DEPARTMENT:<span style="color:red">*</span>
                    <select id="dept" name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
   <option value="0">Select One</option>
    <option value="Science">Science Dept</option>
   <option value="Commercial">Commercial Dept</option>
   <option value="Arts">Arts Dept</option>
   <option value="JSS">JSS Dept</option>
    <option value="Primary">Primary Dept</option> 
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        
                            
            <div class="col-md-4">
                <div class="form-group">
                   GENDER:<span style="color:red">*</span>
                    <select id="gender"  name="gender" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
                        <option value="0">Select Gender </option>
                        <option value="Male">Male </option>
                        <option value="Female">Female</option>
                        </select> 
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

        </br>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                Reg. Number:<span style="color:red">*</span>  
                    <input id="form_name" type="text" name="regno"  class="form-control" value="<?php echo isset($_POST['regno']) ? $_POST['regno'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div> 

            <div class="col-md-4">
                <div class="form-group">
                Upload picture:<span style="color:red">*</span>  
                   <input type="file" name="myfile" id="myfile">
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

            </div

            </div>
        </div> <!--content-wraper end-->
 
                                 
       
   <script>
  $("#dob").datetimepicker();
</script> 
 <?php require("includes/footer.php"); ?>