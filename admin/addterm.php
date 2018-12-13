<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
     
   <h4 class="page-head-line">Add New Term</h4>                    
       <div style="opacity: .5; pointer-events: none;">
   <h3 style='color:red;'>All Terms have been entered, but if you still need to enter more, contact the engineer on 07065907948 or email him on itaforfrancis@gmail.com</h3>
                            
      <?php 
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_SESSION['username']."' AND rank = 'admin' ");
     if(mysqli_num_rows($check) > 0)
    {
   // echo '<div style="opacity: .5; pointer-events: none">' ; 
    }else{
        echo '<div style="opacity: .5; pointer-events: none;">' ;
   echo "<h3 style='color:red;'>Forbidden Area, Only the admin can access this area</h3>"; 
    }
     
    ?>   
 <?php
  if(isset($_POST['addlevel'])){
   
   
   $dept=htmlspecialchars($_POST['dept']); 
   $level=htmlspecialchars($_POST['addlev']); 
   
   $sel=mysqli_query($connection,"SELECT * FROM level WHERE dept_id='$dept' AND name='$level'");
   $norow=mysqli_num_rows($sel);
   if($norow >=1) {
     $failure =$level." already exist in the selected department";
   } else{
   
   $query=mysqli_query($connection,"INSERT INTO level(id,name,dept_id) VALUES('','$level','$dept')");
   if($query) {
     $success =$level." inserted successfully";
   } else{
       $failure =  "term insertion failed".mysqli_error($connection); 
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
   
<form action="addterm.php" method="post" role="form" >
 <div class="controls">
   
<div class="row">  
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">Class</label>
                <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required="required">
    <option value="">Select class</option>
    <?php 
       
//$connect = mysqli_connect('localhost', 'root', '', 'depotter');
 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
  
   
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">class not found </option>';
   }
 ?>
  </select> 
  </div>
   </div>
   </div> <br/>
   <div class="row">  
        <div class="col-md-6"> 
            <div class="form-group">  
             <label for="form_message">Department</label> 
             <select id="dept"  name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required="required">
             <option value="">Select class first </option>
        </select> 
      </div>
   </div> 
 </div>
   <br/>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Available Terms</label>
                         <select id="level"  name="level" multiple="multiple" disabled="disabled" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:150px;" required="required" >
                            <option value="">Select dept first </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
  </div>  <br/>
 
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">TERM</label>
                      <input type="text" name="addlev" placeholder="Add term" class="form-control" > 
                    <div class="help-block with-errors"></div>
                </div>
            </div>
  </div>  <br/>
  
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                                    <input type="submit" name="addlevel"  value="ADD TERM"  class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </div>  
 </form> 
 </div> 
 </div>
   
   </div>       
 <?php require("includes/footer.php"); ?>