<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>  
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/adminHead.php"); ?> 
 <?php include("includes/adminMenu.php"); ?> 

   <h4 class="page-head-line">Enter students scores </h4>                    
              
     
 <h3>Fill the form below carefully to enter students scores</h3>

     
<form action="input_scores_op_pry.php" method="post" class="regform" role="form" >
 

 <div class="controls">
 <div class="row">
                <div class="col-md-6"> 
        <div class="form-group"> 
            
          <label for="form_message">Enter Student Registration number</label>
         <input type="text" name="regno"  class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12">
  </div>
   </div>
   </div>
   <br>
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
        <option value="0">- Select class-</option>
   <option value="BASIC1">BASIC1</option>
   <option value="BASIC2">BASIC2</option>
   <option value="BASIC3">BASIC3</option>  
   <option value="BASIC4">BASIC4</option>
   <option value="BASIC5">BASIC5</option>
   <option value="BASIC6">BASIC6</option> 
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
   <option>- Select Dept-</option>
    <option value="Primary">Primary Dept</option>
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
        <option >- Select Term-</option>
        <option value="First Term">First Term</option>
        <option value="Second Term">Second Term</option>
        <option value="Third Term">Third Term</option>
        </select>
  </div>
   </div>
   </div>
     <br/>
     <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="Get Started" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div> </div>
        
 <?php require("includes/footer.php"); ?>