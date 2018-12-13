<?php include("header.php"); ?> 
<?php 
$connect=mysqli_connect("localhost","id968040_itafor","itafor1","id968040_hotspot");
if(isset($_GET['code'])){
    $code=$_GET['code'];
  }  
    if(!isset($code)){
    echo "no code supplied";
    }
    else{
    $check=mysqli_query($connect,"SELECT * FROM activate_email WHERE code='$code' AND active = '1' ");
    if(mysqli_num_rows($check) == 1)
    echo "u have already activated your accout";
    else{
    $activate=mysqli_query($connect,"UPDATE activate_email SET active = 1 WHERE code = '$code'")  ;
    echo "Your account has been activated successfully";
        }
    }
?>
<a href="index.php">login here</a>
<?php require("footer.php"); ?>