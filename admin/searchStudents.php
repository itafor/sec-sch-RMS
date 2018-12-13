<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>  
 
  <h4 class="page-head-line">Search Students</h4>
                                     
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
  <?php    
    if (isset($_POST['search'])) {
    $student = $_POST['student'];
    if(empty($student)){
         echo "<span class='btn btn-warning'>" ."Please enter a keyword to search for"."</span>";        
    }else{
   
 $result=mysqli_query($connection,"select  states.name as statename, locals.local_name  as lgname,  students.* FROM students
join states on states.state_id= students.state join locals on locals.local_id=students.lga WHERE firstname LIKE '%{$student}%' OR  matricno LIKE '%{$student}%' OR phone LIKE '%{$student}%'");      
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
                                                 <th>EMAIL</th> 
                                                 <th>PHONE</th>
                                                 <th>ADDRESS</th>
                                                <th>STATE</th>
                                                <th>LGA</th> 
                                                 <th>GENDER</th> 
                                                 <th>DOB</th>
                                                 <th>RELIGION</th>
                                                <th>MARRITAL STATUS</th>
                                                  <th>FACULTY</th>   
                                                   <th>DEPT</th> 
                                                    <th>COURSE OF STUDY</th>
                                                  <th>LEVEL</th>   
                                                   <th>MATRIC NO</th>  
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
                                             
                                             <td><?php echo htmlentities($row['firstname']);?></td>
                                              <td><?php echo htmlentities($row['middlename']);?></td>
                                              <td><?php echo htmlentities($row['lastname']);?></td> 
                                                
                                               <td><?php echo $ca= htmlentities($row['email']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['phone']);?></td> 
                                               <td><?php echo htmlentities($row['stdaddress']);?></td>
                                              <td><?php echo htmlentities($row['statename']);?></td>
                                              <td><?php echo htmlentities($row['lgname']);?></td> 
                                               <td><?php echo $ca= htmlentities($row['gender']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['dob']);?></td> 
                                                <td><?php echo $ca= htmlentities($row['religion']);?></td> 
                                               <td><?php echo $exam =htmlentities($row['maritalstatus']);?></td>
                                                <td><?php echo $exam =htmlentities($row['faculty']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['dept']);?></td>     
                                                   <td><?php echo $exam =htmlentities($row['discipline']);?></td>
                                                   <td><?php echo $exam =htmlentities($row['level']);?></td>
                                                 <td><?php echo $exam =htmlentities($row['matricno']);?></td>     
                                                   <td><?php echo $exam =htmlentities($row['nokname']);?></td>
                                                     <td><?php echo $exam =htmlentities($row['nokaddress']);?></td>  
                                                      <td><?php echo $exam =htmlentities($row['nokphone']);?></td> 
                                                     
                                                 <td>
                                            <a href="deletestudent.php?stdId=<?php echo $row['stdId']?>" target="_blank" onclick="return confirm('Deleting this student will remove all info about him/her,this action can not be undo. Are you sure you want to delete this applicant record?')">
                            <button  class="btn btn-danger" role="button"><i class="fa fa-trash"></i>  DELETE</button> </a> </td>                                       
                                          
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
       
 }
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
      
     
      <form action="" method="POST" >
          <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                   search student by surname or matricno or phone number:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="student" class="form-control" placeholder="Enter surname or Matricno or phone no" style=" height:70px; width: 700px;" value="<?php echo isset($_POST['student']) ? $_POST['student'] : '' ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div> </br>
            <div class="col-md-5">
                <div class="form-group">
                   <h1 style="color: gray; font-size: 80px; margin-left:-100px; margin-top:8px;">  <span class="fa fa-search"></span></h1>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
         
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="submit" name="search" value="SEARCH STUDENT" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

          </form>

 </div> 
                </div>
        </div>   
        
</div>
 <?php require("includes/footer.php"); ?>