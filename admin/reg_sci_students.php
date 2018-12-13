<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">Science Subjects REGISTRATION FORM</h4>
    <h2> <a href="reg_new_sci_students.php">Register a student (new)</a></h2> </br></br>    
 <?php
  if(isset($_POST['submit'])){

    if(empty($_POST['subject'])){
        echo "Please select subject";
    }else{
    
    $sel_sci=mysqli_query($connection,"SELECT * FROM students where dept ='Science' ");
    $row=mysqli_fetch_array($sel_sci);
        $reg_no=$row['matricno'];
        $class=$row['class'];
        $fullname=$row['firstname'].'  '.$row['middlename'].'  '.$row['lastname'];
    
   $year=htmlspecialchars($_POST['session']);
   $term=htmlspecialchars($_POST['term']);
   $dept=htmlspecialchars($_POST['dept']);
   $subject=$_POST['subject'];
   $regdate= date("Y-m-d h:i:sa"); 

   if(empty($year)){
       echo "Please enter year";
   }else if(empty($term)){
    echo "Please enter term";
}else if(empty($dept)){
    echo "Please enter dept";
} else{

    foreach($_POST['subject'] as $chkcourse){ 
           $sel=mysqli_query($connection,"SELECT * FROM  studentregister WHERE  subject='".$chkcourse."' AND dept='$dept' AND year='$year' AND term='$term' ");
       }
  if(mysqli_num_rows($sel) >= 1) {
     $failure = "You have already registered the selected subjects(s)";
   }else{

   while($row=mysqli_fetch_array($sel_sci)){
    $reg_no=$row['matricno'];
    $class=$row['class'];
    $fullname=$row['firstname'].'  '.$row['middlename'].'  '.$row['lastname'];
    foreach($_POST['subject'] as $sci_subj){  
    $query=mysqli_query($connection,"INSERT INTO studentregister (id,fullname,regno,year,class,dept,term,subject,exam,ca,ftbf,stbf,regdate) 
    VALUES('','$fullname','$reg_no','$year','$class','$dept','$term','".mysqli_real_escape_string($connection, $sci_subj)."','00','00','00','00','$regdate')");
    
        if($query) {
            $success = " subject updated";
          } else{
              $failure =  "updateing failed".mysqli_error($connection); 
                 }
   
            }
        }
    }
}
}
  }
  ?>

 <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
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
                   CURRENT SESSION (YEAR):<span style="color:red">*</span>
                   
  <?php
   $already_selected_value = '- Select current Session-';
   $earliest_year = 1950;

print '<select name="session" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;" onblur="sessionValidation(this)" >';
echo ' <option  value="0">- Select current Session-</option>';  
foreach (range(date('Y'), $earliest_year) as $x) {
    print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
}
print '</select>';
echo '<div id="session"></div>';
?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div><br/>
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
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">Department</label>
        <select name="dept" id="" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
        <option value="science">Science dept</option>
        </select>
  </div>
   </div>
   </div>
     <br/>
     <div class="row">
                <div class="col-md-4"> 
        <div class="form-group"> 
            <label for="form_message">Subjects</label>
         <select  id="subject" name="subject[]" multiple="multiple" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:250px;">    <?php 
       

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
                    <input type="submit" name="submit"  value="REGISTER" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div>
        
 <?php require("includes/footer.php"); ?>