<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
 <h4 class="page-head-line">ANOUNCEMENT</h4>
                                 <table>
                                 <tr>
                                 
            <?php
              
     //  $matric = $_GET['matricno']; 
          $matric = $_GET['id']; 
    $query =mysqli_query($connection,"UPDATE anouncement SET `status` = 'read' WHERE id = '".$matric."' ");
  

    $query = mysqli_query($connection,"SELECT * from `anouncement` where id= '$matric' order by id DESC");
    if(mysqli_num_rows($query)>0){
        foreach($query as $i){
            
                echo "<strong>". "Anouncement from   "."  ".$i['name']. "</strong>"."<br/>"."<h4>". "TITLE: ".$i['subject']."</h4>"." <br/>".$i['mes']."<br/> <br/>".$i['date']."<br/><br/>";
                ?>
            
        
                            <?php 
        }
    }
    
?><br/>
</tr> 
</table> 
<a href="index.php">Back</a>
 
                </div>
        </div>
  <?php require("includes/footer.php"); ?>