<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">enable or disable student</h4>
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
   <a href="enableAll.php" onclick="return confirm('Are you sure you want to enable all students ?')" >
                            <button  class="btn btn-primary" role="button"><i class="fa fa-block "></i> Enable All</button> </a> 
                            
  <a href="disableAll.php" onclick="return confirm('Are you sure you want to disable all students ?')" >
                            <button  class="btn btn-danger" role="button"><i class="fa fa-block "></i> Disable All</button> </a>
                            
                  <?php 
       
    if(isset($_GET['stdId'])){
    $studentid=urlencode($_GET['stdId']); 
    $check=mysqli_query($connection,"SELECT * FROM students WHERE stdId='$studentid' AND user_status = 'Active' ");
    if(mysqli_num_rows($check) == 1)
    {
    echo "<div class='alert alert-success'>This student is already active</div>";   
    }else{
    $activate=mysqli_query($connection,"UPDATE students SET user_status = 'Active' WHERE  stdId= '$studentid'")  ;
    
    echo "<div class='alert alert-success'>You have successfully enabled this student</div><br/>";   
        }

    }
?>       
                            
                       <?php
  $output='';
  $query=mysqli_query($connection,"SELECT * FROM students ORDER BY matricno ASC") ; 
  echo '
      <table class="table table-bordered table-striped">
                                         <thead> 
                                        <tr>
                                                <th>S/N</th>
                                                 <th>STUDENT NAME</th> 
                                                  <th>OTHERNAMES</th>    
                                                <th>MATRIC NUMBER</th>
                                               
                                                <th>STATUS</th>
                                                <th>ACTION</th> 
                                                 <th>ACTION</th>  
                                        </tr>
                                       </thead>
                                        <tbody>
  ';    
  $sn=0; 
  
   while($row=mysqli_fetch_array($query))
                         {
                              $sn =$sn + 1;
                             $status='';
                             if($row["user_status"] == 'Active')
                             {
                                 $status = '<span class="label label-success">Active</span>';
                             }else
                             {
                              $status = '<span class="label label-danger">Inactive</span>';
                             }
                             ?>
                             
                               <?php 
                              $picture = $row['picture'];
                               ?>
                               
                            <tr>
                                              <td><?php echo $sn;?></td>
                                              <td><?php echo htmlentities($row['firstname']);?></td>
                                              <td><?php echo htmlentities($row['middlename']);?></td> 
                                              <td><?php echo htmlentities($row['matricno']);?></td> 
                                         
                                               <td><?php echo  $status; ?></td>
                                  
                                  <td><a href="approveStudents.php?stdId=<?php echo $row['stdId']?>" onclick="return confirm('Are you sure you want to enable this student ?')" >
                            <button  class="btn btn-primary" role="button"><i class="fa fa-block "></i> Enable</button> </a> </td>
                            
                          <td>  <a href="disable.php?stdId=<?php echo $row['stdId']?>"  onclick="return confirm('Are you sure you want to disable this student ?')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-disble"></i> Disable </button> </a>  </td> 
                                </tr>
                                 
                            
                             
                       <?php  }  
                         $sn++; 
                         
                         ?> 
                          </tbody> </table> 
                                                       
                 
                  
                
                                

                </div>  
                
          </div>
     </div>
 <?php require("includes/footer.php"); ?>