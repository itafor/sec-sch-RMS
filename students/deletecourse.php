<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
  
 <h4 class="page-head-line">REGISTERED COURSES</h4>
                                     
 <?php
 global $initalsum, $failure ;
  if(isset($_POST['submit'])){ 
 ?>                          
<?php
    $matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   //$semester=htmlspecialchars($_POST['semester']);
   
      
   if(empty($matricno)){
     $failure = "Please enter your reg no."; 
   }else if(empty($session)){
     $failure = "Please enter current session."; 
   } else if(empty($faculty)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter term."; 
   }else {
     ?>
       
                 <table  id="studentresultdetail"> 
        <tr>  
         <td class='tblwidth'>   
        <?php 
   $result=mysqli_query($connection,"select faculties.name as facultyname, depts.name  as deptname, level.name as levelname,
semester.name as semestername, courseregister.fullname as fullname, courseregister.matricno as matricno, courseregister.session as sessionname
from  courseregister
 join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept
 join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 

 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."' GROUP BY fullname");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
         "<span class='stddetals'>NAME: </span>"."<br/>".
        "<span class='stddetals'>REG.NO: </span>  "."<br/>".
        "<span class='stddetals'>CLASS:</span>  "."<br/>".  
       "<span class='stddetals'>DEPARTMENT:</span>  "."<br/>".
       "<span class='stddetals'>TERM: </span>  "."<br/>".
       "<span class='stddetals'>SESSION:  </span>"."<br/>".
      "</P>";
    echo"  </td> ";
    echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['fullname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['matricno']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['facultyname']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['deptname']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['levelname']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['sessionname']."</span><br/>".
    " </td> ";
    echo "<br/>";
    
    echo"  <td class='tblwidth'> ";  
 
 }
  
?> 
   
  <?php 
    $matricno=$_SESSION['matricno'];
    $select_profile="SELECT * FROM students WHERE matricno='$matricno'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
 echo "<img src='$picture' alt=\"My profile picture\">";
 }
?>

   </td>  
   
 </tr> 
  </table> 
    <br/><br/>
       
  <?php     
$sql=mysqli_query($connection,"select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,
semester.name as semestername,
 courseregister.*
from  courseregister 
join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept
 join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 

 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."'  AND courseregister.session='".$_POST['session']."'");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "The information you entered does not match any record in our database";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                         <th>#</th>
                                            <th>S/N</th>
                                                <th>SUBJECT</th>
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
    <form method="post" action="deleteMultipleData.php">
                                        <tr>                                     
 <?php  

 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;     
?>

                                        
                                        
                                       

                                            <td><?php echo $sn;?></td>

                                              <td><?php echo htmlentities($row['semestername']);?></td> 
                                               <td><input type="checkbox" name="delid[]" class="case" value="<?php echo $row['CRId']; ?>" /></td> 
                                        </tr>  
                       
                                      
                                      
<?php 
}

$sn++; 
 
} ?>  
  <?php
  } 
       
 } 
}
 ?>       
 
  </tr>           
                                    </tbody>
                                </table>
                                   
  <?php include("includes/multi_deleteBTN.php");  ?>  
 </form> 
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     ?>
      
       
                </div>
        </div>
        
  <?php require("includes/footer.php"); ?>