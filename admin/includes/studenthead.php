<?php
 if(!isset($_SESSION["matricno"])){
  header("location: studentLogin.php");
  exit();
 } 
?>
<div class="userheader">
<a href="../students/index.php"><img src="images/logo.png" class="img-responsive" alt="MY PROFILE" width="150" height="150"></a>
 <div class="dropdown">
  <button class="dropbtn"> 
   <?php 
    $matricno=$_SESSION['matricno'];
    $select_profile="SELECT * FROM students WHERE matricno='$matricno'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 // echo "Welcome: ". $name=$data['firstname']."<br/>";
  echo "<img src='$picture' alt=\"My profile picture\"  style='width:70'; height='70'; border-radius:50px; >";
 }
?>
  
  </button>
  <div class="dropdown-content">
    <a href="../students/viewProfile.php"><span class="fa fa-eye"></span>View Profile</a>
    <a href="../students/editProfile.php"><span class="fa fa-edit"></span>Edit Profile</a>
    <a href="../students/photo.php"><span class="fa fa-user"></span>Change Picture</a>
    <a href="../students/changepass.php"><span class="fa fa-key fa-fw"></span>Change Password</a>
    <a href="../students/logout.php"><span class="fa fa-lock"></span>Logout</a>
  </div>
</div>

</div>