<?php require_once("includes/connection.php");?>
<?php include("includes/functions.php"); ?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">APPLICATION FORM </div> 
        
    <div class="container"> 
      <div class="panel panel-info" style="height:450px;">
    <div class="panel-heading">PERSONAL INFORMATION</div>
               <div class="content-wrapper">
       
            <div class="row">
                <div class="col-md-12">
                    
   <form action="applicationFormOP.php" method="post" role="form" enctype="multipart/form-data">
<div class="controls">   
<div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   SURNAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="surname" class="form-control" placeholder="Please enter your surname *" required  data-error="Firstname is required." value="<?php echo isset($_POST['surname']) ? $_POST['surname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   MIDDLE NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="middlename" class="form-control" placeholder="Please enter your middlename *"  data-error="Firstname is required." required value="<?php echo isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   LAST NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="lastname" class="form-control" placeholder="Please enter your last name*"  data-error="Firstname is required." required value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   EMAIL ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Please enter your email address *"  data-error="Firstname is required." required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   PHONE NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="phone" class="form-control" placeholder="Please enter your phone number *"  data-error="Firstname is required." required value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   CONTACT ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="address" class="form-control" placeholder="Please enter your residential address *"  data-error="Firstname is required." required value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>">
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
                    <select id="gender"  name="gender" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required">
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
                    <input type='text' id="dob" name="dob"  class="form-control"  value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : '' ?>" required="required"/>
                    <span class="input-group-addon add-on">
                    </span>
                </div>
            </div>
       </div>
            <div class="col-md-4">
                <div class="form-group">
                   RELIGION:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="religion" class="form-control" placeholder="Please enter your religion *"  required="required" value="<?php echo isset($_POST['religion']) ? $_POST['religion'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   MARITAL STATUS:<span style="color:red">*</span>
                    <select id="maritalStatus" name="maritalStatus" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required">
   <option>Select One</option>
   <option value="married">Married</option>
   <option value="single">Single</option>
   <option value="divorced">Divorced</option>
   </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                UPLOAD YOUR PHOTO:<span style="color:red">*</span>
                    <input id="myfile" type="file" name="myfile"  class="form-control" >
                    
                </div>
            </div> 
        </div>
        <div class="panel panel-info" style="height:200px;">
    <div class="panel-heading" style="margin-bottom: 20px;">SPONSOR INFORMATION</div>
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   FULL NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="fullname" class="form-control" placeholder=" sponsor full namr*" required="required" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   RELATIONSHIP:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="relationship" class="form-control" placeholder="e.g., Brother, father uncle e.t.c *" required="required" value="<?php echo isset($_POST['relationship']) ? $_POST['relationship'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="sponsoraddress" class="form-control" placeholder="sponsor  address*"  required="required" value="<?php echo isset($_POST['sponsoraddress']) ? $_POST['sponsoraddress'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   PHONE NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="sponsorphone" class="form-control" placeholder="sponsor phone number *" required="required" value="<?php echo isset($_POST['sponsorphone']) ? $_POST['sponsorphone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   EMAIL ADDRESS (Optional):<span style="color:red"></span>
                    <input id="form_name" type="text" name="sponsoremail" class="form-control" placeholder="sponsor email *"  required="required" value="<?php echo isset($_POST['sponsoremail']) ? $_POST['sponsoremail'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   OCCUPATION (Optional):<span style="color:red"></span>
                    <input id="form_name" type="text" name="sponsoroccupation" class="form-control" placeholder="sponsor occupation*" required="required" value="<?php echo isset($_POST['sponsoroccupation']) ? $_POST['sponsoroccupation'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

     
      <div class="panel panel-info" style="height:200px;">
    <div class="panel-heading" style="margin-bottom: 20px;">OTHER INFORMATION</div>
    <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   EXTRA-CURRICULAR ACTIVITIES:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="hobbies" class="form-control" placeholder="Hobbies/Sport"  required="required" value="<?php echo isset($_POST['hobbies']) ? $_POST['hobbies'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   PHYSICAL DISABILITY::<span style="color:red">*</span>
                    <input id="form_name" type="text" name="disability" class="form-control" placeholder="Physical disability if any" required="required" value="<?php echo isset($_POST['disability']) ? $_POST['disability'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                 LANGUAGE: :<span style="color:red">*</span>
                    <input id="form_name" type="text" name="language" class="form-control" placeholder="language(s)" required="required" value="<?php echo isset($_POST['language']) ? $_POST['language'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
<div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   NEXT OF KIN NAME:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="nokname" class="form-control" placeholder="NEXT OF KIN NAME" required="required" value="<?php echo isset($_POST['nokname']) ? $_POST['nokname'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   NEXT OF KIN ADDRESS:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="nokaddress" class="form-control" placeholder="Next of kin address"  required="required" value="<?php echo isset($_POST['nokaddress']) ? $_POST['nokaddress'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   NEXT OF KIN PHONE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="nokphone" class="form-control" placeholder="Next of kin phone number" required="required" value="<?php echo isset($_POST['nokphone']) ? $_POST['nokphone'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

        
        <div class="panel panel-info" style="height:200px;"> <!--START-->  
    <div class="panel-heading" style="margin-bottom: 20px;">EDUCATIONAL INFORMATION: LIST OF SCHOOLS/COLLEGES ATTENDED WITH DATES AND CERTIFICATE OBTAINED</div>
       <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   NAMES/ADDRESS OF SCHOOL(S):<span style="color:red">*</span>
                    <textarea name="eduname" class="form-control" cols="4" rows="5" placeholder="Enter name(s) of schools you have attended"> </textarea> 
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   DATE /MONTH /YEAR:<span style="color:red">*</span>
                    <textarea name="edudate" class="form-control" cols="4" rows="5" required="required" placeholder="Enter start and graduation date: e.g dd/mm/yyyy-dd/mm/yyyy"></textarea> 
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                   CERTIFICATE AWARDED:<span style="color:red">*</span>
                     <textarea name="certificate" class="form-control" cols="4" rows="5" required="required" placeholder="Enter Certificate awarded"> </textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
             <div class="panel panel-info" style="height:200px;">
    <div class="panel-heading" style="margin-bottom: 20px;">PROGRAMME INDEX: SPECIFY THE FIRST AND SECOND PROGRAMME YOU WISH TO ENROL FOR:</div>
     <div class="row">
                            <div class="col-md-4"> 
        <div class="form-group"> 
            FIRST CHOICE:<span style="color:red">*</span> 
                <select id="firstchoice" type="text" name="firstchoice"  class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required">
    <option value="">Select State</option>
    <?php 
       

 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
  
   
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">faculty  not found </option>';
   }
 ?>
  </select> 
  </div>
   </div>
       <div class="col-md-4"> 
        <div class="form-group"> 
           SECOND CHOICE:<span style="color:red">*</span> 
                <select  id="secondchoice" name="secondchoice"  class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:40px;" required="required">
    <option value="">Select State</option>
    <?php 
       

 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
  
   
       if($rowCount > 0){
  while($row=$query->fetch_assoc()){ 
   echo '<option value= "'.$row['name'].'">'.$row['name'].'</option>';
 }
   }else{
     echo '<option value="">faculty not found </option>';
   }
 ?>
  </select> 
  </div>
   </div>
            <div class="col-md-4">
                <div class="form-group">
                   UPLOAD CREDENTIALS:<span style="color:red">*</span>
                    
                   <input id="tooltip" type="file" name="credentials[]" multiple class="form-control">  
                   <span class="tooltiptext">
You can upload any number of file, Arrange all the files(credentials) you wish to upload in one folder. select them and upload at the same time.
  </span>

                </div>
            </div>  
         </div>
              <div class="panel panel-info" style="height:200px;">
    <div class="panel-heading" style="margin-bottom: 20px;">ATTESTATION</div>
    
    <p style="margin-left: 20px;">I attest that I have finished all information requested in this application ,that submitting any false information to the college, or withholding information about any previous academic history will make my application for admission to the college, null and void.</P> 
    
    <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                   <label>I've read the attestation</label><span style="color:red">*</span>
                    <input type="checkbox" name="attestation">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
            </div>
            
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input id="form_name" type="submit" name="apply" value="Submit Application" class="btn btn-success btn-send" class="form-control" >
                    
                </div>
            </div> 
        </div>
            
            
            
    </div>   
    </div>   
    </div> <!--end-->
       
    </div>     
    </div>  
   </div>
    
  </form> 
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