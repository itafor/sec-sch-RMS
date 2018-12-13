<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
 <h4 class="page-head-line">CHANGE PROFILE PHOTO</h4>
                       <form action="" method="post" enctype="multipart/form-data" name="form1" >
        <p>
          <label for="myfile"></label>
          <input type="file" name="myfile" id="myfile"><br/><br/>
        <p class=\"tab blink\"><input name='save_image' type='submit' value='SAVE' /></p>
        </p>
        
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
            
                   if(empty($taget)){
           echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>please choose a profile picture</span>";
         }else{
            $tmp_file = $_SESSION['temp']; 
            $file_path = $_SESSION['path']; 
            $matricno= $_SESSION['matricno'];    
               
            $dat = mysqli_query($connection,"UPDATE  students set picture = '$file_path' WHERE matricno= '$matricno'") or die("eroor select ");
           echo "<span style='color:blue;font-family:arial;font-size:12pt;text-align:center;'>Your profile was succesfully updated</span> <br/>"; 
      
           header("location: index.php") ;  
           
         }     
         }
    ?>
    </form>                                            

                </div>
        </div>
  <?php require("includes/footer.php"); ?>