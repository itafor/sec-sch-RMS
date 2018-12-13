<?php include("includes/bkheader.php"); ?>
 <?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>  

<?php 

if(isset($_GET['code'])){
    $code=$_GET['code'];
  }  
    if(!isset($code)){
    echo "no code supplied";
    }
    else{
    $check=mysqli_query($connection,"SELECT * FROM admin WHERE code='$code' AND active = '1' ");
    if(mysqli_num_rows($check) > 0){
    echo "u have already activated your accout";
    }else{
    $activate=mysqli_query($connection,"UPDATE admin SET active ='1' WHERE code = '$code'")  ;
    echo "Your account has been activated successfully";
        }
    }
?>
<a href="https://www.depotterhealthtech.sch.ng/admin/adminlogin.php">login here</a>
<?php require("footer.php"); ?>