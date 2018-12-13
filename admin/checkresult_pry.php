<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>    

 
                               
<div class="resultborder">   
 <?php 
    global $percentage;
    $select_profile="SELECT * FROM primary_setting";
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
  <?php
  if(isset($_POST['submit'])){ 
 ?>                          
<?php
    $reg_number=htmlspecialchars($_POST['regno']);
   $year=htmlspecialchars($_POST['session']);
   $class=htmlspecialchars($_POST['class']);
   $dept=htmlspecialchars($_POST['dept']);
   $term=htmlspecialchars($_POST['term']);
   //$semester=htmlspecialchars($_POST['semester']);
   
      
   if(empty($reg_number)){
     $failure = "Please enter reg. no."; 
   }else if(empty($year)){
     $failure = "Please enter current session."; 
   } else if(empty($class)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter  dept."; 
   }else if(empty($term)){
     $failure = "Please enter term."; 
   } else { 
   
       $sel_all=mysqli_query($connection,"select * from ranking");
       while($rank=mysqli_fetch_array($sel_all)){
           $matno=$rank['regno'];
   $del_oldrank=mysqli_query($connection,"DELETE FROM ranking
                                          WHERE regno='$matno' AND class='$class' 
                                          AND year='$year' AND dept='$dept' AND term='".$_POST['term']."'"); 
                                          }   
     ?>
     
     
       <?php     
$sql=mysqli_query($connection,"
select
  id, total, regno,fullname,  
  CASE WHEN @l=total THEN @r ELSE @r:=@r+1 END as rank,
  @l:=total
FROM (
  select
    id, sum(ca + exam) as total,regno,fullname
  from
    primary_register where class='".$_POST['class']."' AND dept='".$_POST['dept']."' AND term='".$_POST['term']."' AND year='".$_POST['session']."'  
  group by
    regno 
  order by
    total desc
) totals, (SELECT @r:=0, @l:=NULL) rank "); 
  

 

   if(mysqli_num_rows($sql) == 0) {
     $failure = "You have not register any course for the selected session , please register your course(s)";
   } else{
           ?>      
          
                             
                 <table  class="table table-condensed" id="studentRresultTBL" > 
                
           <tr>                                     
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;     
?>
  <tr>
        <?php  $sn;?>
          <?php htmlentities($row['id']);?> 
           <?php  $totalscore= htmlentities($row['total']);?> 
           <?php  $rank =htmlentities($row['rank']);?> 
            <?php  $regno1 =htmlentities($row['regno']);?>
            <?php  $fullname =htmlentities($row['fullname']);?> 
     <?php
      $enter_rank=mysqli_query($connection,"INSERT INTO ranking (totalscore,rank,regno,year,class,dept,term,fullname)
       VALUES('$totalscore','$rank','$reg_number','$year','$class','$dept','$term','$fullname')");
       
       $sel_rank=mysqli_query($connection,"SELECT * FROM ranking WHERE regno='$regno1' AND totalscore='$totalscore' AND rank='$rank'  AND class='$class' 
      AND year='$year' AND dept='$dept' AND term='$term' AND fullname='$fullname'");
       if($sel_rank){
       while($rank=mysqli_fetch_array($sel_rank)){
            if($rank['totalscore']!=0){
             echo "<strong>POSITION:</strong> ".$rank['rank'];
           }else{
         echo "<strong>Position:</strong> ".'0'; 
       }
       }
       }
     ?>
    </tr>                            
<?php 
}
$sn++; 
} ?> 
 
     
           <?php 
   $result=mysqli_query($connection,"select * FROM primary_register 

 where  regno='".$_POST['regno']."' AND class='".$_POST['class']."' AND dept='".$_POST['dept']."' AND term='".$_POST['term']."'  AND year='".$_POST['session']."' GROUP BY  regno");        
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
    //$picture=$data['picture'];
      echo "<P>".
        "<td>FULL NAME: </td>"."<td >" .$name=$data['fullname']."</td >".
        "<td>REG.NO: </td>"."<td >" .$name=$data['regno']."</td >".
        "<td>CLASS: </td>"."<td >" .$name=$data['class']."</td >". 
        
      "</P>";
        
      echo"  </tr> "; 
         
          echo "<tr>".
              
        
        "<td>DEPARTMENT: </td>"."<td >" .$name=$data['dept']."</td >".
         "<td>TERM: </td>"."<td >" .$name=$data['term']."</td >".
         "<td>YEAR: </td>"."<td >" .$name=$data['year']."</td >". 
      
          
          
          "</tr>";
         
 }
 ?>  
   <tr style='width:70; height:70;'>
   
  <?php 
    $select_profile="SELECT * FROM students WHERE matricno='$reg_number'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
          $pix=$data['picture'];
        echo "<div id='resultpixDv'>";
        if (empty($pix)){
        echo "<img src='../students/images/default.jpg' alt=\"My profile picture\" width='100' heigth='120' >";
        }else{
         echo "<img src='../students/$pix' alt=\"My profile picture\" width='100' heigth='70' >"; 
        }
      echo "</div>" ;  
  echo"<tr>" ;  
         echo "<P>";
               ?>
            <td>NO. IN DEPT:</td><td><?php $stdresult=mysqli_query($connection,"select * FROM studentregister 

where   dept='".$_POST['dept']."' AND term='".$_POST['term']."'  AND year='".$_POST['session']."' GROUP BY  regno"); 
 echo $count = mysqli_num_rows($stdresult);?></td> 
 
  <td>NO. IN CLASS:</td><td><?php $stresult=mysqli_query($connection,"select * FROM studentregister 

where  class='".$_POST['class']."'  AND term='".$_POST['term']."'  AND year='".$_POST['session']."' GROUP BY  regno"); 
 echo $count2 = mysqli_num_rows($stresult);?></td>  
               <?php
      echo  "<td>SEX: </td>"."<td>" .$name=$data['gender']."</td>".
      "</P>";
  echo"</tr>" ;     
 
    }  
?>
 
  </table> 
    <br/><br/>
       
  <?php     
$stdresult=mysqli_query($connection,"select * FROM primary_register 
where  regno='".$_POST['regno']."' AND class='".$_POST['class']."' AND dept='".$_POST['dept']."' AND term='".$_POST['term']."'  AND year='".$_POST['session']."' ORDER BY id ASC "); 
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($stdresult) == 0) {
       
     $failure = "You have not register any course for the selected session and semester, please register your subject(s)";
   } else{          
  echo '             <table class="table table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SUBJECTS</th> 
                                                 <th>CA SCORE (40%)</th> 
                                                 <th>EXAM SCORE (60%)</th> 
                                                 <th>TOTAL (100%)</th>
                                                 <th>GRADE</th> 
                                                 <th>REMARK</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php 
 $count=mysqli_num_rows($stdresult); 
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($stdresult))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                            
                                              <td><?php echo htmlentities($row['subject']);?></td> 
                                               <td><?php echo caScore($ca= htmlentities($row['ca']));?></td> 
                                               <td><?php echo exam($exam =htmlentities($row['exam']));?></td> 
                                                <td><?php echo  totalScores($total=$exam + $ca); ?></td>
                                               <td><?php echo grade($total);?></td>
                                               <td><?php echo remark($total);?></td>
                                                
                                                <?php 
                                                
                                                $finalsum =$total;
                                              $initalsum +=$finalsum; 
                                              ?>
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++;
$mksOble=100*$count;
 $percent=round($initalsum/$count,2);  
 $failure="";        
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
                              
          if(!$failure){              
                     echo '<tr>';
                     echo "<div class='comments'>"."<strong>"."Total Marks Obtained:.... "." </strong>".$initalsum . " <strong> "."....Total Marks Obtainable:...."." </strong>".$mksOble=100*$count . "<strong>"."....AVERAGE:.... "."</strong>"." ". $percent=round($initalsum/$count,2) ."%"." <h4>".
                     "Class Teacher's Comments:"."</h4>";?> <?php echo "________________________________________________________________________________________________"; echo "<h4>"."Principal's Comments: "."</h4>";?> <?php echo "________________________________________________________________________________________________";;};  
      
                  echo "  ________________________________________________________________________________________________</br>Signature / School Stamp and Date</div>"."</br>"."</div>"; 
              
          
                      ?>
                      
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     
      if(!$failure){
      echo '<div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">'; 
       ?>
       </div><!--end of resultborder-->  
          <input type="button" value="Print" onclick="javascript:printDiv('print')" /> 
          <?php
          echo'  
      </div>
   </div> 
   <div class="col-md-6"> 
       <div class="form-group">
      </div>
   </div> 
 </div>'; 
      }
 ?>
                </div>
 <?php require("includes/footer.php"); ?>