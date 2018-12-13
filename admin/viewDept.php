<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
 <h4 class="page-head-line">Departments</h4>
                                     
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
  <?php    
    
   
 $result=mysqli_query($connection,"select  * FROM depts ");      
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($result) == 0) {
     $failure = "Nothing found".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>Departments</th>
                                                 
                                                
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
                                             
                                             <td><?php echo htmlentities($row['name']);?></td>
                                                                                        
                                          
                                        </tr>
                                        
                           
                                      
                                      
<?php 
}
$sn++;
 
} ?>  
  <div class="row">  
     <div class="col-md-6"> 
       <div class="form-group">   
          <input type="button" value="Print" onclick="javascript:printDiv('print')" />   
      </div>
   </div>         
  <?php
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
     
 </div> 
                </div>
        </div>   
        
</div>
 <?php require("includes/footer.php"); ?>