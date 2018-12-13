<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?> 
  
                                
                                     
 <?php
 global $initalsum, $failure ;
  if(isset($_POST['submit'])){ 
    $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   
   
      
   if(empty($faculty)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter term."; 
   }else{
       
     $result = mysqli_query ($connection,"SELECT faculties.name as classname, depts.name as dept FROM depts
       join faculties on depts.id = depts.faculty_id
         
        WHERE depts .faculty_id ='".$_POST['faculty']."' ");  
        
        if(mysqli_num_rows($result) == 0) {
     $failure = "No class selected".mysqli_error($connection);
   }else{
            $data=mysqli_fetch_array($result);
             echo '<h4 class="page-head-line">'.$class=$data['dept'].'   '.'SUBJECTS</h4>'; 
            
   }
   
   
   $result = mysqli_query ($connection,"SELECT * FROM semester WHERE level_id='".$_POST['level']."' ");
   if(mysqli_num_rows($result) == 0) {
     $failure = "No subjects yet".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>SUBJECT</th>
                                                 
                                              
                                                    
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
  } 
       
 }
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