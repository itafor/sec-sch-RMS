<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Remove Subject(s)</h4> 
    
   
   <?php 
   
      if(isset($_GET['id'])){
    $courseID=urlencode($_GET['id']); 
    $delete=mysqli_query($connection,"DELETE FROM semester WHERE id ='$courseID' ");
    if($delete)
    {
    echo "<div class='alert alert-success'>Subject deleted successfully</div>"; 
    //header("location: deleteSubjForm.php");  
    }else{
    
    echo "<div class='alert alert-success'>Deletion failed</div><br/>".mysqli_error($connection);   
        }

    }
                          if(isset($_POST['submit'])) {
   $faculty=htmlspecialchars($_POST['faculty']);
   $dept=htmlspecialchars($_POST['dept']);
   $level=htmlspecialchars($_POST['level']);
   //$semester=htmlspecialchars($_POST['semester']);
   
      
   if(empty($faculty)){
     $failure = "Please enter class."; 
   }else if(empty($dept)){
     $failure = "Please enter your dept."; 
   }else if(empty($level)){
     $failure = "Please enter term."; 
   }else{
   
   
   $sql = mysqli_query ($connection,"SELECT * FROM semester WHERE level_id='".$_POST['level']."' ");
    if(mysqli_num_rows($sql)==0){
      echo "nothing found" ;
    } else{
       echo ' <div class="table-responsive">   
         <form method="post" action="deleteMultipleData.Announcement.php"> 
      <table  border="2px" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th>SUBJECTS</th>
                                                
                                                <th>REMOVE</th>
                                                  <th>  <div style=" float:left;">
           &nbsp;<input type="checkbox" id="selectall"/> Check All   &nbsp;&nbsp;
           
          <abbr title="Remove subjects!">  <button  class="btn btn-danger" name="delete" type="submit" id="delete" value="Delete" onClick="return show_confirm22();" style="background:#F52126; color:#fff; border:none; font-size:16px; padding:4px 8px;">
                <i class="fa fa-remove ">DELETE</i></button>  </abbr>
         </div>
         <div style="clear:both;"></div>
    </div> </th>
                                               <div style="margin-top:20px;">
                                        </tr>
                                    </thead>
                                    <tbody>  '; 
                                     
    //$array = array();          ?>
                      
              <tr>
    <?php
    $sn=0; 
    while ($row = mysqli_fetch_array($sql)) {
        $sn =$sn + 1;
        ?>  
                                    <tr>
                                            <td><?php echo $sn;?></td>
                                              <td><?php  echo $coursecode=htmlentities($row['name']);?></td>
                                              
                                             <td><a href="removeSubject.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to remove this subject ?')">
                            <abbr title="Remove subjects!"><button  class="btn btn-danger" role="button"><i class="fa fa-remove"></i></button> </abbr></a> </td> 
                                <td> <abbr title="Remove subjects!">     <input type="checkbox" name="delid[]" class="case" value="<?php echo $row['id']; ?>" /></abbr> </td>      
                                    </tr> 
                                            
        
    <?php } $sn++;?>
<?php     
}

   }   
  }
?>
       
    </tbody>
    </table>
       </form> 

                </div>  
                
          </div>
        
 <?php require("includes/footer.php"); ?>