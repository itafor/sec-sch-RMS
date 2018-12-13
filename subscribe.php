<?php require_once("includes/connection.php");?> 
<?php

$qry = mysqli_query($connection,"INSERT into emaillist (email) value ('".$_POST['email']."')");
?>
