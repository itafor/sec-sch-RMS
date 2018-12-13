<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
              
         <div class="resultborder">                   
                                <?php 
    
    $select_profile="SELECT * FROM headersetting";
    $headerdisplay=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($headerdisplay)){
    $logo=$data['logo'];
    $schname=$data['schname']; 
     $schaddress=$data['schaddress']; 
     $phone=$data['phone'];
     $email=$data['email'];
     $website=$data['website'];
    echo "<br/>";
    echo '<table width="100%" class="resultsheet">';
     echo '<tr class="resultrow">';
  echo "<td class='resultheaderimage'><img src='$logo' alt=\"My profile picture\" ></td>";
   echo '<td align="center">'.'<p class="schname">'.$schname.'</p>'.'<p class="headerdetals">'.$schaddress.'</p>'.'<p class="headerdetals">'.$website.'</P>'.'<p class="headerdetals">'.'Tel: '.$phone.'</p>'.'<p class="headerdetals">'.'E-mail: '.$email.'</p>'.'</td>';
 }
?>  
</tr>
</table>
                            <h4 id="resulttitle">REGISTERED SUBJECTS</h4>    
                                     
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
     $failure = "Please enter your matric no."; 
   }else if(empty($session)){
     $failure = "Please enter current session."; 
   } else if(empty($faculty)){
     $failure = "Please enter faculty."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter your level."; 
   }else {
     ?>
       
                 <table  id="studentresultdetail"> 
        <tr>  
        <td class='tblwidth'>
        <?php 
   $result=mysqli_query($connection,"select DISTINCT faculties.name as facultyname, depts.name  as deptname, level.name as levelname,
semester.name as semestername, courseregister.fullname as fullname, courseregister.matricno as matricno, courseregister.session as sessionname
from  courseregister 
join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept 
join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."'  AND courseregister.session='".$_POST['session']."' GROUP BY courseregister.matricno ");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span>FULL NAME: </span>"."<br/>".
        "<span>MATRIC.NO: </span>  "."<br/>".
        "<span>CLASS:</span>  "."<br/>".  
       "<span >DEPARTMENT:</span>  "."<br/>".
       "<span>TERM: </span>  "."<br/>". 
       "<span>SESSION:  </span>"."<br/>".
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
 // echo "<img src='$picture' alt=\"My profile picture\" class='prof_img'>"."<br>"."<h3 style='color: white;'>". $name=$data['firstname']." ".$data['lastname']."</h3>";
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
     $failure = "The information you entered does not match any record, please try again";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SUBJECTS</th>
                                                 <th>SUBJECT TEACHER SIGNATION</th>  
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
                                              <td><?php echo htmlentities($row['semestername']);?></td> 
                                               <td></td>
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
           
          <h4 style="text-align: center;">Signation:___________Date:______________<br/>PRINCIPAL </h4> 
                     
      </div>
   </div> 
    </div><!--end of resultborder--> 
 </div> 
                </div>
        </div> 
        
        </div> 
        
  <?php require("includes/footer.php"); ?>