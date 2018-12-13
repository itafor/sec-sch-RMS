<?php require_once("includes/connection.php");?> 
<?php include("includes/header.php"); ?>
    
 <div class="frontContent">
    <div class="title">NEWS & EVENTS</div>      
    <div class="container"> 
      
           <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">NEWS HEADLINE </h4>
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
                echo"<a href=\"../admin/newscontent.php?id=".urlencode($row["id"])."\"><span style='color:black;font-family:arial;font-size:16pt;text-align:center;' class='newstitle'>$arrow2  {$row["newstitle"]}  {$date}    $arrow1</span></a>"; 
      
      echo "</tr>";    
   }
   }else{
    echo "News storage is empty";
   }
   ?>
                                                                         
      </table> 

 
                </div>

            </div

            </div>
        </div> <!--content-wraper end-->
 
    
       
    </div>
 </div>

   
<?php require("includes/footer.php"); ?> 