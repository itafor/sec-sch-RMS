<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>  
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/adminHead.php"); ?> 
 <?php include("includes/adminMenu.php"); ?> 

   <h4 class="page-head-line">Drop Registered subjects by Dept </h4>                    
              
     
 <h3>Fill the form below carefully to delete registered subjects by department</h3>
<?php
if(isset($_POST['submit'])){
   $year=htmlspecialchars($_POST['session']);
   $dept=htmlspecialchars($_POST['dept']);
   $term=htmlspecialchars($_POST['term']);


if(empty($year)){
  echo "<p style='color:red; font-size:20px;'>"."Pls enter session"."</p>";
}elseif(empty($dept)) {
  echo "<p style='color:red; font-size:20px;'>"."Pls enter Departmentn"."</p>";
}elseif (empty($term)) {
  echo "<p style='color:red; font-size:20px;'>"."Pls enter Term"."</p>";
}else{

  $result=mysqli_query($connection,"SELECT * FROM studentregister where year='$year' AND dept='$dept' AND term='$term' ");
    if(mysqli_num_rows($result) <=0 ){
     echo "<p style='color:red; font-size:20px;'>"."student not found"."</p>";
    }else {
      while ($data = mysqli_fetch_array($result)) {
        $ids = $data['id'];
       
          $deleteREgisteredStd=mysqli_query($connection,"DELETE FROM studentregister where id='".$ids."' ");

          if ($deleteREgisteredStd) {
           // header("location: deleteRegSubjectsByDept.php");
      $msg = "You have successfully dropped registered subjects for all students in ".$dept." department"." Year: ".$year." Term: ".$term;
          }else{
            echo "Operation failed";
          }
        
      }
    }
}

  }
   echo "<p style='color:green; font-size:30px; background:black;'>".$msg."</p>"; 
?>
      
<form action="deleteRegSubjectsByDept.php" method="post" class="regform" role="form" >
 <div class="controls">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   CURRENT SESSION (YEAR):<span style="color:red">*</span>
                   
  <?php
   $already_selected_value = '- Select current Session-';
   $earliest_year = 1950;

print '<select name="session" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">';
echo ' <option  value="0">- Select current Session-</option>';  
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
              Enter Student  Department:<span style="color:red">*</span>
                    <select id="dept" name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
   <option value="0">- Select Dept-</option>
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
        <option value="0">- Select Term-</option>
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
                    <input type="submit" name="submit"  value="Drop Registered Subjects" style=" height:50px;" class="btn btn-success btn-send" onclick="return confirm('Do you reaally want to delete all registered subjects in the selected department?All scores associated with these subjects will be deleted')">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div> </div>
        
 <?php require("includes/footer.php"); ?>