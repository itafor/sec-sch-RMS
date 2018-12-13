<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
 <h4 class="page-head-line">Header Settings</h4> 
 
  <?php
       $msg="";
       if(isset($_POST['save_image']))
         {
             $taget = basename($_FILES['myfile']['name']);
             $tmp_file =  $_FILES['myfile']['tmp_name'];
            $upload_dir = 'images/';
            $file_path = $upload_dir . $taget;
            $result = move_uploaded_file($tmp_file,$file_path);
            $_SESSION['temp'] = $tmp_file ;
            $_SESSION['path'] = $file_path ;
            $schname=htmlentities($_POST['schname']);
            $schaddress=htmlentities($_POST['schaddress']);
            $phone=htmlentities($_POST['phone']);
            $email=htmlentities($_POST['email']);  
            $website=htmlentities($_POST['website']);
              
            
                   if(empty($taget)){
           echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>please choose a profile picture</span>";
         }elseif($schname=="" || $schaddress=="" || $phone=="" || $email=="" || $website==""){
          echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>please fill all fields</span>";              
         }else{
            $tmp_file = $_SESSION['temp']; 
            $file_path = $_SESSION['path']; 
            $username= $_SESSION['username'];    
               
            $save = mysqli_query($connection,"UPDATE  primary_setting SET schname='$schname',schaddress='$schaddress',phone='$phone',email='$email',website='$website',logo='$file_path'");
             if($save){
           echo "<span style='color:blue;font-family:arial;font-size:12pt;text-align:center;'>Settings saved succesfully </span> <br/>"; 
             }else{
            echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>Problem trying to save settings, try again</span>".mysqli_error($connection);  
             }
          // header("location: index.php") ;  
           
         }     
         }
    ?>
                                      
 <form action="" method="post" enctype="multipart/form-data" name="form1" >
          <div class="controls">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
               Primary    School Name:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="schname" class="form-control" placeholder="School name" required  data-error="Firstname is required." value="<?php echo isset($_POST['schname']) ? $_POST['schname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                 Primary  School Address:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="schaddress" class="form-control" placeholder="School address" required  data-error="Firstname is required." value="<?php echo isset($_POST['schaddress']) ? $_POST['schaddress'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Phone Number:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="phone" class="form-control" placeholder="phone number" required  data-error="Firstname is required." value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   Email Address:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Email" required  data-error="Firstname is required." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
           <div class="row">
            <div class="col-md-6">
                <div class="form-group">
               Primary  Website URL:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="website" class="form-control" placeholder="Website" required  data-error="Firstname is required." value="<?php echo isset($_POST['website']) ? $_POST['website'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
          <label for="myfile">Primary School Logo</label>
          <input type="file" name="myfile" id="myfile" required ><br/><br/>
        <p class=\"tab blink\"><input name='save_image' type='submit' value='SAVE SETTINGS' /></p>
         </div>
      </form>  
              

              <?php 
    
    $select_profile="SELECT * FROM primary_setting";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['logo']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\" width='150' height='150' >";
 }
?>                                                                     

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>