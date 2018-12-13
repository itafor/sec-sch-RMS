<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
 <h4 class="page-head-line">FOOTER Settings</h4> 
 
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
            $year=htmlentities($_POST['session']);
            $copywrite="Copyright @ ";
              
            
                   if(empty($taget)){
           echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>please choose a profile picture</span>";
         }elseif($schname=="" || $year=="" || $copywrite==""){
          echo "<span style='color:red;font-family:arial;font-size:14pt;text-align:center;'>please fill all fields</span>";              
         }else{
            $tmp_file = $_SESSION['temp']; 
            $file_path = $_SESSION['path']; 
            $username= $_SESSION['username'];    
               
            $save = mysqli_query($connection,"UPDATE  footersetting SET schname='$schname',year='$year',copywright='$copywrite',logo='$file_path'");
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
                   School Name:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="schname" class="form-control" placeholder="School name" required  data-error="Firstname is required." value="<?php echo isset($_POST['schname']) ? $_POST['schname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
           <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                 Copyright @ - add  year:<span style="color:red">*</span>
                   
  <?php
   $already_selected_value = '- Select current Session-';
   $earliest_year = 1950;

print '<select name="session" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required>';
  
foreach (range(date('Y'), $earliest_year) as $x) {
    print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
}
print '</select>';
?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div><br/>
 
          <label for="myfile">School Logo</label>
          <input type="file" name="myfile" id="myfile" required ><br/><br/>
        <p class=\"tab blink\"><input name='save_image' type='submit' value='SAVE SETTINGS' /></p>
         </div>
      </form>  
              

              <?php 
              
    $select_profile="SELECT * FROM footersetting";
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