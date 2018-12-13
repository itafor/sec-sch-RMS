<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Add COURSE Form</h4>                    
    

<form action="removeCourse.php" method="post" role="form" >
 <div class="controls">
   
<div class="row">  
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">DEPARTMENT</label>
                <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required="required">
    <option value="">Select dept</option>
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
             <label for="form_message">Programme</label> 
             <select id="dept"  name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required="required" >
             <option value="">Select dept first </option>
        </select> 
      </div>
   </div> 
 </div>
   <br/>
 
 
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">LEVEL</label>
                         <select id="level"  name="level" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required="required" >
                            <option value="">Select programme first </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
  </div>  <br/>
  <div class="row">          
              <div class="col-md-6"> 
                    <div class="form-group">  
                         <label for="form_message">SEMESTER</label> 
                             <select id="semester"  name="semester" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" required="required">
                    <option value="">Select level first </option>
                          </select> 
                         </div>
                </div>
        </div>
           <br/> 

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                                    <input type="submit" name="addcourse"  value="ADD COURSE"  class="btn btn-success btn-send">
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