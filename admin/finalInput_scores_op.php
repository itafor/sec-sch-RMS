<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 
  
                                 <h4 class="page-head-line">ENTER STUDENT SCORES</h4>
                                 
                                <a href="input_scores.php"> <input type="submit" name="next" value="NEXT STUDENT"></a><br>
                                                                      
  <?php
 
 echo  "<p style='font-size:16px;'>"." REG. NO:  ". $reg_num= $_SESSION['regno'].
 " YEAR:  " . $yr= $_SESSION['session'].
 "  CLASS:  " .$cla = $_SESSION['class']. 
 "   DEPT:  " . $dep = $_SESSION['dept'] .
 "   TERM:  " . $tem = $_SESSION['term']."</p>";
 
 $reg_num= $_SESSION['regno'];
 $yr= $_SESSION['session'];
  $cla = $_SESSION['class'];
  $dep = $_SESSION['dept'] ;
  $tem = $_SESSION['term']
   ?>
   <?php
  $student=mysqli_query($connection,"SELECT * FROM studentregister where regno='$reg_num' AND year='$yr' AND class='$cla'
   AND dept='$dep' AND term='$tem' ");
        $data=mysqli_fetch_array($student);
        echo "<p style='font-size:16px;'>"."FULL NAME:  ". $data['fullname']."</p>"; 
  
 $result=mysqli_query($connection,"SELECT * FROM studentregister where regno='$reg_num' AND year='$yr' AND class='$cla'
   AND dept='$dep' AND term='$tem' ");
    if(mysqli_num_rows($result) <=0 ){
     echo "<p style='color:red; font-size:20px;'>"."student not found"."</p>";
    }
 $i=0;
    ?>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <table class="table table-bordered" align=center>
    <font face="arial" size="2" >
    <tr>
    <th></th>
    <th>SUBJECT</th>
     <th>CA 40%</th> 
     <th>EXAM 60%</th>
      <th>FTBF 100%</th>
       <th>STBF 100%</th> 
     <th>SAVE</th>
    <th>DELETE</th>
    <th>CHECK</th>
  <?php
   while($abc=mysqli_fetch_array($result)){
       
     echo "<tr>";
     
      echo "<td>";
         echo '<input type="hidden" value="'.$abc['id'].'" name="id'.$i.'" >'; 
         echo "</td>"; 
        
         echo "<td>";
         echo '<input type="text" value="'.$abc['subject'].'" name="subject'.$i.'" readonly>'; 
         echo "</td>";
         echo "<td>";
         echo '<input type="text" value="'.$abc['ca'].'" name="ca'.$i.'" '; 
         echo "</td>"; 
         echo "<td>";
         echo '<input type="text" value="'.$abc['exam'].'" name="exam'.$i.'" >'; 
         echo "</td>";
        
         if($tem=="First Term"){
          echo "<td>";
         echo '<input type="text" value="'.$abc['ftbf'].'" name="ftbf'.$i.'" readonly>'; 
         echo "</td>";
         echo "<td>";
         echo '<input type="text" value="'.$abc['stbf'].'" name="stbf'.$i.'" readonly>'; 
         echo "</td>";
         }elseif($tem=="Second Term"){ 
        echo "<td>";
         echo '<input type="text" value="'.$abc['ftbf'].'" name="ftbf'.$i.'" >'; 
         echo "</td>"; 
         echo "<td>";
         echo '<input type="text" value="'.$abc['stbf'].'" name="stbf'.$i.'" readonly>'; 
         echo "</td>";
         }else{
          echo "<td>"; 
         echo '<input type="text" value="'.$abc['ftbf'].'" name="ftbf'.$i.'" >'; 
         echo "</td>";
         echo "<td>";
         echo '<input type="text" value="'.$abc['stbf'].'" name="stbf'.$i.'" >'; 
         echo "</td>";
         }
          echo "<td>";
          echo '<abbr title="save scores!">'.'<input type="submit" value="save" name="address'.$i.'"  "></abbr>';
         
         if(isset($_POST['address'.$i.''])) {
                if(isset($_POST['check'.$i.''])){
                    
                $subject=$_POST['subject'.$i.''] ; 
                $ca=$_POST['ca'.$i.''] ; 
                $exam=$_POST['exam'.$i.''] ;
                $ftbf=$_POST['ftbf'.$i.''] ;
                $stbf=$_POST['stbf'.$i.''] ;
                 $idno=$_POST['id'.$i.''] ;
                 if($ca >40 ){
                 echo "<h5 style='color:red; font-size:12px;'>"."Failed:Max CA is 40"." you entered ".$ca."<h5>";
                 }elseif($exam > 60 ){
                  echo "<h5 style='color:red; font-size:12px;'>"."Failed:Max exam is 60"." you entered ".$exam."<h5>";
                 }elseif($ftbf > 100 ){
                  echo "<h5 style='color:red; font-size:12px;'>"."Failed:Max FTBF is 100"." you entered ".$ftbf."<h5>";
                 }elseif($stbf > 100 ){
                  echo "<h5 style='color:red; font-size:12px;'>"."Failed:Max STBF is 100"." you entered ".$stbf."<h5>";
                 }elseif(!preg_match('/^[0-9]*$/',$exam)){
                  echo "<h5 style='color:red; font-size:12px;'>"."Invalid exam score"."  you entered ".$exam."<h5>";    
              }elseif(!preg_match('/^[0-9]*$/',$ca)){
             echo "<h5 style='color:red; font-size:12px;'>"."Invalid ca score "." you entered ".$ca."<h5>";      
              }elseif(!preg_match('/^[0-9]*$/',$ftbf)){
         echo "<h5 style='color:red; font-size:12px;'>"."Invalid ftbf score "." you entered ".$ftbf."<h5>";     
              }elseif(!preg_match('/^[0-9]*$/',$stbf)){
         echo "<h5 style='color:red; font-size:12px;'>"."Invalid stbf score"." you entered ".$stbf."<h5>";      
              }else{
                $sql=mysqli_query($connection,"UPDATE studentregister SET ca='$ca', exam='$exam', ftbf='$ftbf', stbf='$stbf' WHERE id='$idno'");
                 if($sql){
                  echo "<h5 style='color:green; font-size:12px;'>"."Scores saved"."<h5>";
                 }else{
                     echo "error".mysqli_error($connection);
                 }
                }
                }else{echo "pls select check box";}
         }
         echo "</td>";
         
              echo "<td>";
        echo '<abbr title="delete subjects!"><button  class="btn btn-danger" name="delete'.$i.'" type="submit" id="delete" value="Delete" onClick="return show_confirm22();" style="background:#F52126; color:#fff; border:none; font-size:16px; padding:4px 8px;"><i class="fa fa-remove "></i></button>  </abbr> '  ;
         if(isset($_POST['delete'.$i.''])){
            if(isset($_POST['check'.$i.''])) {
             $idno=$_POST['id'.$i.''];
             $delete=mysqli_query($connection,"DELETE FROM studentregister where id='$idno'");
             if(!$delete){echo "deletion failed".mysqli_error($connection);}else{echo "<p style='color:green; font-size:14px;'>"."deletion succesfull"."</p>";}
            }else{echo "pls select check box";}
         }
             echo "</td>"; 
          
           echo "<td>";
         echo '<input checked type="checkbox" name="check'.$i.'" class="case"  id="selectall">'; 
         echo "</td>";    
         
      echo "</tr>"; 
      
      $i++;
   }
    // }
  ?>
  </font>
  </table>
   </form> 
   
   
                                    </tbody>
                                </table>
                     
      
    

 </div> 
                </div>
        </div>   
        
</div>
 <?php require("includes/footer.php"); ?>