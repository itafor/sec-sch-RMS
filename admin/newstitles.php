<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>
 
   <h4 class="page-head-line">News Headlines</h4> 
   <?php 
     $query="SELECT * FROM news  ORDER BY id DESC ";
   $result=mysqli_query($connection,$query);
       if(mysqli_num_rows($result) > 0){
           ?>
           <table class="table table-bordered">
           
           <?php
   while($row=mysqli_fetch_array($result)){
        $newstitle=$row['newstitle'];
        $date=$row['adddate']; 
        $arrow1="--";
         $arrow2="--";
    echo "<tr>";
                  echo "</br>";   
                echo"<a href=\"readnews.php?id=".urlencode($row["id"])."\"><span style='color:black;font-family:arial;font-size:14pt;text-align:center;'>$arrow2  {$row["newstitle"]}  {$date}    $arrow1</span></a>"; 
      
      echo "</tr>";    
   }
   }else{
    echo "News storage is empty";
   }
   ?>
                                                                         
      </table> 
                </div>  
                
          </div>
     
 <?php require("includes/footer.php"); ?>