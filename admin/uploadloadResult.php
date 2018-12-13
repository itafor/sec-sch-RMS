<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
                  
                                 <h4 class="page-head-line">REGISTERED COURSES</h4>
                                     
 <?php
  if(isset($_POST['submit'])){ 
 ?>                          
<?php
    $matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   $semester=htmlspecialchars($_POST['semester']);
   
      
   if(empty($matricno)){
     $failure = "Please enter your matric no."; 
   }else if(empty($session)){
     $failure = "Please enter current session."; 
   } else if(empty($faculty)){
     $failure = "Please enter faculty."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter your level."; 
   } else if(empty($semester)){
     $failure = "Please enter semester."; 
   }else {
     ?>
       
                 <table  id="studentresultdetail"> 
        <tr>  
        <td>
        <?php 
   $result=mysqli_query($connection,"select DISTINCT faculties.name as facultyname, depts.name  as deptname, level.name as levelname,
semester.name as semestername, courseregister.fullname as fullname, courseregister.matricno as matricno, courseregister.session as sessionname
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.semester='".$_POST['semester']."' AND courseregister.session='".$_POST['session']."'");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
      "FULL NAME:   " .$name=$data['fullname']."<br/><br/>".
      "MATRICULATION NUMBER:   " .$name=$data['matricno']."<br/><br/>".
      "FACULTY:   " .$name=$data['facultyname']."<br/><br/>".  
       "DEPARTMENT:   " .$name=$data['deptname']."<br/><br/>".
       "LEVEL:   " .$name=$data['levelname']."<br/><br/>". 
       "SESSION:   " .$name=$data['sessionname']."<br/><br/>".
       "SEMESTER:   " .$name=$data['semestername']."<br/><br/>".
      "</P>";
    echo"  </td> ";
    echo "<br/>";
     echo"  <td> "; 
 // echo "<img src='$picture' alt=\"My profile picture\" class='prof_img'>"."<br>"."<h3 style='color: white;'>". $name=$data['firstname']." ".$data['lastname']."</h3>";
 }
  echo"  </td> ";  
?>
 </tr> 
  </table> 
    <br/><br/>
       
  <?php     
$sql=mysqli_query($connection,"select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,
semester.name as semestername, course.name as coursename ,
 course.coursetitle as coursetile, course.creditunit as creditunit, courseregister.*
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.semester='".$_POST['semester']."' AND courseregister.session='".$_POST['session']."'");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "The information you entered does not match any record in our database";
   } else{
  echo '       <div class="table-responsive">   
      <table id="editable_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>COURSE CODE</th>
                                                <th>COURSE TITLE</th>
                                                <th>CREDIT UNIT</th>
                                                 <th>exam score</th> 
                                                  <th>ca score</th> 
                                               <th>LECTURAL SIGNATION</th> 
                                                
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php       
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;     



                                echo     '<tr>
                                            <td>'.$sn.'</td>
                                             
                                             <td>'.$row['coursename'].'</td>
                                              <td>'.$row['coursetile'].'</td>
                                              <td>'.$row['creditunit'].'</td> 
                                              <td>'.$row['examscore'].'</td> 
                                              <td>'.$row['cascore'].'</td>  
                                               <td></td>
                                        </tr>';
                                        
                                      
                                      

}
$sn++; 
}  

  } 
 } 
}
 ?> 
      
                                    </tbody>
                                </table>
                                </div>
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
    
         //echo "<span class='btn btn-success'>" .$success."</span>";
    //header("location: index.php");
  exit();
     } 
     ?>
                </div>
     
        
        <script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[4, 'examscore'],[5, 'cascore']] 
      },  
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
     
}); 
 
 </script>
  <?php require("includes/footer.php"); ?>