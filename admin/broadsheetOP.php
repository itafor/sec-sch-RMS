<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/broadsheetadminMenu.php"); ?>
                    

 <h4 class="page-head-line">GODSWILL COLLEGE TERMINAL EXAMINATION BROADSHEET</h4>                                   
 <?php
  if(isset($_POST['submit'])){ 
 ?>                          
<?php
    //$matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
  // $semester=htmlspecialchars($_POST['semester']);
   //$course=$_POST['course'];
      
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
         <h2 class='broadsheetTitle'>CREATIVE TERM EXAMINATION BROADSHEET(SECONDARY JSS)</h2>   
           
       
        
              <thead>                    
                                    
        <?php 
   $result=mysqli_query($connection,"select faculties.name as facultyname, depts.name  as deptname, level.name as levelname,
semester.name as semestername,courseregister.session as sessionname
from  courseregister
join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept 
join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 

 where  courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."'  AND courseregister.session='".$_POST['session']."'GROUP BY sessionname");                       
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
         
      echo "<P>".
       
       "<div class='bsheetControl'>"."CLASS:.....................  ".$name=$data['facultyname']."_________SESSION:....................  ".$name=$data['sessionname']."_______TERM:.................   ".$name=$data['levelname']."</div>";
         
      "</P>";
          
    echo "<br/>";
    
 
 }
  
?>
                                 
                                    </tbody>
                                </table>
   
   <table  id="studentresultdetail" border="1px" class='broadsheet'>         
 <thead>                           
                                       <tr align="center" >  
                                        <th>S/N</th>
                                             <th style="text-align:center; width:120px;">NAME</th>  
                                              <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Mathematics</th> 
                                                 <th style="padding:2.5px; width: 10%;" rowspan="3"  colspan="3">English Language</th> 
                                                  <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Basic science</th>
                                                  <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Social studies</th> 
                                                   <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Computer studies</th> 
                                                     <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Basic Technology</th>
                                                     <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">French language</th>
                                                     <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Agricultural science</th>
                                                     <th style="padding:2.5px; width: 10%;" rowspan="3"  colspan="3">Physical, Health Education</th> 
                                                  <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Business studies</th>
                                                  <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Christian Religious Studies</th> 
                                                   <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Cultural and Creative Arts</th> 
                                                     <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Yoruba Langauge</th>
                                                     <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Home Economics</th>
                                                     <th style="padding:2.5px; width: 10%;" rowspan="3" colspan="3">Civic Education</th> 
                                                      
                                                     <th style="padding:2.5px; width: 10%;" >GRAND</th> 
                                                     <th style="padding:2.5px; width: 10%;" >AVERAGE</th>
                                                     <th style="padding:2.5px; width: 10%;" >PERCENTAGE</th>  
                                                       <th style="text-align:center;" >POSITION  IN</th>       
                                                     
                                                 
                                        </tr>
                                    </thead>
                                    
  
                
    <br/><br/>
       
  <?php  
  global $total1 ,$total2;    
