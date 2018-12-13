<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>

    <h4 class="page-head-line">News Headlines</h4> 
                                                <?php 
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_SESSION['username']."' AND rank = 'admin' ");
     if(mysqli_num_rows($check) > 0)
    {
   // echo '<div style="opacity: .5; pointer-events: none">' ; 
    }else{
        echo '<div style="opacity: .5; pointer-events: none;">' ;
   echo "<h3 style='color:red;'>Forbidden Area, Only the admin can access this area</h3>"; 
    }
     
    ?> 
          <?php
            if(isset($_GET['id'])){
    $news_id=urlencode($_GET['id']);
    
    $delete=mysqli_query($connection,"DELETE FROM news WHERE id='$news_id'");
  } 
          
           ?>

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
 echo"<a href=\"readnews.php?id=".urlencode($row["id"])."\"><span style='color:black;font-family:arial;font-size:14pt;text-align:center;'>$arrow2{$row["newstitle"]}{$date}$arrow1</span></a>"; 
  echo"<a href=\"removenews.php?id=".urlencode($row["id"])."\"  onclick=\"return confirm('Are you sure you want to delete this news?')\">DELETE</a>";     
      echo "</tr>";    
   }
   }else{
    echo "News storage is empty";
   }
   ?>
                                                                         
      </table> 
                </div>  
                
          </div>
     </div>
 <?php require("includes/footer.php"); ?>