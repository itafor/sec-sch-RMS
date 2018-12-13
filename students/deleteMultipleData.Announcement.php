<?php ob_start(); ?> 
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
 <?php include("includes/studenthead.php"); ?>
 <?php include("includes/studentMenu.php"); ?>
     
<?php  
                           

$delid = $_POST['delid'];
$nc = count($delid);
for($i=0;$i<$nc;$i++)
{
    $did = $delid[$i];
   $del=mysqli_query($connection,"DELETE FROM anouncement WHERE id='$did'");
    if($del){
      echo "selected data deleted succefully";
    }else{
        echo "error during deletion".mysqli_error($connection); 
    }
}
?>
<script>window.location = 'deleteAnouncement.php';</script>