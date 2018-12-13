<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
        <h4 class="page-head-line">Add New Department</h4>
       
       <div style="opacity: .5; pointer-events: none;">
   <h3 style='color:red;'>All departments have been entered, but if you still need to enter more, contact the engineer on 07065907948 or email him on itaforfrancis@gmail.com</h3>
   
        
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
  
$sel_fa=mysqli_query($connection,"SELECT * FROM faculties"); 
 $rowCount=$sel_fa->num_rows;
 ?> 
 <?php
    if(isset($_POST['addept'])){
   
   
   $dept=htmlspecialchars($_POST['dept']);
   $facultyid=htmlspecialchars($_POST['faculty']);
  
   $sel_dept=mysqli_query($connection,"SELECT * FROM depts WHERE name='$dept'");
   $norow=mysqli_num_rows($sel_dept);
   if($norow >=1) {
     $failure = "DEPT ALREADY EXIST";
   } else{
   
   $query=mysqli_query($connection,"INSERT INTO depts(id,name,faculty_id) VALUES('','$dept','$facultyid')");
   if($query) {
     $success = "Dept added successfully";
   } else{
      $failure =  "dept insertion failed"; 
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
         <form id="contact-form" method="post" action="addDept.php" role="form">
             <div class="controls">
             
              <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Class</label>
                    <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" >
 <option value="">Select Department</option>
    <?php
       if($rowCount > 0){
  while($row=$sel_fa->fetch_assoc()){ 
   echo '<option value= "'.$row['id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">class not found </option>';
   }
 ?>   
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
             <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Department</label>
                     <input id="dept" type="text" name="dept" class="form-control" placeholder="Please enter dept" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="addept" class="btn btn-success btn-send" value="ADD DEPT">
            </div>
        </div>
   </div>
</form>
   
          
  </div>
  </div> 
  </div>
 <?php require("includes/footer.php"); ?>