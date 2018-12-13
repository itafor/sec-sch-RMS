<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>  
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/adminHead.php"); ?> 
 <?php include("includes/adminMenu.php"); ?> 

   <h4 class="page-head-line">CHECK RESULT FORM</h4>                    
              
     
   <?php     
 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
 ?>  

     
<form action="position.php" method="post" class="regform" role="form" >
 

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
            <label for="form_message">CLASS</label>
            <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
            <option value="">Select class</option>
            <?php  
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
        <select id="dept"  name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
       <option value="">Select dept first </option>
       </select> 
      </div>
   </div> 
 </div>
   <br/>
 
 
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">Term</label>
                         <select id="level"  name="level" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
                            <option value="">Select dept first </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
  </div>  <br/>
  
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="CONTINUE" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div> </div>
        
 <?php require("includes/footer.php"); ?>