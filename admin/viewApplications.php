<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 
 
                                 <h4 class="page-head-line">APPLICANTS</h4>
                                 <?php
                                 if(isset($_GET['appId'])){
                                 $id=$_GET['appId'];
                                 
                    $query=mysqli_query($connection,"DELETE FROM application WHERE  appId='".$id."'");
        
                    
                    if($query){
                    $success = "Applicant  deleted successfully";
                    }else{
                     $failure = "Applicant deletion failed";
                    }
                                 }
          ?>            
            
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
 $result=mysqli_query($connection,"select  states.name as statename, locals.local_name  as lgname, application.* FROM application
join states on states.state_id= application.state join locals on locals.local_id=application.lga ");      
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($result) == 0) {
     $failure = "ERROR DURING SELECTION".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SURNAME</th>
                                                <th>MIDDLE</th>
                                                <th>LAST NAME</th> 
                                                 <th>FIRST CHOICE</th>
                                                <th>SECOND CHOICE</th> 
                                                 <th>EMAIL</th> 
                                                 <th>PHONE</th>
                                                 <th>PAYMENT ID</th>
                                                 <th>ADDRESS</th>
                                                <th>STATE</th>
                                                <th>LGA</th> 
                                                 <th>GENDER</th> 
                                                 <th>DOB</th>
                                                 <th>RELIGION</th>
                                                <th>MARRITAL STATUS</th>
                                                  <th>HOBBIES</th>
                                                  <th>DISABILITY</th>   
                                                   <th>LANGUAGE</th> 
                                                    <th>PREV EDU NAME</th>
                                                  <th>PREV EDU DATE</th>   
                                                   <th>PREV EDU CERT</th>  
                                                <th>SPONSOR</th>
                                                <th>RELATIONSHIP</th>
                                                <th>SPONSOR ADDRESS</th>
                                                 <th>SPONSOR PHONE</th>
                                                  <th>SPONSOR EMAIL</th> 
                                                   <th>SPONSOR OCCUPATION</th> 
                                                 <th>NEXT OF KIN</th>
                                                <th>NEXT OF KIN ADRESS</th>
                                                <th>NEXT OF KIN PHONE</th> 
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
                                             
                                             <td><?php echo ucfirst(htmlentities($row['surname']));?></td>
                                              <td><?php echo ucfirst(htmlentities($row['middlename']));?></td>
                                              <td><?php echo ucfirst(htmlentities($row['lastname']));?></td> 
                                               <td><?php echo ucfirst($row['firstchoice']);?></td>
                                              <td><?php echo ucfirst($row['secondchoice']);?></td>  
                                               <td><?php echo $ca= htmlentities($row['email']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['phone']);?></td> 
                                                <td><?php echo $exam =htmlentities($row['code']);?></td> 
                                               <td><?php echo ucfirst($row['address']);?></td>
                                              <td><?php echo ucfirst($row['statename']);?></td>
                                              <td><?php echo ucfirst($row['lgname']);?></td> 
                                               <td><?php echo $ca= ucfirst($row['gender']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['dob']);?></td> 
                                                <td><?php echo $ca= ucfirst($row['religion']);?></td> 
                                               <td><?php echo $exam =ucfirst($row['maritalStatus']);?></td>
                                                <td><?php echo $exam =ucfirst($row['hobbies']);?></td>
                                                 <td><?php echo $exam =ucfirst($row['disability']);?></td>     
                                                   <td><?php echo $exam =ucfirst($row['language']);?></td>
                                                   <td><?php echo $exam =ucfirst($row['eduname']);?></td>
                                                 <td><?php echo $exam =ucfirst($row['edudate']);?></td>     
                                                   <td><?php echo $exam =ucfirst($row['certificate']);?></td>
                                                     <td><?php echo $exam =ucfirst($row['fullname']);?></td>  
                                                      <td><?php echo $exam =ucfirst($row['relationship']);?></td> 
                                                      <td><?php echo $exam =ucfirst($row['sponsoraddress']);?></td>  
                                                      <td><?php echo $exam =ucfirst($row['sponsorphone']);?></td>  
                                                      <td><?php echo $exam =htmlspecialchars($row['sponsoremail']);?></td> 
                                                      <td><?php echo $exam =ucfirst($row['sponsoroccupation']);?></td>
                                                       <td><?php echo $exam =ucfirst($row['nokname']);?></td>  
                                                      <td><?php echo $exam =ucfirst($row['nokaddress']);?></td> 
                                                      <td><?php echo $exam =htmlentities($row['nokphone']);?></td> 
                                                 <td>
                                            <a href="viewApplications.php?appId=<?php echo $row['appId']?>" target="_blank" onclick="return confirm('Deleting this applicant will remove all info about him/her, including payment slip and receipt. Are you sure you want to delete this applicant record?')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-trash"></i>  DELETE</button> </a> </td>                                       
                                          
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