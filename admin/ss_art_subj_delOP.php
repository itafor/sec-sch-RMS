<?php ob_start(); ?>
<?php include("includes/bkheader.php"); ?>
<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>
<?php include("includes/adminHead.php"); ?>
 <?php include("includes/adminMenu.php"); ?>     
<?php  
                           
   if(isset($_POST['delid'])){
$delid = $_POST['delid'];
$nc = count($delid);
for($i=0;$i<$nc;$i++)
{
    $did = $delid[$i];
   $del=mysqli_query($connection,"DELETE FROM sss_arts_subj WHERE id='$did'");
    if($del){
      echo "selected data deleted succefully";
    }else{
        echo "error during deletion".mysqli_error($connection); 
    }
}

   }
?>
<script>window.location = 'viewSS_art_subj.php';</script>