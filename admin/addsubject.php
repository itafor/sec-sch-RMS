<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">Add New Subject(s)</h4>
   
                                      
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
  if(isset($_POST['submit'])){
   
   
   $level=htmlspecialchars($_POST['level']); 
   $semester=htmlspecialchars($_POST['addsemester']); 
   
   $sel=mysqli_query($connection,"SELECT * FROM semester WHERE level_id='$level' AND name='$semester'");
   $norow=mysqli_num_rows($sel);
   if($norow >=1) {
     $failure = $semester." already exist";
   } else{
   
   $query=mysqli_query($connection,"INSERT INTO semester(id,name,level_id) VALUES('','$semester','$level')");
   if($query) {
     $success =$semester." inserted successfully";
   } else{
       $failure =  "course insertion failed".mysqli_error($connection); 
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
   
<form action="addsubject.php" method="post" role="form" >
 <div class="controls">
   
<div class="row">  
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">CLASS</label>
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
     echo '<option value="">faculty not found </option>';
   }
 ?>
  </select> 
  </div>
   </div>
   </div> <br/>
   <div class="row">  
        <div class="col-md-6"> 
            <div class="form-group">  
             <label for="form_message">DEPARTMENT</label> 
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
                    <label for="form_message">TERM</label>
                         <select id="level"  name="level" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required="required" >
                            <option value="">Select dept first </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
  </div>  <br/>
  <div class="row">          
              <div class="col-md-6"> 
                    <div class="form-group">  
                         <label for="form_message">Available Subject</label> 
                             <select id="semester"  name="semester" multiple="multiple" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" disabled="disabled" style=" height:300px;" required="required">
                    <option value="">Select term first </option>
                          </select> 
                         </div>
                </div>
        </div>
           <br/> 
        <div class="row">          
              <div class="col-md-8"> 
                    <div class="form-group">  
                         <label for="form_message">Add Subjects</label> 
                  <input id="addsemester" type="text" name="addsemester" class="form-control" placeholder="Please enter subject " required="required" data-error="Valid email is required.">              
                         </div>
                </div>
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <input type="submit" name="submit"  value="ADD SUBJECTS"  class="btn btn-success btn-send">
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