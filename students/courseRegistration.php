<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
 
   <h4 class="page-head-line">COURSE REGISTRATION FORM</h4>
 <?php
  if(isset($_POST['submit'])){
    
   $fullname=htmlspecialchars($_POST['fullname']);
   $matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   $semester=$_POST['semester'];
  
   $regdate= date("Y-m-d h:i:sa"); 
   
   if(empty($fullname)){
     $failure = "Please enter your full name"; 
   }else if(empty($matricno)){
     $failure = "Please enter your matric no."; 
   }else if(empty($faculty)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter your term."; 
   } else if(empty($semester)){
     $failure = "Please enter subject."; 
   }else{
    foreach($_POST['semester'] as $key => $chkcourse){ 
           $sel=mysqli_query($connection,"SELECT * FROM  courseregister WHERE  semester='".$chkcourse."' AND matricno = '$matricno' AND faculty='$faculty' AND dept='$dept' AND session='$session' AND level='$level' ");
   $norow=mysqli_num_rows($sel);
       }
  if($norow >=1) {
     $failure = "You have already registered the selected course(s)";
   } else{
   foreach($_POST['semester'] as $mycourse){ 
   $query=mysqli_query($connection,"INSERT INTO courseregister (courseRegId,fullname,matricno,session,faculty,dept,level,semester,examscore,cascore,ftbf,stbf,regdate) 
   VALUES('','$fullname','$matricno','$session','$faculty','$dept','$level','".mysqli_real_escape_string($connection, $mycourse)."','00','00','00','00','$regdate')");
   }
   if($query) {
     $success = "You have successfully registered the selected subject";
   } else{
       $failure =  "Course registration failed".mysqli_error($connection); 
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
                 
                    <input id="form_name" type="hidden" name="fullname" onblur="disciplineValidation(this)" class="form-control" placeholder="Please enter your ful name starting with surname. *"   readonly="readonly"  value="<?php $query =mysqli_query($connection,"SELECT * FROM students where matricno = '".$_SESSION['matricno']."'");
                      while($data=mysqli_fetch_array($query)){
                       echo $data['firstname'] ." ". $data['middlename'] ." ". $data['lastname'];
                      }
                     ?>">
                  <div id="discipline"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  
                    <input id="form_name" type="hidden" name="matricno" onblur="matricValidation(this)" class="form-control" value="<?php echo $_SESSION['matricno'];?>"  readonly="readonly" data-error="Firstname is required.">
                  <div id="matric"></div>
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
            <label for="form_message">CLASS</label>
            <select  id="faculty" name="faculty"  class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
            <option value="0">Select Class</option>
            <?php  
                 
 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
 
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
   </div>
     <br/>
   
   <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">  
         <label for="form_message">DEPARTMENT</label> 
        <select id="dept"  name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
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
                         <select id="level"  name="level" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
                            <option value="">Select dept first </option>
                            </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
  </div>  <br/>
  <div class="row">          
              <div class="col-md-6"> 
                    <div class="form-group">  
                         <label for="form_message">SUBJECTS</label> 
                             <select id="semester"  name="semester[]" multiple="multiple" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:250px;">
                    <option value="">Select term first </option>
                          </select> 
                         </div>
                </div>
        </div>
           <br/> 

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="REGISTER COURSE(S)" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div>
        
 <?php require("includes/footer.php"); ?>