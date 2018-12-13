<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
  <link rel="stylesheet" type="text/css" href="includes/adminstyle.css">    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">              
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script> 


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     
  

<script>
$(document).ready(function(){
$('#faculty').on('change',function(){
   $facultyName=$(this).val();
   if($facultyName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'faculty='+$facultyName,
          success:function(html){
           console.log(html);
           $('#dept').html(html);
          },
      
      });
   } else{
       $('#dept').html('<option value="">Select faculty first </option>');
   }
});

$('#dept').on('change',function(){
   $deptName=$(this).val();
   if($deptName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'dept='+$deptName,
          success:function(html){
           console.log(html);
           $('#level').html(html);
          },
      
      });
   } else{
       $('#level').html('<option value="">Select dept first </option>');
   }
});

$('#level').on('change',function(){
   $levelName=$(this).val();
   if($levelName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'level='+$levelName,
          success:function(html){
           console.log(html);
           $('#semester').html(html);
          },
      
      });
   } else{
       $('#semester').html('<option value="">Select level first </option>');
   }
});

$('#semester').on('change',function(){
   $semesterName=$(this).val();
   if($semesterName){
      $.ajax({
          type:'POST',
          url:'fetchData.php',
          data:'semester='+$semesterName,
          success:function(html){
           console.log(html);
           $('#course').html(html);
          },
      
      });
   } else{
       $('#course').html('<option value="">Select semester first </option>');
   }
});
}); 
</script>  

</head>
<body>  
 <?php
  if(!adminloggedin()) {
 header("location: adminlogin.php");
exit();
 } 
?> 
<div class="userheader">
<a href="index.php"><img src="images/logo.PNG" class="img-responsive" alt="MY PROFILE" width="150" height="150"></a>
 <div class="dropdown">
  <button class="dropbtn">
  <?php 
    $username=$_SESSION['username'];
    $select_profile="SELECT * FROM admin WHERE username='$username'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\" width='70' height='70' >";
 }
?>
  
  </button>
  <div class="dropdown-content">
    <a href="viewprofile.php"><span class="fa fa-eye"></span>View Profile</a>
    <a href="editAdminProfile.php"><span class="fa fa-edit"></span>Edit Profile</a>
    <a href="photo.php"><span class="fa fa-user"></span>Change Picture</a>
    <a href="changepassword.php"><span class="fa fa-key fa-fw"></span>Change Password</a>
    <a href="logout.php"><span class="fa fa-lock"></span>Logout</a>
  </div>
