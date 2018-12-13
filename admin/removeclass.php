<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Remove dapartment(s)</h4> 
    <div style="opacity: .5; pointer-events: none;">
   <h3 style='color:red;'>Not allowed, contact the engineer on 07065907948 or email him on itaforfrancis@gmail.com</h3>
     
   
   <?php 
   
      if(isset($_GET['id'])){
    $courseID=urlencode($_GET['id']); 
    $delete=mysqli_query($connection,"DELETE FROM faculties WHERE id ='$courseID' ");
    if($delete)
    {
    echo "<div class='alert alert-success'>Class removed successfully</div>";   
    }else{
    
    echo "<div class='alert alert-success'>Deletion failed</div><br/>".mysqli_error($connection);   
        }

    }
   
   $sql = mysqli_query ($connection,"SELECT * FROM faculties");
    if(mysqli_num_rows($sql)==0){
      echo "nothing found" ;
    } else{
       echo ' <div class="table-responsive">   
      <table  border="2px" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th>CLASSES</th>
                                                
                                                <th>REMOVE</th>  
                                                 
                                                
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
                                              
                                             <td><a href="removeclass.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to remove this class? You cant revert this action!')">
                            <abbr title="Remove course!"><button  class="btn btn-danger" role="button"><i class="fa fa-remove"></i></button> </abbr></a> </td> 
                                            
                                    </tr>         
        
    <?php } $sn++;?>
<?php     
}

   
?>
     
    </tbody>
    </table>
     

                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>