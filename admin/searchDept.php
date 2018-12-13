<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
<h4 class="page-head-line">Search Programmes</h4>
                                     
 <?php
 global $initalsum, $failure ;
  //if(isset($_POST['submit'])){ 
 ?>                               
  <?php    
    if (isset($_POST['search'])) {
    $faculty = $_POST['faculty'];
    if(empty($faculty)){
         echo "<span class='btn btn-warning'>" ."Please enter a keyword to search for"."</span>";        
    }else{
   
 $result=mysqli_query($connection,"select  * FROM depts
 WHERE name LIKE '%{$faculty}%'");      
 //$norow=mysqli_num_rows($sql);
   if(mysqli_num_rows($result) == 0) {
     $failure = "Nothing matched your search".mysqli_error($connection);
   } else{
  echo '             <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                                <th>PROGRAMMES</th>
                                                 
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
                                             
                                             <td><?php echo htmlentities($row['name']);?></td>
                                                 <td>
                                            <a href="deletedept.php?id=<?php echo $row['id']?>" target="_blank" onclick="return confirm(' Are you sure you want to delete this programme? This action can not be undo')">
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
                   search programme by name:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="faculty" class="form-control" placeholder="search programme" style=" height:70px; width: 700px;" value="<?php echo isset($_POST['student']) ? $_POST['student'] : '' ?>">
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
                    <input id="form_name" type="submit" name="search" value="SEARCH DEPARTMENT" class="btn btn-success btn-send" class="form-control" >
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