<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
                                 <h4 class="page-head-line">APPLICANTS CREDENTIALS</h4>
                                     
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
  <?php     
$sql=mysqli_query($connection,"select  application.*, credentials.*, credentials.id as credid
from  application join credentials on application.phone= credentials.phone");
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($sql) == 0) {
     $failure = "ERROR DURING SELECTION".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SURNAME</th>
                                                <th>MIDDLE</th>
                                                <th>LAST NAME</th> 
                                                 <th>PHONE</th> 
                                                 <th>CREDENTIALS</th> 
                                                 <th>ACTION</th> 
                                                    
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php  
 $initalsum= 0;      
$sn=0;
while($row=mysqli_fetch_array($sql))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                             
                                             <td><?php echo ucfirst(htmlentities($row['surname']));?></td>
                                              <td><?php echo ucfirst(htmlentities($row['middlename']));?></td>
                                              <td><?php echo ucfirst(htmlentities($row['lastname']));?></td> 
                                               <td><?php echo $ca= htmlentities($row['phone']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['file_name']);?></td> 
                                          
                                            
                                            <?php
                                            echo "<td><a href='{$row["file_name"]}' target='_blank'><button  class='btn btn-primary' role='button'><i class='fa fa-eye '></i> VIEW</button></a></td>";
                                     
                                            ?>
                                                                  
                                           
                                                   
                                           
                                        </tr>
                                        
                                    
                                      
                                      
<?php 
}
$sn++; 
} ?>  
  <?php
  //} 
       
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
     } 
     ?>
      
      <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div> 

 </div> 
                </div>
        </div>   
        
        </div>
 <?php require("includes/footer.php"); ?>