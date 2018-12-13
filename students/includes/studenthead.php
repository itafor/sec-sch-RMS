<?php
 if(!isset($_SESSION["matricno"])){
  header("location: studentLogin.php");
  exit();
 } 
?>
<div class="userheader">
<a href="index.php"><?php 
    
    $select_profile="SELECT * FROM headersetting";
    $headerdisplay=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($headerdisplay)){
    $logo=$data['logo'];
    $schname=$data['schname']; 
     $schaddress=$data['schaddress']; 
     $phone=$data['phone'];
     $email=$data['email'];
     $website=$data['website'];
   echo "<img src='../admin/$logo' alt=\"My profile picture\" width='70px' height='70px'>";
   //echo '<td align="center">'.'<p class="schname">'.$schname.'</p>'.'</td>';
 }
?></a>
 <div class="dropdown">
  <button class="dropbtn"> 
   <?php 
    $matricno=$_SESSION['matricno'];
    $select_profile="SELECT * FROM students WHERE matricno='$matricno'";
    $result=mysqli_query($connection,$select_profile);
    while($data=mysqli_fetch_array($result)){
    $picture=$data['picture']; 
    echo "<br/>";
 if (empty($picture)){ 
             echo "<img src='images/default.jpg' alt=\"My profile picture\" width='100' heigth='70' >";
         }else{
          echo "<img src='$picture' alt=\"My profile picture\"  style='width:70'; height='70'; border-radius:50px; >"; 
         } 
 }
?>
  
  </button>
  <div class="dropdown-content">
    <a href="viewProfile.php"><span class="fa fa-eye"></span>View Profile</a>
    <a href="editProfile.php"><span class="fa fa-edit"></span>Edit Profile</a>
    <a href="photo.php"><span class="fa fa-user"></span>Change Picture</a>
    <a href="changepass.php"><span class="fa fa-key fa-fw"></span>Change Password</a>
    <a href="logout.php"><span class="fa fa-lock"></span>Logout</a>
  </div>
</div>

</div>