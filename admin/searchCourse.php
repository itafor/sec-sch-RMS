<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
   <h4 class="page-head-line">Search Course</h4> 
   <?php 
   
if (isset($_POST['search'])) {
    $course = $_POST['course'];
    if(empty($course)){
        echo "Please enter a keyword to search for";
    }else{
    $sql = mysqli_query ($connection,"SELECT * FROM course WHERE name LIKE '%{$course}%' OR  coursetitle LIKE '%{$course}%'");
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
}
}   
?>
    
    </tbody>
    </table>
   <form action="" method="POST" >
          <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                   COURSE OR TITLE:<span style="color:red">*</span>
                    <input id="form_name" type="text" name="course" class="form-control" placeholder="Type course code or title to search *" style=" height:70px;" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
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
                    <input id="form_name" type="submit" name="search" value="SEARCH COURSE" class="btn btn-success btn-send" class="form-control" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

          </form>
                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>