<?php ob_start(); ?>
<?php include("includes/connection.php"); ?> 
<?php
$query = "
 UPDATE students SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE  stdId= '".$_POST["pk"]."'";
mysqli_query($connection, $query);    
?>
