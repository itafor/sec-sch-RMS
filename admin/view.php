<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">MESSAGE</h4> 
  <?php
    

     if(isset($_GET['id'])){

    $id = $_GET['id'];
      
    $query =mysqli_query($connection,"UPDATE complain SET `status` = 'read' WHERE `id` = $id;");
  

    $query = mysqli_query($connection,"SELECT * from `complain` where `id` = '$id';");
    if(mysqli_num_rows($query)>0){
        while($i=mysqli_fetch_array($query)){ 
        //foreach($query as $i){ 
                echo "</strong>".$i['name']." "." MESSAGE TO ADMIN.<br/>"."</strong>".$i['MES'] ."<br/> <br/>".$i['LOGS']."<br/>";
                
                 
             //if(isset($_POST['submit'])){
             $matricno=$i['matricno'];
             $rid=$i['id'];
             
                 // }
               echo " <br>";
               echo' <form action="replyAdminOP.php" method="post">
                 <input type="hidden" name="matricno" value=" '.$i['matricno'].'">
               
                 <input type="hidden" name="id" value=" '.$i['id'].'" >
                   <label>Your Reply</label>
           <textarea name="mess"  class="form-control" cols="5" rows="5" required></textarea> 
           
            <input type="submit" name="submit" value="Reply"  class="form-control" class="btn btn-success btn-send">
                 </form>
             '; 
             
            
        }
    }
     }  
?><br/>
<?php 
    if(!empty($failure)){
     echo "<span class='btn btn-danger'>" .$failure."</span>"; 
    }
     if(!empty($success)){
     echo "<span class='btn btn-success'>" .$success."</span>";
     } 
     ?> 
<a href="index.php">Back</a>
                       
      
                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>