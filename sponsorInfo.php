<?php require_once("includes/connection.php");?>
<?php include("includes/functions.php"); ?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">STUDENT PORTAL / FRESHERS / ACCOUNT</div> 
   
    <div class="container"> 
      <div class="panel panel-info" style="height:400px;">
    <div class="panel-heading">PERSONAL INFORMATION</div>
               <div class="content-wrapper">
       
            <div class="row">
                <div class="col-md-12">
                    
   <form action="sponsorInfo.php" method="post" role="form">
<div class="controls">   
<div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   SURNAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="surname" class="form-control" placeholder="Please enter your surname *"  data-error="Firstname is required." value="<?php echo isset($_POST['surname']) ? $_POST['surname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   MIDDLE NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="middlename" class="form-control" placeholder="Please enter your middlename *"  data-error="Firstname is required." value="<?php echo isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   LAST NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="lastname" class="form-control" placeholder="Please enter your last name*"  data-error="Firstname is required." value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   EMAIL ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Please enter your email address *"  data-error="Firstname is required." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   PHONE NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="phone" class="form-control" placeholder="Please enter your phone number *"  data-error="Firstname is required." value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   CONTACT ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="address" class="form-control" placeholder="Please enter your residential address *"  data-error="Firstname is required." value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
       <div class="row">
                <div class="col-md-4"> 
        <div class="form-group"> 
            <label for="form_message">STATE</label>
                <select  id="state" name="state"  class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required">
    <option value="">Select State</option>
    <?php 
       

 $query =$connection->query("SELECT * FROM states"); 
 $rowCount=$query->num_rows;
  
   
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['state_id'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">state not found </option>';
   }
 ?>
  </select> 
  </div>
   </div>
            <div class="col-md-4"> 
            <div class="form-group">  
             <label for="form_message">LGA</label> 
             <select id="lga"  name="lga" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required" >
             <option value="">Select state first </option>
        </select> 
      </div>
   </div> 
            <div class="col-md-4">
                <div class="form-group">
                   GENDER:<span style="color:red">*</span>
                    <select id="gender"  name="gender" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
                        <option value="">Select Gender </option>
                        <option value="Male">Male </option>
                        <option value="Female">Female</option>
                        </select> 
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-sm-4'>
            <div class="form-group">
            DATE OF BIRTH:<span style="color:red">*</span>
                <div class='input-group input-append date' id='datetimepicker1'>
                    <input type='text' id="dob" name="dob"  class="form-control"  value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : '' ?>" />
                    <span class="input-group-addon add-on">
                    </span>
                </div>
            </div>
       </div>
            <div class="col-md-4">
                <div class="form-group">
                   RELIGION:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="religion" class="form-control" placeholder="Please enter your religion *"  data-error="Firstname is required." value="<?php echo isset($_POST['religion']) ? $_POST['religion'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   MARITAL STATUS:<span style="color:red">*</span>
                    <select id="maritalStatus" name="maritalStatus" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;">
   <option>Select One</option>
   <option value="married">Married</option>
   <option value="single">Single</option>
   <option value="divorced">Divorced</option>
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
     
      </div> 
      </form>
         <ul class="pager" style="margin-top: -2px;">
    <li><a href="personalinfo.php">Previous</a></li>
     
    <li style="margin-left: 50px;"><a href="sponsorInfo.php">Next</a></li>
  </ul> 
       </div>
       
            </div>
        </div> <!--content-wraper end-->  
         
   </div> 
   
 </div> 
 
</div>

</div>       
   <script>
  $("#dob").datetimepicker();
</script> 
 

<?php require("includes/footer.php"); ?> 