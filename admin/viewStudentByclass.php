<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
        <h4 class="page-head-line">VIEW STUDENTS BY CLASS</h4>
       
      
        
          
   <?php
  
$sel_fa=mysqli_query($connection,"SELECT * FROM faculties"); 
 $rowCount=$sel_fa->num_rows;
 ?> 

     
  <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?> 
         <form id="contact-form" method="post" action="viewStudentsbyclassOP.php" role="form">
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
   echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
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
            
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="CONTINUE">
            </div>
        </div>
   </div>
</form>
   
          
  </div>
  </div> 
  </div>
 <?php require("includes/footer.php"); ?>