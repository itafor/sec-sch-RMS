<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>    
     
  
    
<h4 class="page-head-line">Result Sheet</h4>
                                     
  <?php
 global $initalsum, $failure ;
  if(isset($_POST['submit'])){ 
 ?>                          
<?php
  // $matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   //$semester=htmlspecialchars($_POST['semester']);
   
      
  
   if(empty($session)){
     $failure = "Please enter current session."; 
   } else if(empty($faculty)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter term."; 
   }else{
     ?>
       
                 <table  id="studentresultdetail"> 
        <tr>  
        <td class='tblwidth'>
        <?php 
   $result=mysqli_query($connection,"select DISTINCT faculties.name as facultyname, depts.name  as deptname, level.name as levelname,
semester.name as semestername, courseregister.fullname as fullname,  courseregister.session as sessionname
from  courseregister 
left join faculties on faculties.id= courseregister.faculty 
left join depts on depts.id= courseregister.dept
left join level on level.id=courseregister.level 
left join semester on semester.id=courseregister.semester 

 where courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."' AND courseregister.session='".$_POST['session']."' GROUP BY  matricno");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
      
        "<span class='stddetals'>CLASS:</span>  "."<br/>".  
       "<span class='stddetals'>DEPARTMENT:</span>  "."<br/>".
       "<span class='stddetals'>TERM: </span>  "."<br/>".
       
       "<span class='stddetals'>SESSION:  </span>"."<br/>".
       
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['fullname']."</span><br/>".
       
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

   </td>   

 </tr> 
  </table> 
    <br/><br/>
       
  <?php     
$sql=mysqli_query($connection,"
select
  courseRegId, total, matricno, 
  CASE WHEN @l=total THEN @r ELSE @r:=@r+1 END as rank,
  @l:=total
FROM (
  select 
    courseRegId, sum(cascore + examscore) as total, matricno
  from
    courseregister where faculty='".$_POST['faculty']."' AND dept='".$_POST['dept']."' AND level='".$_POST['level']."' AND session='".$_POST['session']."'
  group by
    matricno 
  order by
    total desc
) totals, (SELECT @r:=0, @l:=NULL) rank "); 
  

 

   if(mysqli_num_rows($sql) == 0) {
     $failure = "You have not register any course for the selected session and semester, please register your course(s)";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>REG ID</th>
                                                 
                                                 <th>TOTAL</th>
                                                 <th>RANK</th> 
                                                <th>REG. NO</th> 
                                                   
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
                                              <td><?php echo htmlentities($row['courseRegId']);?></td> 
                                               <td><?php echo $ca= htmlentities($row['total']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['rank']);?></td> 
                                                 <td><?php echo $exam =htmlentities($row['matricno']);?></td>
                                         <?php 
                                              //$initalsum +=$finalsum;?>            
                                           
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
           
          <h4 style="text-align: center;">Signation:___________Date:______________<br/>PRINCIPAL</h4> 
                     
      </div>
   </div> 
 </div> 
                </div>
        </div>   
        
        </div>
 <?php require("includes/footer.php"); ?>