<?php ob_start(); ?>
<?php include("includes/connection.php"); ?> 
<?php
//$matricno =$_SESSION['matricno'];
   $result=mysqli_query($connection,"select * FROM sss_sci_subj");  
//$result = mysqli_query($connection, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>