<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">Art Subjects REGISTRATION FORM</h4>
   <h2> <a href="reg_sci_students.php">Register all students (old)</a></h2> </br></br> 
 <?php
  if(isset($_POST['submit'])){

    if(empty($_POST['subject'])){
       $failure= "Please select subject";
    }else{
    
    
   $fullname=$_POST['name'];
   $reg_no=htmlentities($_POST['regno']);
   $year=htmlspecialchars($_POST['session']);
   $term=htmlspecialchars($_POST['term']);
   $dept=htmlspecialchars($_POST['dept']);
   $class=htmlspecialchars($_POST['class']);  
   $subject=$_POST['subject'];
   $regdate= date("Y-m-d h:i:sa");
   
   if(empty($fullname)){
      $failure= "Please enter full name"; 
   }elseif(empty($class)){
         $failure= "Please enter class"; 
     } elseif(empty($reg_no)){
    $failure= "Please enter regno"; 
     }elseif(empty($year)){
      $failure= "Please enter year";
   }else if(empty($term)){
   $failure= "Please enter term";
}else if(empty($dept)){
    $failure= "Please enter dept";
} else{
         
        $chk_students=mysqli_query($connection,"SELECT * FROM  students WHERE  matricno='$reg_no'  ");
  if(mysqli_num_rows($chk_students) <= 0){
           $failure = "You must create account for this student before subject registration";      
         }else{ 
          
    foreach($_POST['subject'] as $key => $chkcourse){ 
           $sel=mysqli_query($connection,"SELECT * FROM  studentregister WHERE  regno='$reg_no' AND  subject='".$chkcourse."' AND  dept='$dept' AND year='$year' AND term='$term' ");
   $norow=mysqli_num_rows($sel);
       }
  if(mysqli_num_rows($sel) >= 1) {
     $failure = "You have already registered this student in curent year and term";
   }else{
    foreach($_POST['subject'] as $sci_subj){  
    $query=mysqli_query($connection,"INSERT INTO studentregister (id,fullname,regno,year,class,dept,term,subject,exam,ca,ftbf,stbf,regdate) 
    VALUES('','$fullname','$reg_no','$year','$class','$dept','$term','".mysqli_real_escape_string($connection, $sci_subj)."','00','00','00','00','$regdate')");
    
        if($query) {
            $success = " subject registered successfully";
          } else{
              $failure =  "Subject registration failed".mysqli_error($connection); 
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
            <div class="col-md-4">
                <div class="form-group">
                   FULL NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter student full name"  data-error="Firstname is required." value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   REG. NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="regno" class="form-control" placeholder="Please enter student reg. no"  data-error="Firstname is required." value="<?php echo isset($_POST['regno']) ? $_POST['regno'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
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
         <option value="0">Select One</option>
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
                   CLASS:<span style="color:red">*</span>
                    <select id="class" name="class" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
                    <option value="0">Select One</option>
    <option value="JSS1">JSS1</option>
   <option value="JSS2">JSS2</option>
   <option value="JSS3">JSS3</option>
   <option value="SS1">SS1</option>
   <option value="SS2">SS2</option>
   <option value="SS3">SS3</option>
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
     <div class="row">  
    <div class="col-md-6"> 
        <div class="form-group"> 
            <label for="form_message">Department</label>
        <select name="dept" id="" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
        <option value="Arts">Art dept</option>
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
       

 $query =$connection->query("SELECT * FROM sss_arts_subj"); 
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