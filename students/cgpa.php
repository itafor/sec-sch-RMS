<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
                               
                                
 <?php
 global $initalsum, $failure ,  $cgpa;
  if(isset($_POST['check'])){ 
 ?> 
  <img src="images/resulheader.png" class="img-responsive" id="resultsheet"  >
                            <h4 id="resulttitle"><strong> OVERALL CGPA </strong> </h4>                                  
<?php
    $matricno=htmlspecialchars($_POST['matricno']);
  
      
   if(empty($matricno)){
     $failure = "Please enter your matric no."; 
   }else {
     ?>
             
                 <table  id="studentresultdetail"> 
        <tr>  
        <td class='tblwidth'>
        <?php 
   $matricno=$_SESSION['matricno'];
    $select_profile="SELECT * FROM students WHERE matricno='$matricno'";
    $result=mysqli_query($connection,$select_profile);     
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<span class='stddetals'>FULL NAME: </span>"."<br/>".
        "<span class='stddetals'>MATRIC.NO: </span>  "."<br/>".
        "<span class='stddetals'>DEPARTMENT:</span>  "."<br/>".  
       "<span class='stddetals'>PROGRAMME:</span>  "."<br/>".
       "<span class='stddetals'>LEVEL: </span>  "."<br/>".
        
      "</P>";
      echo"  </td> "; 
      echo"  <td class='tblwidth'> ". 
         "<span class='stddetals' >" .$name=$data['firstname']." ".$name=$data['middlename']." ".$name=$data['lastname']."</span><br/>".
        " <span class='stddetals'>" .$name=$data['matricno']."</span><br/>".
         " <span class='stddetals'>" .$name=$data['faculty']."</span><br/>".  
       " <span class='stddetals'>" .$name=$data['dept']."</span><br/>".
       " <span class='stddetals'>" .$name=$data['level']."</span><br/>".
        
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
semester.name as semestername, course.name as coursename,
course.coursetitle as coursetile, course.creditunit as creditunit, courseregister.*
from  courseregister join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 
join course on course.id=courseregister.course
 where  courseregister.matricno='".$_POST['matricno']."' AND courseregister.examscore !=0 AND courseregister.examscore !=''  AND courseregister.cascore !=0 AND courseregister.cascore !=''
  ");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = " Nothing to display";
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>COURSE CODE</th>
                                                <th>COURSE TITLE</th>
                                                <th>CREDIT UNIT</th> 
                                                 <th>CA SCORE (30%)</th> 
                                                 <th>EXAM SCORE (70%)</th> 
                                                 <th>TOTAL (100%)</th>
                                                 <th>GRADE</th> 
                                                 <th>GP</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;
 $initalgp= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             <td><?php echo htmlentities($row['coursename']);?></td>
                                              <td><?php echo htmlentities($row['coursetile']);?></td>
                                              <td><?php echo $creditunit=htmlentities($row['creditunit']);?></td> 
                                               <td><?php echo $ca= htmlentities($row['cascore']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['examscore']);?></td> 
                                                <td><?php echo  $total=$exam + $ca; ?></td>
                                               <td><?php echo grade($total);?></td>
                                               <td><?php echo cgpa($total,$creditunit);?></td> 
                                         <?php $finalsum =$row['creditunit'];
                                              $initalsum +=$finalsum;
                                                $initalgp = cgpa($total,$creditunit);
                                                $cgpa +=$initalgp;
                                              ?>            
                                           
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
}
  } 
 ?>  
   
 <?php
 if(!$failure)              
                     echo '<tr>
                      <td></td>
                      <td></td>   <td><strong>TOTAL CREDIT UNIT REGISTERED:</strong></td>';
                      ?>
                      <td><?php echo $initalsum ; ?></td><td></td><td></td><td></td><td></td><td><?php echo "CGP:  ". $cgpa ; ?></td> 
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
          <h4> <?php 
             
              if($initalsum !=0 || $cgpa !=0){
                   $finalCgpa=  $cgpa / $initalsum;
          echo "Cumulative Grade Point Average (CGPA): = ". round($finalCgpa,2);
           
           ?><br/>
           <?php echo "REMARK: ". finalRemark($finalCgpa); 
             }else{
            echo " No grade found"; 
             } 
           ?>
          </h4>   
      </div>
   </div> 
    </div>
       
      <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 
    </div> 
      <?php
 } 
  }
 ?> 
  <form action="cgpa.php" method="post" role="form">
<div class="controls">
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                
                    <input id="form_name" type="hidden" name="matricno" class="form-control" value="<?php echo $_SESSION['matricno'];?>" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <input id="form_name" type="submit" name="check" value="CONTINUE" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div>
        </div>
       </div>
</form> 

                </div>
        </div>   
        
        </div>
        
  <?php require("includes/footer.php"); ?>