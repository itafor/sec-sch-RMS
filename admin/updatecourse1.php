<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
                   
                           <h4 class="page-head-line">UPLOAD STUDENTS' RESULT</h4>
                           
                                     
 <?php
  if(isset($_POST['submit'])){ 
 ?>                          
<?php
    //$matricno=htmlspecialchars($_POST['matricno']);
   $session=htmlspecialchars($_POST['session']);
   $class=htmlspecialchars($_POST['class']);
   $dept=htmlspecialchars($_POST['dept']);
   $term=htmlspecialchars($_POST['term']);
   $subject=$_POST['subject'];
   //$course=$_POST['course'];
      
    if(empty($session)){
     $failure = "Please enter current session."; 
   } else if(empty($class)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($term)){
     $failure = "Please enter term."; 
   } elseif(empty($subject)){
     $failure = "Please enter subject"; 
   }else{
     ?>
      
       
        <?php 
   $result=mysqli_query($connection,"select * from  studentregister 
where  class='".$_POST['class']."' AND dept='".$_POST['dept']."' AND term='".$_POST['term']."' AND subject='".$_POST['subject']."' AND year='".$_POST['session']."' GROUP BY year");                       
    if(!$result){
     $failure = "Information not matched";
    }else{
    while($data=mysqli_fetch_array($result)){
   
      echo "<P>".
        "<strong>CLASS:</strong>"."  <span style='color:#000000; text-align:center; margin-left:20px;'>" .$name=$data['class']." </span>   ". 
        "<strong>DEPARTMENT:</strong>   "."<span style='color:#000000;  margin-left:20px;'>" .$name=$data['dept']."</span>".
        "<strong>TERM: </strong>  " ."<span style='color:#000000;  margin-left:20px;'>".$name=$data['term']."</span> <br/><br/>".
       "<strong>SESSION:</strong>   "."<span style='color:#000000;  margin-left:20px;'>" .$name=$data['year']." </span>  ".
       "<strong>SUBJECT:</strong>   "."<span style='color:#000000;  margin-left:20px;'>" .$name=$data['subject']."</span><br/><br/>".
      "</P>";
    // echo"  </td> ";
    echo "<br/>";
    
 
 }
  
?>
 <form method="POST" action="multipleUpdate.php" id="myform" >
  <table  id="studentresultdetail" class="table table-bordered table-striped table-responsive" > 
       
                
  
       
  <?php     
$sql=mysqli_query($connection," select  * FROM studentregister 
where  subject='".$_POST['subject']."' AND  class='".$_POST['class']."' AND dept='".$_POST['dept']."' AND term='".$_POST['term']."' AND year='".$_POST['session']."'");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "No student had register the selected course";
   } else{

  echo '  
       

      
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th>NAME</th>
                                                <th>REG. NO</th>
                                                <th>SUBJECT</th> 
                                                <th>CA  40%</th> 
                                                 <th>EXAM 60%</th>
                                                  <th>1st TERM BF 100%</th>  
                                                  <th>2nd TERM BF 100%</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
          
                                      
 <?php       
$sn=0;
$i = 0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;  
?>

  <tr>
      <td><?php echo $sn;?>
<?php echo "<input type='hidden' name='id[$sn]' value='{$row['id']}'>";?>
</td>
        <td><?php echo htmlentities($row['fullname']);?></td>
        <td><?php echo htmlentities($row['regno']);?></td> 
        <td><?php echo htmlentities($row['subject']);?></td> 
         <td>
<?php echo "<input type='text' name='ca[$sn]' value='{$row['ca']}' id='ca'>";?>
         </td>
         <td>
<?php echo "<input type='text' name='exam[$sn]' value='{$row['exam']}' id='exam'>";?>
           
         </td> 
            
           <td>
<?php echo "<input type='text' name='ftbf[$sn]' value='{$row['ftbf']}'>";?>
           
         </td> 
           
            <td>
<?php echo "<input type='text' name='stbf[$sn]' value='{$row['stbf']}'>";?>
         </td> 
      
                                              
                                           
                                                         


                                  </div>
            </div>
        </div>
                                           
                                        </tr>
                                      
<?php                              

}
$sn++;
$i++; 
}  

  } 
 } 
  }
 ?> 
      
                                    </tbody>
                                </table>
                                <input type="submit" name="update" value="Enter Scores!" class="form-control btn btn-primary" style="height: 60px; font-size: 30px; width: 200px"> 

                                </form>  
                    <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
  
     } 
     ?> 
                </div> 
                
                 </div>  
                  
     
        

       
  <?php require("includes/footer.php"); ?>