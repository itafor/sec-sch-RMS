<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 
  
                                 <h4 class="page-head-line">CLASSES</h4>
                                     
  <?php
   $regnum=htmlspecialchars($_POST['regno']);
   $year=htmlspecialchars($_POST['session']);
   $class=htmlspecialchars($_POST['class']);
   $dept=htmlspecialchars($_POST['dept']);
   $term=htmlspecialchars($_POST['term']);
   
   
      
   if(empty($year)){
     $failure = "Please enter current session."; 
   } else if(empty($class)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter  dept."; 
   }else if(empty($term)){
     $failure = "Please enter term."; 
   }else if(empty($term)){
     $failure = "Please select student."; 
   }else if($term=='First Term'){ 
   
   
   $ftbf_result=mysqli_query($connection,"SELECT * FROM studentregister   WHERE  regno='$regnum' AND 
                                          class='$class' AND year='$year' AND dept='$dept' AND term='".$_POST['term']."'"); 
                                          
        echo  "<h2>"."CLASS: ".$class.'  '."DEPT: ".$dept.' '."TERM: ".$term.' '."YEAR: ".$year.'<br>'."</h2>";
  
   if(mysqli_num_rows($ftbf_result) == 0) {
     $failure = "Nothing found".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>CLASS</th>
                                               <th>NAME</th>   
                                                <th>REG, NO</th>      
                                                  <th>Subject</th> 
                                                 <th>1st TBF</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($ftbf_result))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                            <td><?php echo htmlentities($row['class']);?></td>  
                                             <td><?php echo htmlentities($row['fullname']);?></td>
                                             <td><?php echo htmlentities($row['regno']);?></td>  
                                              <td><?php echo htmlentities($row['subject']);?></td>    
                                              <td><?php echo $ftbf=$row['ca'] + $row['exam'];?></td>      
                                        </tr>
                                        
                           
                                      
                                      
<?php 
}
$sn++;
  }
} elseif ($term=='Second Term'){

    
   $ftbf_result=mysqli_query($connection,"SELECT * FROM studentregister   WHERE  regno='$regnum' AND
                                          class='$class' AND year='$year' AND dept='$dept' AND term='".$_POST['term']."'"); 
                                          
               echo  "<h2>"."CLASS: ".$class.'  '."DEPT: ".$dept.' '."TERM: ".$term.' '."YEAR: ".$year.'<br>'."</h2>";    
  
   if(mysqli_num_rows($ftbf_result) == 0) {
     $failure = "Nothing found".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>CLASS</th>
                                               <th>NAME</th>   
                                                <th>REG, NO</th>      
                                                  <th>Subject</th>
                                                 <th>2nst TBF</th>    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($ftbf_result))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                            <td><?php echo htmlentities($row['class']);?></td>  
                                             <td><?php echo htmlentities($row['fullname']);?></td>
                                             <td><?php echo htmlentities($row['regno']);?></td>  
                                              <td><?php echo htmlentities($row['subject']);?></td>    
                                              <?php  $firstTermBF =$row['ca'] + $row['exam'];?>
                                              <?php  $secondTermBF=$row['stbf'];?> 
                                               <td><?php echo $finalstbf=($firstTermBF + $secondTermBF)/2;?></td>     
                                        </tr>
                                        
                           
                                      
                                      
<?php 
}
$sn++;
  }
}
?>


  
  <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div>
                                    </tbody>
                                </table>
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     } 
     ?>
      
    

 </div> 
                </div>
        </div>   
        
</div>
 <?php require("includes/footer.php"); ?>