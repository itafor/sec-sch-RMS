<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Add New COURSE</h4>                    
    
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
  if(isset($_POST['addcourse'])){
   
    $coursecode=htmlspecialchars($_POST['coursecode']);
   $semesterid=htmlspecialchars($_POST['semester']);
   $courstitle=htmlspecialchars($_POST['coursetitle']); 
   $creditunit=htmlspecialchars($_POST['creditunit']); 
   
   $sel=mysqli_query($connection,"SELECT * FROM course WHERE name='$coursecode'");
   $norow=mysqli_num_rows($sel);
   if($norow >=1) {
     $failure = $courstitle."(" .$coursecode .") already exist";
   } else{
   
   $query=mysqli_query($connection,"INSERT INTO course(id,name,semester_id,coursetitle,creditunit) VALUES('','$coursecode','$semesterid','$courstitle','$creditunit')");
   if($query) {
     $success =$courstitle."(" .$coursecode .") inserted successfully";
   } else{
       $failure =  "course insertion failed".mysqli_error($connection); 
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
   
<form action="addcourse.php" method="post" role="form" >
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
              <div class="col-md-8"> 
                    <div class="form-group">  
                         <label for="form_message">Course(s) you have already entered for the selected data
                          
                         </label> 
                         
                             <select id="course"  name="course" multiple="multiple" disabled="disabled" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:200px;" >
                    <option value=""> </option>
                          </select> 
                         </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   COURSE CODE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="coursecode" class="form-control" required="required" placeholder="Please enter course code. *"  data-error="Firstname is required." value="<?php echo isset($_POST['coursecode']) ? $_POST['coursecode'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   COURSE TITLE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="coursetitle" value="<?php echo isset($_POST['coursetitle']) ? $_POST['coursetitle'] : '' ?>" required="required" class="form-control" placeholder="Please enter course title. *"  data-error="Firstname is required." required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   CREDIT UNIT:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="creditunit" value="<?php echo isset($_POST['creditunit']) ? $_POST['creditunit'] : '' ?>" required="required"  class="form-control" placeholder="Please enter course credit unit *"  data-error="Firstname is required." required="required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
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