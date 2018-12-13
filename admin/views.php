<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">Book Request</h4> 
  <?php
    


    $id = $_GET['id'];

    $query =mysqli_query($connection,"UPDATE request SET `status` = 'read' WHERE `id` = $id;");
  

    $query = mysqli_query($connection,"SELECT * from `request` where `id` = '$id';");
    if(mysqli_num_rows($query)>0){
        foreach($query as $i){
                echo "<strong>". $i['name']." "." Requested a book.<br/>"."</strong>".$i['MES'] ."<br/> <br/>".$i['LOGS'];
            
        }
    }
    
?><br/>
<a href="index.php">Back</a>
 
                       
      
                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>