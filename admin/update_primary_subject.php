<?php ob_start(); ?>
<?php include("includes/connection.php"); ?> 
<?php
$query = "
 UPDATE primary_subject SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE  id= '".$_POST["pk"]."'";
mysqli_query($connection, $query);    
?>