$sql=mysqli_query($connection," select  faculties.name as facultyname, courseregister.courseRegId as CRId, 
 depts.name  as deptname, level.name as levelname,
semester.name as semestername,courseregister.*
from  courseregister 
join faculties on faculties.id= courseregister.faculty 
join depts on depts.id= courseregister.dept 
join level on level.id=courseregister.level 
join semester on semester.id=courseregister.semester 

 where  courseregister.faculty='".$_POST['faculty']."' AND courseregister.dept='".$_POST['dept']."' AND courseregister.level='".$_POST['level']."'  AND courseregister.session='".$_POST['session']."'");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "No student had register the selected course";
   } else{
  echo '         
                      
                                    
                                               <tr>  
                                                 <td></td>
                                                 <td style="text-align:center; width:120px;"></td>
                                                   
                                                   
                                                 <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                 <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                   <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td> 
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                   <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td>
                                                  
                                                  <td>CA(40%)</td>  
                                                 <td>EXAM(60%)</td>
                                                  <td>TOTAL(100%)</td> 
                                                  
                                                
                                                  
                                                  <td>TOTAL</td>
                                                  <td>SCORE</td> 
                                                    <td style="text-align:center;">%</td>
                                                     <td style="text-align:center;">CLASS</td>
                                    
                                        </tr>  '; 
   ?>
                                        
 <?php 
 $count=mysqli_num_rows($sql);      
$sn=0;
$data=array();
while($row=mysqli_fetch_array($sql))
{ 
$fullname=$row['fullname'];
$sn =$sn + 1;    
?>
                                            
                                            
                                              <?php if($row['semestername']=='Mathematics')
                                               {
                                               ?> 
                                               
                                                   <td><?php //echo $sn;?></td>   
                                                  
                                                   
                                                     
                                               <?php
                                               }
                                             ?>
                                            <?php if($row['semestername']=='Mathematics')
                                               {
                                               ?> 
                                                 <td style="text-align:center; width:120px;"><?php echo htmlentities($row['fullname']);?></td> 
                                                 
                                                   <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($maths=$exam + $ca); ?></td>
                                                  
                                               <?php
                                               }
                                             ?>
                                                <?php if($row['semestername']=='English Language')
                                               {
                                               ?> 
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($eng=$exam + $ca); ?></td>
                                            
                                               <?php
                                               }
                                            
                                             ?>
                                              <?php if($row['semestername']=='Basic science')
                                               {
                                               ?> 
                                              
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($bsci=$exam + $ca); ?></td>
                                              
                                               <?php
                                               }
                                            
                                             ?>
                                             
                                              <?php if($row['semestername']=='Social studies')
                                               {
                                               ?> 
                                                 
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($sos=$exam + $ca); ?></td>
                                              
                                               <?php
                                               }
                                            
                                             ?>
                                             
                                              <?php if($row['semestername']=='Computer studies')
                                               {
                                               ?> 
                                               <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($comp=$exam + $ca); ?></td>
                                               <?php
                                               }
                                            
                                             ?>
                                              <?php if($row['semestername']=='Basic Technology')
                                               {
                                               ?> 
                                              
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($bt=$exam + $ca); ?></td>
                                               
                                               <?php
                                               }
                                            
                                             ?>
                                            
                                              <?php if($row['semestername']=='French language')
                                               {
                                               ?> 
                                              
                                                <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($french=$exam + $ca); ?></td>
                                                    
                                               <?php
                                               }
                                            
                                             ?>  
                                             <?php if($row['semestername']=='Agricultural science')
                                               {
                                               ?> 
                                                <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($agric=$exam + $ca); ?></td>
                                                      
                                               <?php
                                               } 
                                             ?> 
                                             <?php if($row['semestername']=='Physical and Health Education')
                                               {
                                               ?> 
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($phe=$exam + $ca); ?></td>
                                                      
                                               <?php
                                               } 
                                             ?> 
                                             <?php if($row['semestername']=='Business studies')
                                               {
                                               ?> 
                                              
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($bs=$exam + $ca); ?></td>
                                                      
                                               <?php
                                               } 
                                             ?> 
                                              <?php if($row['semestername']=='Christian Religious Studies')
                                               {
                                               ?> 
                                                <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($crs=$exam + $ca); ?></td>
                                               <?php
                                               } 
                                             ?> 
                                             <?php if($row['semestername']=='Cultural and Creative Arts')
                                               {
                                               ?> 
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($cca=$exam + $ca); ?></td>
                                                      
                                               <?php
                                               } 
                                             ?> 
                                             <?php if($row['semestername']=='Yoruba Langauge')
                                               {
                                               ?> 
                                              
                                                 <td style="text-align:center;"><?php echo $ca= htmlentities($row['cascore']);?></td>  
                                                   <td style="text-align:center;"><?php echo $exam =htmlentities($row['examscore']);?></td>
                                                    <td style="text-align:center;"><?php echo  $yoruba=$exam + $ca; ?></td>
                                                      
                                               <?php
                                               } 
                                             ?>
                                              <?php if($row['semestername']=='Home Economics')
                                               {
                                               ?> 
                                              
                                                 <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($hecons=$exam + $ca); ?></td>
                                                      
                                               <?php
                                               } 
                                             ?> 
                                             <?php if($row['semestername']=='Civic Education')
                                               {
                                               ?> 
                                                <td style="text-align:center;"><?php echo caScore($ca= htmlentities($row['cascore']));?></td>  
                                                   <td style="text-align:center;"><?php echo exam($exam =htmlentities($row['examscore']));?></td>
                                                    <td style="text-align:center;"><?php echo  totalScores($civic=$exam + $ca); ?></td>
                                                      
                                               <?php
                                               } 
                                             ?>
                                               
                                             <?php if($row['semestername']=='Civic Education')
                                               {
                                               ?> 
                                                   <td style="text-align:center;"><?php echo  $gtota = $maths +  $eng + $bt + $sos + $hecons + $civic + $bsci + $agric + $french + $crs + $yoruba + $cca + $comp + $phe + $bs ; ?></td> 
                                               
                                               <?php
                                               } 
                                             ?> 
                                              <?php if($row['semestername']=='Civic Education')
                                               {
                                               ?>
                                                    <td style="text-align:center;"><?php echo  $average=round($gtota/1500,4); ?></td> 
                                                      
                                               <?php
                                               } 
                                             ?> 
                                             <?php if($row['semestername']=='Civic Education')
                                               {
                                               ?>
                                                    <td style="text-align:center;"><?php echo $percentage =round($average*100,2);  ?></td> 
                                                    
                                               <?php
                                               } 
                                             ?> 
                                             <?php if($row['semestername']=='Civic Education')
                                               {
                                               ?>
                                                    <td style="text-align:center;"><?php 
                                                         $sel_rank=mysqli_query($connection,"SELECT * FROM ranking WHERE  faculty='$faculty' 
                                          AND session='$session' AND dept='$dept' AND level='$level' AND fullname='$fullname'");
                                           if($sel_rank){
                                           while($rank=mysqli_fetch_array($sel_rank)){
                                             
                                             echo  $rank['rank'];
                                           
                                           }
                                           }         
                                                    ?></td> 
                                                </tr>      
                                               <?php
                                               }
                                               ?>  
                                            
                                              
                                            
                                             
                                                                                  


                                 
<?php                              

}
$sn++; 
}  

  } 
 } 
  }
 ?> 
                                       
                                    </tbody>
                                </table>
                                 
                                
                                
                    <?php
                     // echo    rank($percentage); 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
  
     } 
     ?>  
     </br>   </br>   </br>      
                                     <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 
   <div class="col-md-6"> 
       <div class="form-group">  
           
          <h4 style="text-align: center;"></h4> 
                     
      </div>
   </div> 
 </div> 
                </div>
        </div>  </div>   
        
       
       
  <?php require("includes/footer.php"); ?>