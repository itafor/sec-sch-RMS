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
<div class="userheader">
<a href="index.php"><img src="images/logo.PNG" class="img-responsive" alt="MY PROFILE" width="150" height="150"></a>
 <div class="dropdown">
  <button class="dropbtn"><img src="images/LOGO1.PNG" class="img-responsive" alt="MY PROFILE" width="40" height="40"></button>
  <div class="dropdown-content">
    <a href="#"><span class="fa fa-eye"></span>View Profile</a>
    <a href="#"><span class="fa fa-edit"></span>Edit Profile</a>
    <a href="#"><span class="fa fa-user"></span>Change Picture</a>
    <a href="#"><span class="fa fa-key fa-fw"></span>Change Password</a>
    <a href="#"><span class="fa fa-lock"></span>Logout</a>
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
       <li></li> 
          <li><a href=""><span class="fa fa-gamepad"></span>MANAGE APPs</a></li> 
             <li><a href=""><span class="fa fa-graduation-cap"></span>COURSE REG.</a>
             <ul>
             <li><a href="addfaculty.php"><span class="fa fa-plus"></span>Add Faculty</a></li>
             <li><a href="addDept.php"><span class="fa fa-plus"></span>Add Department</a></li>
            <li><a href="addlevel.php"><span class="fa fa-plus"></span>Add Level</a></li> 
             <li><a href="addsemester.php"><span class="fa fa-plus"></span>Add Semester</a></li>
             <li><a href="addcourse.php"><span class="fa fa-plus"></span>Add Course</a></li> 
          </ul>  
             </li> 
              <li><a href=""><span class="fa fa-check"></span>RESULTS</a>
             <ul>
             <li><a href="updatecourseform.php"><span class="fa fa-upload"></span>Upload Result</a></li> 
             <li><a href=""><span class="fa fa-eye"></span>Check Result</a></li> 
          </ul>
          </li>
                <li><a href="addAdmin.php"><span class="fa fa-plus"></span>Add Admin</a></li>
                   <li><a href=""><span class="fa fa-book"></span>E-LIBRARY</a>
                      <ul>
             <li><a href=""><span class="fa fa-upload"></span>Upload Books</a></li> 
             <li><a href=""><span class="fa fa-eye"></span>View Books</a></li> 
             <li><a href=""><span class="fa fa-eye"></span>View Request</a></li>
               <li><a href=""><span class="fa fa-eye"></span>View Comments</a></li>  
          </ul>
       </li> 
        <li><a href=""><span class="fa fa-search"></span>Searches</a>
           <ul>
             <li><a href=""><span class="fa fa-search"></span>Student</a></li> 
             <li><a href=""><span class="fa fa-search"></span>Books</a></li> 
             <li><a href=""><span class="fa fa-search"></span>Faculty</a></li>
             <li><a href=""><span class="fa fa-search"></span>Department</a></li>
             <li><a href="searchCourse.php"><span class="fa fa-search"></span>Course</a></li>  
          </ul>
        </li>
         <li><a href=""><span class="fa fa-bar-chart"></span>MANAGE STUDENTS</a>
           <ul>
             <li><a href=""><span class="fa fa-plus"></span>Add Student</a></li> 
             <li><a href=""><span class="fa fa-edit"></span>Update Student Info</a></li> 
             <li><a href=""><span class="fa fa-eye"></span>View Student</a></li>
          </ul>
         
         </li>
         
           <li><a href=""><span class="fa fa-history"></span>NEWS & EVENTS</a>
            <ul>
             <li><a href=""><span class="fa fa-plus"></span>Add News</a></li> 
             <li><a href=""><span class="fa fa-eye"></span>View News</a></li> 
             <li><a href=""><span class="fa fa-edit"></span>Update News</a></li>
          </ul>
           </li>
            <li><a href=""><span class="fa fa-"></span></a></li>
             <li><a href=""><span class="fa fa-"></span></a>
               
             </li>
          <li><a href=""><span class="fa fa-"></span></a>
              
              </li>
               <li><a href=""><span class="fa fa-"></span></a></li>
                <li><a href=""><span class="fa fa-"></span></a></li>
                 <li><a href=""><span class="fa fa-"></span></a></li>
                 <li><a href=""><span class="fa fa-"></span></a></li> 
  </ul>
  </div>
     
  
     <div  id="print">   
               <div class="container">  
                            <div class="admincontent">
                                 <h4 class="page-head-line">Result Sheet</h4>
                                     
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
  <?php     
$sql=mysqli_query($connection,"select  application.*, credentials.*, credentials.id as credid
from  application join credentials on application.phone= credentials.phone");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "ERROR DURING SELECTION".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SURNAME</th>
                                                <th>MIDDLE</th>
                                                <th>LAST NAME</th> 
                                                 <th>PHONE</th> 
                                                 <th>CREDENTIALS</th> 
                                                    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             <td><?php echo ucfirst(htmlentities($row['surname']));?></td>
                                              <td><?php echo ucfirst(htmlentities($row['middlename']));?></td>
                                              <td><?php echo ucfirst(htmlentities($row['lastname']));?></td> 
                                               <td><?php echo $ca= htmlentities($row['phone']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['file_name']);?></td> 
                                               <td>
                                             <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                            
                                            <?php
                                            echo "<td><a href='{$row["file_name"]}' target='_blank'>View</a></td>";
                                           // <a href="download.php?id= echo urlencode($row['id'])">
              echo "<td>"."<a href='download.php?id=".urlencode($row['credid'])."'> Download</a></td>";
                                            ?>
                                                                  
                                           
                                            </td>            
                                           
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
} ?>  
  <?php
  //} 
       
 //}
//}

 ?>   
 <?php
 if(!$failure)              
                    
                      ?>
                      
      
                                    </tbody>
                                </table>
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     ?>
      
      <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 
   <div class="col-md-6"> 
       <div class="form-group">  
           
          <h4 style="text-align: center;">Signation:___________Date:______________<br/>HEAD OF DEPARTMENT</h4> 
                     
      </div>
   </div> 
 </div> 
                </div>
        </div>   
        
        </div>
 <?php require("includes/footer.php"); ?>