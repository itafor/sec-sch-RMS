<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">enable or disable Staff</h4>
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
   <a href="enableAllStaff.php" onclick="return confirm('Are you sure you want to enable all staff ?')" >
                            <button  class="btn btn-primary" role="button"><i class="fa fa-block "></i> Enable All</button> </a> 
                            
  <a href="disableAllStaff.php" onclick="return confirm('Are you sure you want to disable all staff?')" >
                            <button  class="btn btn-danger" role="button"><i class="fa fa-block "></i> Disable All</button> </a>
                            
                  <?php 
       
    if(isset($_GET['id'])){
    $adminid=urlencode($_GET['id']); 
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE id='$adminid' AND user_status = 'Active' ");
    if(mysqli_num_rows($check) == 1)
    {
    echo "<div class='alert alert-success'>This staff is already active</div>";   
    }else{
    $activate=mysqli_query($connection,"UPDATE admin SET user_status = 'Active' WHERE  id= '$adminid'")  ;
    
    echo "<div class='alert alert-success'>You have successfully enabled this staff</div><br/>";   
        }
    }
   
 
?>       
                            
                       <?php
  $output='';
  $query=mysqli_query($connection,"SELECT * FROM admin ORDER BY id ASC") ; 
  echo '
      <table class="table table-bordered table-striped">
                                         <thead> 
                                        <tr>
                                                <th>S/N</th>
                                                 <th>STAFF NAMES</th> 
                                                     
                                                <th>PHONE NUMBER</th>
                                               <th>PHOTOS</th>
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
                              $photo = $row['picture'];
                               ?>
                               
                            <tr>
                                              <td><?php echo $sn;?></td>
                                              <td><?php echo htmlentities($row['fullname']);?></td>
                                               
                                              <td><?php echo htmlentities($row['phone']);?></td> 
                                              <td><?php 
                                                   if (empty($photo)){
        echo "<td>"."<img src='../students/images/default.jpg' alt=\"profile picture\" width='60' heigth='60' style='border-radius:50%;' >"."</td>"; 
        }else{
         echo "<img src='$photo' width='70' height='70' alt=\"My profile picture\">" ;  
        }
                                             
                                              
                                              ?></td>  
                                               <td><?php echo  $status; ?></td>
                                  
                                  <td><a href="approveAdmin.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to enable this staff ?')" >
                            <button  class="btn btn-primary" role="button"><i class="fa fa-block "></i> Enable</button> </a> </td>
                            
                          <td>  <a href="disableAdmin.php?id=<?php echo $row['id']?>"  onclick="return confirm('Are you sure you want to disable this staff ?')">
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