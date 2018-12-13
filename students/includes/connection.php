<?php
 ob_start();
    //session
    session_start();
    //connect to a database 
require("constants.php");
global $msg;
$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(mysqli_connect_errno()){
    die("database connection failed: ".mysqli_connect_error());
}

 ?>