<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?> 
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
   <h4 class="page-head-line">Add New Department</h4> 
   <?php 
     //CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_POST['search'])) {
    $course = $_POST['course'];
    if(empty($course)){
        echo "Please enter a keyword to search for";
    }else{
    $sql = mysqli_query ($connection,"SELECT * FROM course WHERE name LIKE '%{$course}%' OR  coursetitle LIKE '%{$course}%'");
    if(mysqli_num_rows($sql)==0){
      echo "nothing match your search" ;
    } else{
       echo '       <div class="table-responsive">   
      <table  border="2px" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th>COURSE CODE</th>
                                                <th>COURSE TITLE</th> 
                                                <th>CREDIT UNIT</th>  
                                                 
                                                
                                        </tr>
                                    </thead>
                                    <tbody>  ';  
    //$array = array();          ?>
              <tr>
    <?php
    $sn=0; 
    while ($row = mysqli_fetch_array($sql)) {
        $sn =$sn + 1;
        ?>  
                                    <tr>
                                            <td><?php echo $sn;?></td>
                                              <td><?php  echo $coursecode=htmlentities($row['name']);?></td>
                                              <td><?php  echo $courstitle=htmlentities($row['coursetitle']);?></td>
                                              <td><?php  echo $courstitle=htmlentities($row['creditunit']);?></td>
                                             
                                            
                                    </tr>         
        
    <?php } $sn++;?>
<?php     
}
}
}   
?>
    
    </tbody>
    </table>
   <form action="" method="POST" >
          <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                   COURSE OR TITLE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="course" class="form-control" placeholder="Type course code or title to search *" style=" height:70px;" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div> </br>
            <div class="col-md-5">
                <div class="form-group">
                   <h1 style="color: gray; font-size: 80px; margin-left:-100px; margin-top:8px;">  <span class="fa fa-search"></span></h1>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="search" value="SEARCH COURSE" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

          </form>
                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>