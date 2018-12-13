<?php ob_start(); ?> 
<?php include("includes/connection.php"); ?>
 <?php include("includes/functions.php"); ?> 
                                              
   <?php
$result=mysqli_query($connection,"select * FROM courseregister");  
//$result = mysqli_query($connection, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>   
