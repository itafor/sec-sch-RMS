<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
                <div class="resultborder">
    <h4 class="page-head-line">GOD'S WILL SUCCESS COLLEGE</h4>
       <?php 
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_SESSION['username']."' AND rank = 'admin' ");
     if(mysqli_num_rows($check) > 0)
    {
   // echo '<div style="opacity: .5; pointer-events: none">' ; 
    }else{
        echo '<div style="opacity: .5; pointer-events: none;">' ;
   echo "<h3 style='color:red;'>Forbidden Area, Only the admin can access this area</h3>"; 
    }
     
    ?> 
       <?php
                    if(isset($_GET['stdId'])){
                                 $id=$_GET['stdId'];
                              
                    $query=mysqli_query($connection,"DELETE FROM students WHERE  stdId='".$id."'");
        
                    
                    if($query){
                    $success = "Student  deleted successfully";
                    }else{
                     $failure = "Student deletion failed";
                    }
                    
                    }   
          ?>            
                                      
 <?php
 global $initalsum, $failure ;
  if(isset($_POST['submit'])){
      $faculty=$_POST['faculty'];
 ?>                               
  <?php
  
     $selclass=mysqli_query($connection,"select  * FROM students
 WHERE class='".$faculty."' ORDER BY dept DESC");      
    $data=mysqli_fetch_array($selclass);
       echo "<h3>".$class=$data['class']." students profile details"."</h3>"; 
       
 $result=mysqli_query($connection,"select  * FROM students
WHERE class='".$faculty."' ORDER BY dept ASC");      
    
   if(mysqli_num_rows($result) == 0) {
     $failure = "No student in the selected class".mysqli_error($connection);
   } else{
       
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SURNAME</th>
                                                <th>MIDDLE</th>
                                                <th>LAST NAME</th>
                                                 <th>PASSWORD</th>
                                                   <th>REG. NO</th> 
                                                   <th>DEPARTMENT</th>
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($result))
{  
$sn =$sn + 1;    

?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             <td><?php echo htmlentities($row['firstname']);?></td>
                                              <td><?php echo htmlentities($row['middlename']);?></td>
                                              <td><?php echo htmlentities($row['lastname']);?></td>
                                               <td><?php echo htmlentities($row['password']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['matricno']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['dept']);?></td>
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
} ?>  
  <?php
  } 
       
 //}
//}

 ?>   
 <?php
 if(!$failure)              
                    
                      ?>
                      
      
                                    </tbody>
                                </table>
                      <?php 
    if(!empty($failure)){
     echo "<span class='btn btn-warning'>" .$failure."</span>"; 
    }
     if(!empty($success)){
          echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?>
        </div><!--end of resultborder--> 
        <?php
 if(!$failure) {             
?> 
      <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 
 </div> 
  <?php
 }             
?> 
                </div>
        </div>   
        
</div>
</div>
 <?php require("includes/footer.php"); ?>