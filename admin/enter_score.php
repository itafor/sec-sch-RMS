<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 
  
                                 <h4 class="page-head-line">CLASSES</h4>
                                     
  <?php
    
   $sql="SELECT * FROM students";
   $result=mysqli_query($connection,$sql);
   $i=0;
?>

   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <table style=" font-size:16px; font-family:arial; " width="100%" border="1" cellpadding="1" cellspacing="1" align=center>
    <font face="arial" size="2" color="blue">
    <tr bgcolor="#009933">
    <th>FIRST NAME</th>
    <th>GENDER</th>
    <th>MATRIC NO</th>
     <th>UPDATE</th>
    <th>DELETE</th>
    <th>CHECK</th>
   
  
  <?php
   while($abc=mysqli_fetch_array($result)){
     echo "<tr>";
        echo "<td>";
         echo '<input type="text" value="'.$abc['firstname'].'" name="firstname'.$i.'">'; 
         echo "</td>";  
         
         echo "<td>";
         echo '<input type="text" value="'.$abc['gender'].'" name="gender'.$i.'">'; 
         echo "</td>"; 
         
         echo "<td>";
         echo '<input type="text" value="'.$abc['matricno'].'" name="matricno'.$i.'" readonly>'; 
         echo "</td>";  
               
          echo "<td>";
         echo '<input type="submit" value="update" name="address'.$i.'">';
         if(isset($_POST['address'.$i.''])) {
                if(isset($_POST['check'.$i.''])){
                $firstname=$_POST['firstname'.$i.''] ;
                $gender=$_POST['gender'.$i.''] ;
                $matricno=$_POST['matricno'.$i.''] ;
                
                $sql=mysqli_query($connection,"UPDATE students SET firstname='$firstname', gender='$gender' where matricno='$matricno'");
                 if($sql){
                  echo "update successful";
                 }else{
                     echo "error".mysqli_error($connection);
                 }
                }else{echo "pls select check box";}
         }
         echo "</td>";
         
              echo "<td>";
         echo '<input type="submit" value="delete" name="delete'.$i.'">';
         if(isset($_POST['delete'.$i.''])){
            if(isset($_POST['check'.$i.''])) {
             $matricno=$_POST['matricno'.$i.''];
             $delete=mysqli_query($connection,"DELETE FROM students where matricno='$matricno'");
             if(!$delete){echo "deletion failed".mysqli_error($connection);}else{echo "deletion succesfull";}
            }else{echo "pls select check box";}
         }
             echo "</td>"; 
          
           echo "<td>";
         echo '<input type="checkbox" name="check'.$i.'">'; 
         echo "</td>";    
             
      echo "</tr>"; 
      
      $i++;
   }
    
   
  ?>
  </font>
  </table>
   </form>
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