</div>
</div>
  <div id="menus">
  <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
  </div>
  <ul>
    <li><a href=""><span class="fa fa-tachometer"></span>ADMIN DASHBOARD</a></li>
        <li><a href=""><span class="fa fa-history"></span>NEWSLETTER</a>
            <ul>
             <li><a href="newsletter.php"><span class="fa fa-plus"></span>Send News</a></li> 
             <li><a href="emaillist.php"><span class="fa fa-eye"></span>View Email List</a></li>
               <li><a href="unsubscribe.php"><span class="fa fa-eye"></span>Unsubscribe users</a></li> 
          </ul>
           </li>
           <li><a href=""><span class="fa fa fa-wrench"></span>APPLICATIONS</a>
             <ul>
             <li><a href="viewApplications.php"><span class="fa fa-plus"></span>View Applicants</a></li>
             <li><a href="applicantCredentials.php"><span class="fa fa-eye"></span>Applicants Credentials</a></li> 
              <li><a href="processreceipt.php"><span class="fa fa-spinner"></span>Process receipt</a></li> 
          </ul>  
             </li> 
           
             <li><a href=""><span class="fa fa-plus"></span>ADD DETAILS</a>
             <ul>
             <li><a href="addfaculty.php"><span class="fa fa-plus"></span>Add Faculty</a></li>
             <li><a href="addDept.php"><span class="fa fa-plus"></span>Add Department</a></li>
            <li><a href="addlevel.php"><span class="fa fa-plus"></span>Add Level</a></li> 
             <li><a href="addsemester.php"><span class="fa fa-plus"></span>Add Semester</a></li>
             <li><a href="addcourse.php"><span class="fa fa-plus"></span>Add Course</a></li> 
          </ul>  
             </li> 
              <li><a href=""><span class="fa fa-eye"></span>VIEWS</a>
             <ul>
             <li><a href="viewfaculty.php"><span class="fa fa-eye"></span>View Faculties</a></li>
             <li><a href="viewDept.php"><span class="fa fa-eye"></span>View Departments</a></li>
             <li><a href="viewcourse.php"><span class="fa fa-eye"></span>View Course</a></li> 
          </ul>  
             </li> 
              <li><a href=""><span class="fa fa-check"></span>RESULTS</a>
             <ul>
             <li><a href="updatecourseform.php"><span class="fa fa-upload"></span>Upload Result</a></li> 
             <li><a href="checkresultform.PHP"><span class="fa fa-eye"></span>Check Result</a></li> 
          </ul>
          </li>           <li><a href=""><span class="fa fa-bar-chart"></span>MANAGE STUDENTS</a>
           <ul>
             <li><a href="viewstudents.php"><span class="fa fa-eye"></span>View Student</a></li>
             <li><a href="approveStudents.php"><span class="fa fa-wrench"></span>Enable/Disable </a></li>
             <li><a href="viewcomplain.php"><span class="fa fa-remove"></span>Remove Reaction</a></li> 
             <li><a href="removeBkReq.php"><span class="fa fa-remove"></span>Remove Request</a></li> 
               <li><a href="anouncement.php"><span class="fa fa-plus"></span>Send Anouncement</a></li>  
          </ul>
         </li>
               
                   <li><a href=""><span class="fa fa-book"></span>E-LIBRARY</a>
                      <ul>
             <li><a href="addbook.php"><span class="fa fa-upload"></span>Upload Books</a></li> 
             <li><a href="addminViewBooks.php"><span class="fa fa-eye"></span>View Books</a></li> 
             <li><a href="adminviewreq.php"><span class="fa fa-eye"></span>View Request</a></li>
               <li><a href="searchbook.php"><span class="fa fa-search"></span>Search Books</a></li>
          </ul>
       </li> 
        <li><a href=""><span class="fa fa-search"></span>Searches</a>
           <ul>
             <li><a href="searchStudents.php"><span class="fa fa-search"></span>Student</a></li> 
              
             <li><a href="searchFaculty.php"><span class="fa fa-search"></span>Faculty</a></li>
             <li><a href="searchDept.php"><span class="fa fa-search"></span>Department</a></li>
             <li><a href="searchCourse.php"><span class="fa fa-search"></span>Course</a></li>  
          </ul>
        </li>
    
     <li><a href=""><span class="fa fa-history"></span>NEWS & EVENTS</a>
            <ul>
             <li><a href="addnews.php"><span class="fa fa-plus"></span>Add News</a></li> 
             <li><a href="newstitles.php"><span class="fa fa-eye"></span>View News</a></li> 
             <li><a href="removenews.php"><span class="fa fa-remove"></span>Delete News</a></li>
          </ul>
           </li> 
             <li><a href="addAdmin.php"><span class="fa fa-plus"></span>Add New Admin</a></li> 
    
               
                <li><a href=""><span class="fa fa-"></span></a></li>
                 <li><a href=""><span class="fa fa-"></span></a></li>
                 <li><a href=""><span class="fa fa-"></span></a></li> 
                 
  </ul>
  </div>
  
     <div class="container">  
     <div class="admincontent">
   <h4 class="page-head-line">VIEW REGISTERED COURSES FORM</h4>                    
              
     
   <?php     
 $query =$connection->query("SELECT * FROM faculties"); 
 $rowCount=$query->num_rows;
 ?>  

     
<form action="uploadloadResult.php" method="post" class="regform" role="form" >
 

 <div class="controls">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   MATRIC NUMBER:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="matricno" class="form-control" placeholder="Please enter your Matric No. *"  data-error="Firstname is required.">
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
            <label for="form_message">FACULTY</label>
            <select  id="faculty" name="faculty" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
            <option value="">Select faculty</option>
            <?php  
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
         <label for="form_message">DEPARTMENT</label> 
        <select id="dept"  name="dept" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
       <option value="">Select Faculty first </option>
       </select> 
      </div>
   </div> 
 </div>
   <br/>
 
 
 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_message">LEVEL</label>
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
                         <label for="form_message">SEMESTER</label> 
                             <select id="semester"  name="semester" class="form-control col-lg-12 col-md-12 col-sm-4 col-xs-12" style=" height:50px;">
                    <option value="">Select level first </option>
                          </select> 
                         </div>
                </div>
        </div>
           <br/> 
                <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit"  value="VIEW COURSE(S)" style=" height:50px;" class="btn btn-success btn-send">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
 </form> 
 </div>
 </div>
        
 <?php require("includes/footer.php"); ?>