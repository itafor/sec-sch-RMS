<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
                                 <h4 class="page-head-line">EMAIL LIST</h4>
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
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
 <?php 
        if(isset($_GET['id'])){
         $id=urlencode($_GET['id']);
         $unsub=mysqli_query($connection,"DELETE FROM  emaillist WHERE id='$id'");
          if(!$unsub){
     $failure = "Oop! Something went wrong";
    }else{
        $success = "You have successfully unsubcribed this user";
        }
        }  
          
   $result=mysqli_query($connection,"select * FROM  emaillist");        
    if(!$result){
     $failure = "Email List is currently empty";
    }else{ echo '       <div class="table-responsive">   
      <table id="editable_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th width="100px">EMAILS ADDRESSES</th>
                                             
                                               <th>ACTION</th> 
                                                
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
                                        
                                            <td>
                                            <a href="unsubscribe.php?id=<?php echo $row['id']?>"  onclick="return confirm('Are you sure you want to unsubscribe this user? You wont be able to revert this!')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-remove"></i> Unsubscribe</button> </a>                                        


                                  </div>
            </div>
        </div>
                                            </td>
                                        </tr>
                                      
<?php                              

}
$sn++; 
} 

 ?>  

 </tr> 
   </tbody> 
  </table> 
  
    <br/><br/>
       
  
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
        
</div>
 <?php require("includes/footer.php"); ?>