<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
                                 <h4 class="page-head-line">PROCCESSED RECEIPTS</h4>
   
   
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
 $result=mysqli_query($connection,"select * FROM application  WHERE transid !='n'");      
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($result) == 0) {
     $failure = "No receipt proccessd yet".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SURNAME</th>
                                                <th>LAST NAME</th>
                                                 <th>EMAIL</th> 
                                                 <th>PHONE</th>
                                                  <th>BANK ID</th>
                                                    <th>BANK NO</th> 
                                                      <th>TOTAL ATM PAID</th>
                                                        <th>BANK NAME</th> 
                                                          <th>TRANSACTION DATE</th>  
                                                            <th>PAYMENT ITEM</th> 
                                                              <th>RECEIPT NO</th>
                                                                <th>PROCESSED DATE</th>         
                                                 <th>ACTION</th> 
                                                    
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
                                             
                                             <td><?php echo htmlentities($row['surname']);?></td>
                                              <td><?php echo htmlentities($row['lastname']);?></td>
                                               <td><?php echo $ca= htmlentities($row['email']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['phone']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['code']);?></td> 
                                               <td><?php echo htmlentities($row['bankslipno']);?></td>
                                              <td><?php echo htmlentities($row['totalatm']);?></td>
                                              <td><?php echo htmlentities($row['bankname']);?></td> 
                                               <td><?php echo $ca= htmlentities($row['transdate']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['paymentitem']);?></td> 
                                                <td><?php echo $ca= htmlentities($row['transid']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['processedate']);?></td>
    
                                                 <td>
                                            <a href="proccessedReceipts.php?appId=<?php echo $row['appId']?>" target="_blank" onclick="return confirm('This action will remove all payment details. Are you sure you want to cancel this receipt?')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-remove"></i></button> </a> </td>                                       
                                     </div>      
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
        </div>
 <?php require("includes/footer.php"); ?>