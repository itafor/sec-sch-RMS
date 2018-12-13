<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">UPLOAD STUDENTS' RESULT</h4>                    
              
     
   <?php     
 $query =$connection->query("SELECT * FROM sss_sci_subj"); 
 $rowCount=$query->num_rows;
 ?>  

     
<form action="updatecourse1.php" method="post" class="regform" role="form" >
 

 <div class="controls">
    
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   CURRENT SESSION (YEAR):<span style="color:red">*</span>
                   
  <?php
   $already_selected_value = '- Select current Session-';
   $earliest_year = 1950;

print '<select name="session" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">';
echo ' <option  selected="selected">- Select current Session-</option>';  
foreach (range(date('Y'), $earliest_year) as $x) {
    print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
}
print '</select>';
?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div><br/>
        <div class="row">  
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">Class</label>
        <select name="class" id="" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
        <option value="JSS1">JSS1</option>
        <option value="JSS2">JSS2</option>
        <option value="JSS3">JSS3</option>
        <option value="SS1">SS1</option>
        <option value="SS2">SS2</option>
        <option value="SS3">SS3</option>
        </select>
  </div>
   </div>
   </div>
     <br/>
   
     <div class="row">  
     <div class="col-md-6">
                <div class="form-group">
                   DEPARTMENT:<span style="color:red">*</span>
                    <select id="dept" name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
   <option>Select One</option>
    <option value="Science">Science Dept</option>
   <option value="Commercial">Commercial Dept</option>
   <option value="Arts">Arts Dept</option>
   <option value="JSS">JSS Dept</option>
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        
   </div>
     <br/>
 
 
     <div class="row">  
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">Term</label>
        <select name="term" id="" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
        <option value="First Term">First Term</option>
        <option value="Second Term">Second Term</option>
        <option value="Third Term">Third Term</option>
        </select>
  </div>
   </div>
   </div>
     <br/>
  <div class="row">
                <div class="col-md-4"> 
        <div class="form-group"> 
            <label for="form_message">Subjects</label>
         <select  id="subject" name="subject" multiple="multiple" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:250px;">    <?php 
       

 $query =$connection->query("SELECT * FROM sss_sci_subj"); 
 $rowCount=$query->num_rows;
  
   
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">subjects not found </option>';
   }
 ?>
  </select> 
  </div>
   </div>
   </div>
   <br>
                <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="CONTINUE" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div>
        
 <?php require("includes/footer.php"); ?>