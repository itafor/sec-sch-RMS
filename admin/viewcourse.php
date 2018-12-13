<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Courses</h4> 
   <?php 
     //CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY

    $sql = mysqli_query ($connection,"SELECT * FROM course ");
    if(mysqli_num_rows($sql)==0){
      echo "nothing match your search" ;
    } else{
       echo '       <div class="table-responsive">   
      <table  border="2px" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                              <th>COURSE CODE</th>
                                                <th>COURSE TITLE</th> 
                                                <th>CREDIT UNIT</th>  
                                                 
                                                
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
                                              <td><?php  echo $courstitle=htmlentities($row['coursetitle']);?></td>
                                              <td><?php  echo $courstitle=htmlentities($row['creditunit']);?></td>
                                             
                                            
                                    </tr>         
        
    <?php } $sn++;?>
<?php     
}
  
?>
    
    </tbody>
    </table>
  
                </div> </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>