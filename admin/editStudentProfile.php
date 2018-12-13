<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">EDIT YOUR PROFILE</h4> 
       
 <?php
                $id=$_REQUEST['stdId'];  
                                 
                    $query=mysqli_query($connection,"SELECT * FROM students WHERE stdId='$id'");
        
                    $result=mysqli_fetch_array($query); 
          ?>            
        <form id="contact-form" method="post" action="updateStudentsProfile.php" role="form">
<div class="messages"></div>

    <div class="controls">
 <input id="form_name" type="hidden" name="stdId" class="form-control" value="<?php echo $result['stdId']  ?>">

    <div class="row">
            <div class="col-md-4">
                <div class="form-group">
               FIRST NAME:  <span style="color:red">*</span>
         <input id="form_name" type="text" name="firstname" class="form-control" value="<?php echo $result['firstname']  ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
               MIDDLE NAME:  <span style="color:red">*</span>
        <input id="form_name" type="text" name="middlename" class="form-control" value="<?php echo $result['middlename']  ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
               LAST NAME:  <span style="color:red">*</span>
    <input id="form_name" type="text" name="lastname" class="form-control" value="<?php echo $result['lastname']  ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div> 


            <div class="row"> 
            <div class="col-md-4">
                <div class="form-group">
                    STUDENT ADDRESS:<span style="color:red">*</span>
      <input id="form_phone" type="text" name="stdaddress" class="form-control" value="<?php echo $result['stdaddress'] ?>" required="required">
                    <div class="help-block with-errors"></div>
                </div>
                 </div>
            <div class="col-md-4">
                <div class="form-group">
                    STUDENT GENDER:<span style="color:red">*</span>
         <select name="gender"  id="" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
        <option value="<?php echo $result['gender'] ?>"><?php echo $result['gender'] ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
                   

                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    STUDENT CLASS:<span style="color:red">*</span>
                
                 <select name="class" id="" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
        <option value="<?php echo $result['class'] ?>"><?php echo $result['class'] ?></option>
        <option value="SS1">SS1</option>
        <option value="SS2">SS2</option>
        <option value="SS3">SS3</option>
        <option value="JSS1">JSS1</option>
        <option value="JSS2">JSS2</option>
        <option value="JSS3">JSS3</option>
        </select>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    STUDENT DEPT.:<span style="color:red">*</span>
         <select id="dept" name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
            <option value="<?php echo $result['dept'] ?>"> <?php echo $result['dept'] ?></option>
   <option value="Commercial">Commercial Dept</option>
    <option value="Science">Science Dept</option>
   <option value="Arts">Arts Dept</option>
   <option value="JSS">JSS Dept</option>
    

   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

           
             <div class="col-md-4">
                <div class="form-group">
                    STUDENT RPASSWORD:<span style="color:red">*</span>
            <input id="form_phone" type="text" name="password" class="form-control" value="<?php echo $result['password'] ?>"  required="required" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" name="edit" class="btn btn-success btn-send" value="EDIT">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong style="color:red;">*</strong> These fields are required.</p>
            </div>
        </div>
    </div>
    
</form>                                                                       

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>