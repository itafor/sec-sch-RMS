<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
  <h4 class="page-head-line">Promote Students to a new class</h4>      
  <label style="font-size:20px; color: "  class='btn btn-warning'>WARNING! Always take this action at the beginning of a new session (year), prefferably first term </label>
   <br>  <br>  <br>
 <?php
  if(isset($_POST['submit'])){
   $oldclass=htmlspecialchars($_POST['oldclass']);
   $newclass=htmlspecialchars($_POST['newclass']);
   
   if(empty($oldclass)){
      $failure = "Please enter old class";
   }else if(empty($newclass)){
    $failure = "Please enter new class";
}else{
    
    $query=mysqli_query($connection,"UPDATE  students SET class='$newclass' WHERE class='$oldclass'");
    
    if($query){
      $success = "Classes changed successfully";
    }
     
  }
}
  ?>

 <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
    
    echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>
  
<form action="" method="post" class="regform" role="form" >
 

 <div class="controls"> 
 
        <div class="row">
               
            <div class="col-md-6">
                <div class="form-group">
                OLD  CLASS:<span style="color:red">*</span>
                    <select id="class" name="oldclass" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
                    <option value="0">Select One</option>
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
            </div>
                <br><br><br>  
            <div class="row">
              
            <div class="col-md-6">
                <div class="form-group">
                   NEW CLASS:<span style="color:red">*</span>
                    <select id="class" name="newclass" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
                    <option value="0">Select One</option>
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
            </div>
              <br><br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="Promote" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div>
        
 <?php require("includes/footer.php"); ?>