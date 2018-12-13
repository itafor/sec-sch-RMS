<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
                                 <h4 class="page-head-line">EMAIL LIST</h4>
                                     
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
  <?php 
          
   $result=mysqli_query($connection,"select * FROM  emaillist");        
    if(!$result){
     $failure = "Email List is currently empty";
    }else{ echo '       <div class="table-responsive">   
      <table id="editable_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th>SUBSCRIBED EMAILS ADDRESSES</th>
                                             
                                          
                                                
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
   ?>
                                        
 <?php       
$sn=0;
while($row=mysqli_fetch_array($result))
{  
$sn =$sn + 1;     
?>


                                        <tr>
                                            <td><?php echo $sn;?></td>
                                              <td><?php echo htmlentities($row['email']);?></td>
                                        
                                            
                                                                               

                          </tr>
                                      
<?php                              

}
$sn++; 
} 

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
        
</div>
 <?php require("includes/footer.php"); ?>