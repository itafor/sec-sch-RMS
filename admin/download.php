 <?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?>
<?php
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query="SELECT *  FROM credentials WHERE id='$id'";
  $query1=mysqli_query($connection,$query);
  
  while($ros=mysqli_fetch_array($query1)) {
      $path='../uploads/'.$ros['file_name'];
      print_r($path);
  //$path=$ros['file_name'];
 if(file_exists($path)){
  header('content-Temp:'.$ros['file_tmp']);
   header('content-type:'.$ros['file_type']);
    $filename=basename($path);
     header('content-Desposition:'.$ros['file_type']); 
    header('content-lenghth='.filesize($path)); 
    readfile($path);
    exit;
  }
  }

  }
?>
<?php require("includes/footer.php"); ?>

